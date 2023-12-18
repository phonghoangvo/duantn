<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\RuleThemsp;
use  Illuminate\Support\Facades\File;
Paginator::useBootstrap();
class ProductController extends Controller
{
    public function list()
    {
        $page = Product::paginate(15);
        $data = $page->items();
        $category = Category::all();
        return view ('admin.sanpham.list',compact('data','page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        $category = Category::all();
        return view('admin.sanpham.add',['category'=>$category]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function save_add(RuleThemsp $request)
    {

        $data = $request->all();
        
        $category = Category::where('name','=','name');
        $filename = $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('uploads',$filename,'public');
        $data["img"] = '/'.$path;
        
        Product::create($data);
        
        return redirect()->back() -> with('success','Sản phẩm đã được thêm thành công');
    }
    public function edit($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.sanpham.edit',['product'=>$product,'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        $product-> name = $request->input('name');
        $product-> price = $request->input('price');
        $product-> priceSale = $request->input('priceSale');
        $product-> nhacungcap = $request->input('nhacungcap');
        $product-> nhaxuatban = $request->input('nhaxuatban');
        $product-> tacgia = $request->input('tacgia');
        $product-> ngayDang = $request->input('ngayDang');
        $product-> moTa = $request->input('moTa');

        if($request->hasFile('img')){
            $path='/uploads/'.$product->img;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('img');
            $ext = $file->getClientOriginalName();
            $filename = '/uploads/'.$ext;
            $file->move('/uploads/',$filename);
            $product->img = $filename;
        }

        $category = Category::where('name','=','name');
        $product->update();
        return redirect()->back() -> with('success','Sản phẩm đã được cập nhật thành công');

    }
    public function del($id){
        Product::where('id' , '=' , $id) ->delete();
        return redirect()->back() -> with('success','Sản phẩm đã được xóa thành công');
    }
  
    public function destroy(string $id)
    {
        //
    }
}
