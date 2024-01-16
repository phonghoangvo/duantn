<?php

namespace App\Http\Controllers;
use App\Models\Oder;
use App\Models\Oder_detail;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;

class OderController extends Controller
{
    public function listoder(){
        
        $Oder_detail = Oder_detail::get(); 
        $Product = Product::all();
        $Oder = Oder::all();
        return view ('admin.Oder.listoder',compact('Oder','Oder_detail','Product'));
    }
    public function deleteorder($id){
        Oder_detail::where('id' , '=' , $id) ->delete();
        return redirect()->back() -> with('success','Đơn hàng đã được xóa thành công');
    }
    public function store(Request $request){
        if (is_null($request->status)){
            return redirect()->route('listoder');
        }
        $status = new status();
        $status->status = implode(",",$request->status);
        $status->save();
        return redirect()->back()->with('success','Trạng Thái đã được cập nhật thành công'); 
    }
}
