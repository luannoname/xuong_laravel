<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
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
}
