<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $title = 'Quản Lý Danh Mục';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = $this->title;
        $table = 'Danh sách danh mục';

        $categoryList = Category::orderByDesc('status')->get();

        return view('admin.categories.index', compact('title', 'table', 'categoryList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = $this->title;
        $table1 = 'Danh sách danh mục';
        $table2 = 'Thêm danh mục';

        return view('admin.categories.create', compact('title', 'table1', 'table2'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        if ($request->isMethod('POST')) {
            $param = $request->except('_token');

            if ($request->hasFile('thumbnail')) {
                $filePath = $request->file('thumbnail')->store('uploads/categories', 'public');
            } else {
                $filePath = null;
            }
            $param['thumbnail'] = $filePath;

            Category::create($param);
            
            return redirect()->route('admin.categories.index')->with('success', 'Thêm danh mục thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = $this->title;
        $table1 = 'Danh sách danh mục';
        $table2 = 'Chỉnh sửa danh mục';

        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category','title', 'table1', 'table2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->isMethod('PUT')) {
            $param = $request->except('_token', '_method');

            $category = Category::findOrFail($id);

            if ($request->hasFile('thumbnail')) {
                if ($category->thumbnail && Storage::disk('public')->exists($category->thumbnail)) {
                    Storage::disk('public')->delete($category->thumbnail);
                }
                $filePath = $request->file('thumbnail')->store('uploads/categories', 'public');
            } else {
                $filePath = $category->thumbnail;
            }
            $param['thumbnail'] = $filePath;

            $category->update($param);
            
            return redirect()->route('admin.categories.index')->with('success', 'Cập nhật danh mục thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        if ($category->thumbnail && Storage::disk('public')->exists($category->thumbnail)) {
            Storage::disk('public')->delete($category->thumbnail);
        }

        // return redirect()->route('admin.categories.index')->with('success', 'Xóa danh mục thành công');
        return response()->json([
            'success' => 'Xóa danh mục thành công'
        ]);
    }

//     public function destroy(string $id)
// {
//     $category = Category::with(['product.variants', 'product.galleries'])->findOrFail($id);

//     try {
//         DB::beginTransaction();

//         // Xóa ảnh đại diện của danh mục nếu có
//         if ($category->thumbnail && Storage::disk('public')->exists($category->thumbnail)) {
//             Storage::disk('public')->delete($category->thumbnail);
//         }

//         // Xóa ảnh và biến thể liên quan từ các sản phẩm
//         $products = $category->product;
//         foreach ($products as $product) {
//             // Xóa ảnh chính của sản phẩm
//             if ($product->image_thumb && Storage::disk('public')->exists($product->image_thumb)) {
//                 Storage::disk('public')->delete($product->image_thumb);
//             }

//             // Xóa ảnh từ bảng galleries
//             $galleries = $product->galleries;
//             foreach ($galleries as $gallery) {
//                 if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
//                     Storage::disk('public')->delete($gallery->image);
//                 }
//             }

//             // Xóa toàn bộ ảnh trong thư mục
//             $galleriesImgPath = 'uploads/product_galleries/' . $product->id;
//             if (Storage::disk('public')->exists($galleriesImgPath)) {
//                 Storage::disk('public')->deleteDirectory($galleriesImgPath);
//             }

//             // Xóa ảnh từ bảng product_variants
//             $variants = $product->variants;
//             foreach ($variants as $variant) {
//                 if ($variant->image && Storage::disk('public')->exists($variant->image)) {
//                     Storage::disk('public')->delete($variant->image);
//                 }
//                 // Xóa biến thể
//                 $variant->delete();
//             }

//             // Xóa sản phẩm
//             $product->delete();
//         }

//         // Xóa danh mục
//         $category->delete();

//         DB::commit();

//         return response()->json([
//             'success' => 'Xóa danh mục thành công'
//         ]);
//     } catch(\Exception $exception) {
//         DB::rollBack();
//         dd($exception);

//         // Xử lý xóa ảnh trong storage nếu có lỗi
//         // Có thể thêm code để xóa các ảnh đã xóa nhưng không thành công trong bước trước

//         return response()->json([
//             'error' => 'Có lỗi xảy ra khi xóa danh mục'
//         ], 500);
//     }
// }
}
