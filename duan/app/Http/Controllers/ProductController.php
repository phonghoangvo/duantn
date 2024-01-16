<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tacgia;
use App\Models\Voucher;
use App\Models\nhaxuatban;
use DB;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\RuleThemsp;
use  Illuminate\Support\Facades\File;
Paginator::useBootstrap();
class ProductController extends Controller
{
    public function list()
    {
        $page = Product::orderBy('ngayDang', 'desc')->paginate(15);
        $data = $page->items();
        $tacgia = Tacgia::all();
        $voucher = Voucher::all();
        $nhaxuatban = nhaxuatban::all();
        $nhaxuatban = nhaxuatban::all();
        return view ('admin.sanpham.list',compact('data','page','tacgia','nhaxuatban','voucher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        $tacgia = Tacgia::all();
        $nhaxuatban = nhaxuatban::all();
        $voucher = Voucher::all();
        return view('admin.sanpham.add',['tacgia'=>$tacgia,'nhaxuatban'=>$nhaxuatban,'voucher'=>$voucher]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function save_add(RuleThemsp $request)
    {

        $data = $request->all();
<<<<<<< HEAD

        $category = Category::where('name','=','name');
=======
        
        $tacgia = Tacgia::where('name','=','name');
        $voucher = Voucher::where('magiamgia','=','magiamgia');
        $nhaxuatban = nhaxuatban::where('name','=','name');
>>>>>>> fb200323ef340c1b8a28d5a0261ad8a3541440a2
        $filename = $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('uploads',$filename,'public');
        $data["img"] = '/'.$path;

        Product::create($data);
<<<<<<< HEAD

        return redirect()->back() -> with('success','Sản phẩm đã được thêm thành công');
=======
        
        return redirect()->to('/admin/list')-> with('success','Sản phẩm đã được thêm thành công');
>>>>>>> fb200323ef340c1b8a28d5a0261ad8a3541440a2
    }
    public function edit($id)
    {
        $tacgia = Tacgia::all();
        $nhaxuatban = nhaxuatban::all();
        $voucher = Voucher::all();
        $product = Product::find($id);
        return view('admin.sanpham.edit',['product'=>$product,'nhaxuatban'=>$nhaxuatban,'tacgia'=>$tacgia,'voucher'=>$voucher]);
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
        $product-> idNhaxuatban = $request->input('idNhaxuatban');
        $product-> idTacgia = $request->input('idTacgia');
        $product-> idVoucher = $request->input('idVoucher');
        $product-> luotxem = $request->input('luotxem');
        $product-> namsanxuat = $request->input('namsanxuat'); 
        $product-> yeuthich = $request->input('yeuthich');  
        $product-> quantity = $request->input('quantity');
        $product-> moTa = $request->input('moTa');
        $product-> tomTat = $request->input('tomTat');


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

        $tacgia = Tacgia::where('name','=','name');
        $voucher = Voucher::where('magiamgia','=','magiamgia');
        $nhaxuatban = nhaxuatban::where('name','=','name');
        $product->update();
        return redirect()->to('/admin/list') -> with('success','Sản phẩm đã được cập nhật thành công');

    }
    public function delproduct($id){
        Product::where('id' , '=' , $id) ->delete();
        return redirect()->back() -> with('success','Sản phẩm đã được xóa thành công');
    }

    public function destroy(string $id)
    {
        //
    }
}
