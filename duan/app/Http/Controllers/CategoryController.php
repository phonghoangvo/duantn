<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    public function listcate(){
        $cate = Category::get();
        return view ('admin.danhmuc.list',compact('cate'));
    }
    public function addcate(){
        return view('admin.danhmuc.add');
    }
    public function save_cate(Request $request)
    {
        $cate = $request->all();
        Category::create($cate);
        Category::where('hidden',1)->get();
        return redirect()->back() -> with('success','Danh mục đã được thêm thành công');
    }
    public function edit($id)
    {
        $cate = Category::find($id);
        return view('admin.danhmuc.edit',compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $cate = Category::find($id);
        $cate-> name = $request->input('name');
        $cate-> thutu = $request->input('thutu');
        $cate-> slug = $request->input('slug');
        $cate->update();
        return redirect()->back() -> with('success','Danh mục đã được cập nhật thành công');

    }
    public function del($id){
        Category::where('id' , '=' , $id) ->delete();
        return redirect()->back() -> with('success','Danh mục đã được xóa thành công');
    }
}
