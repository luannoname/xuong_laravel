<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductGallery;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    const PATH_VIEW = 'admin.products.';
    protected $title = 'Quản Lý Sản Phẩm';

    public function index()
    {
        $title = $this->title;
        $table = 'Danh sách sản phẩm';

        $products = Product::query()->with(['category'])->latest('id')->get();

        return view(self::PATH_VIEW.__FUNCTION__, compact('products', 'title', 'table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = $this->title;
        $table1 = 'Danh sách sản phẩm';
        $table2 = 'Thêm sản phẩm';

        $categories = Category::query()->pluck('category_name', 'id')->all();
        $sizes = ProductSize::query()->pluck('name', 'id')->all();
        $colors = ProductColor::query()->pluck('name', 'id')->all();

        return view(self::PATH_VIEW.__FUNCTION__, compact('categories', 'sizes', 'colors', 'title', 'table1', 'table2'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->except(['product_variants', 'image_thumb', 'product_galleries', '_token']);
        $data['is_best_sale'] = isset($request->is_best_sale) ? 1 : 0;
        $data['is_40_sale'] = isset($request->is_40_sale) ? 1 : 0;
        $data['is_hot_online'] = isset($request->is_hot_online) ? 1 : 0;
        // dd($request->all());

        // Generate a unique slug
        $slug = Str::slug($data['name'].'-'.$data['sku']);
        $originalSlug = $slug;
        $count = 1;
        
        while (Product::where('slug', $slug)->exists()) {
            $slug = $originalSlug.'-'.$count;
            $count++;
        }

        $data['slug'] = $slug;
        
        if ($request->hasFile('image_thumb')) {
            $data['image_thumb'] = $request->file('image_thumb')->store('uploads/products', 'public');
        } else {
            $data['image_thumb'] = null;
        }

        // xử lý variants
        $listProVariant = $request->product_variants;

        try {
            DB::beginTransaction();
            // Tạo dữ liệu bảng product
            $product = Product::create($data);

            $productId = $product->id;
            // Lấy id sản phẩm vừa thêm
            // xử lý product_galleries
            $listProGalleries = $request->product_galleries ?: [];
            $dataProGalleries = [];
            foreach ($listProGalleries as $image) {
                if (!empty($image)) {
                    $dataProGalleries[] = [
                        'image' => $image->store('uploads/product_galleries/' . $productId, 'public'),
                    ];
                } else {
                    $dataProGalleries[] = ['image' => null];
                }
            }
            // tạo dữ liệu bảng product gallery
            foreach ($dataProGalleries as $item) {
                $item += ['product_id' => $product->id];
                ProductGallery::query()->create($item);
            }

             // Xử lý product_variants
            foreach ($listProVariant as $item) {
                // Tìm hoặc tạo mới product_variant
                $existingVariant = ProductVariant::where([
                    'product_id' => $product->id,
                    'product_color_id' => $item['color'],
                    'product_size_id' => $item['size'],
                ])->first();

                if ($existingVariant) {
                    // Cập nhật số lượng
                    $existingVariant->quantity += !empty($item['quantity']) ? $item['quantity'] : 0;
                    $existingVariant->price = !empty($item['price']) ? $item['price'] : $existingVariant->price;
                    $existingVariant->price_sale = !empty($item['price_sale']) ? $item['price_sale'] : $existingVariant->price_sale;
                    $existingVariant->image = !empty($item['image']) ? $item['image']->store('uploads/product_variants', 'public') : $existingVariant->image;
                    $existingVariant->save();
                } else {
                    // Tạo mới nếu không tồn tại
                    $dataProVariant = [
                        'product_id' => $product->id,
                        'product_color_id' => $item['color'],
                        'product_size_id' => $item['size'],
                        'quantity' => !empty($item['quantity']) ? $item['quantity'] : 0,
                        'price' => !empty($item['price']) ? $item['price'] : 0,
                        'price_sale' => !empty($item['price_sale']) ? $item['price_sale'] : 0,
                        'image' => !empty($item['image']) ? $item['image']->store('uploads/product_variants', 'public') : null,
                    ];
                    ProductVariant::create($dataProVariant);
                }
            }

            DB::commit();
            return redirect()->route('admin.products.index')->with('success', 'Thêm sản phẩm thành công');

        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            // thực hiện xóa ảnh trong storage
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = $this->title;
        $table1 = 'Danh sách sản phẩm';
        $table2 = 'Chi tiết sản phẩm';

        $product = Product::with(['variants.color', 'variants.size'])->findOrFail($id);
        // dd($product);

        return view(self::PATH_VIEW.__FUNCTION__, compact('product', 'title', 'table1', 'table2'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = $this->title;
        $table1 = 'Danh sách sản phẩm';
        $table2 = 'Chỉnh sửa sản phẩm';

        $categories = Category::query()->get();
        $product = Product::query()->findOrFail($id);

        return view(self::PATH_VIEW.__FUNCTION__, compact('categories', 'product', 'title', 'table1', 'table2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except(['product_variants', 'image_thumb', 'product_galleries', '_token', '_method']);
        $data['is_best_sale'] = isset($request->is_best_sale) ? 1 : 0;
        $data['is_40_sale'] = isset($request->is_40_sale) ? 1 : 0;
        $data['is_hot_online'] = isset($request->is_hot_online) ? 1 : 0;
        
        // Generate a unique slug
        $slug = Str::slug($data['name'].'-'.$data['sku']);
        $originalSlug = $slug;
        $count = 1;
        
        while (Product::where('slug', $slug)->exists()) {
            $slug = $originalSlug.'-'.$count;
            $count++;
        }

        $data['slug'] = $slug;

        $product = Product::query()->findOrFail($id);
        if ($request->hasFile('image_thumb')) {
            if ($product->image_thumb && Storage::disk('public')->exists($product->image_thumb)) {
                Storage::disk('public')->delete($product->image_thumb);
            }
            $data['image_thumb'] = $request->file('image_thumb')->store('uploads/products', 'public');
        } else {
            $data['image_thumb'] = $product->image_thumb;
        }

        // Xử lý hình ảnh cũ và mới
        $oldImages = $request->input('old_product_galleries', []);
        $newImages = $request->file('product_galleries', []);

        if (!empty($newImages)) {
            // Xóa tất cả hình ảnh cũ
            $galleriesImgPath = 'uploads/product_galleries/' . $id;
            if (Storage::disk('public')->exists($galleriesImgPath)) {
                Storage::disk('public')->deleteDirectory($galleriesImgPath);
            }
            // Xóa dữ liệu hình ảnh cũ trong cơ sở dữ liệu
            $product->galleries()->delete();
    
            // Xử lý các hình ảnh mới
            foreach ($newImages as $image) {
                $imagePath = $image->store('uploads/product_galleries/'. $product->id, 'public');
                $product->galleries()->create(['image' => $imagePath]);
            }
        }
        $product->update($data);
        return redirect()->route('admin.products.index')->with('success', 'Cập nhật sản phẩm thành công');
        
        

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::with(['variants.orderItems.order', 'galleries'])->findOrFail($id);

        // // Kiểm tra trạng thái đơn hàng liên quan đến các biến thể của sản phẩm
        // $orderItems = OrderItem::whereHas('variant', function($query) use ($id) {
        //     $query->where('product_id', $id);
        // })->with('order')->get();

        // foreach ($orderItems as $orderItem) {
        //     if ($orderItem->order->status !== 'cancel') {
        //         return response()->json([
        //             'error' => 'Không thể xóa sản phẩm vì có đơn hàng liên quan chưa bị hủy.'
        //         ], 400);
        //     }
        // }

        try {
            DB::beginTransaction();

            // Xóa ảnh bảng product
            if ($product->image_thumb && Storage::disk('public')->exists($product->image_thumb)) {
                Storage::disk('public')->delete($product->image_thumb);
            }

            // Xóa ảnh galleries
            $product->galleries()->delete();

            // Xóa toàn bộ ảnh trong thư mục
            $galleriesImgPath = 'uploads/product_galleries/' . $id;
            if (Storage::disk('public')->exists($galleriesImgPath)) {
                Storage::disk('public')->deleteDirectory($galleriesImgPath);
            }

            // Xóa ảnh trong bảng product_variants
            foreach ($product->variants as $variant) {
                if ($variant->image && Storage::disk('public')->exists($variant->image)) {
                    Storage::disk('public')->delete($variant->image);
                }
            }
            $product->variants()->delete();

            // Xóa sản phẩm
            $product->delete();

            DB::commit();

            return response()->json([
                'success' => 'Xóa sản phẩm thành công'
            ]);
        } catch(\Exception $exception) {
            DB::rollBack();
            // thực hiện xóa ảnh trong storage

            return back();
        }

        // Try {
        //     DB::beginTransaction();
        //     $product->galleries()->delete();
        //     // xóa order

        //     $product->variants()->delete();
        //     $product->delete();
        //     DB::commit();
        // } catch(\Exception $exception) {
        //     DB::rollBack();
        //     // thực hiện xóa ảnh trong storage

        //     return back();
        // }
    }
}
