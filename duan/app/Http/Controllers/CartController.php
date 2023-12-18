<?php

namespace App\Http\Controllers;
use App\Models\Cuahang;
use App\Models\DiachiKhachhang;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function cart(){
        return view('cart');
    }
    public function cartcheck(){
    
        // if(Auth::check() == false){
        //     return redirect()->route('login');
        // }
    
      
        return view('cart_check');
    }
    public function addToCart($id){
        $product = Cuahang::findOrFail($id);
        $cart = session()->get('cart', []);
    
        if(isset($cart[$id])){
            $cart[$id]['quantity']++; 
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "img" => $product->img,
                "quantity" => 1,
                "price" => $product->price,
            ];
        }
    
        session()->put("cart", $cart);
        return redirect()->back()->with("add-to-cart","Bạn đã thêm sản phẩm vào giỏ hàng");
    }
    
    public function updateCart(Request $request){
        if($request->id && $request->quanlity){
            $cart = session()->get('cart');
            $cart[$request->id]["quanlity"] = $request->quanlity;
            session()->put('cart', $cart);
            session()->flash('success','Gio hang da duoc cap nhat');

        }

    }
    public function remove(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash("success", "Bạn đã xóa sản phẩm khỏi giỏ hàng");
        }
    }
    
    public function processCheckout(Request $request){


        //Validation
        $validator = Validator::make($request->all(),[
            'hoTen' => 'required|min:5',
            'email' => 'required',
            'soDienThoai' => 'required|min:10|max:11',
            // 'diaChi' => 'required|min:30',
            // 'diaChi' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Hãy sửa những chố lỗi',
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
        //saveuser
        // $diachiuse
        $user = auth()->user();

        if ($user) {
            DiachiKhachhang::updateOrCreate(
                ['user' => $user->id],
                [
                    'hoTen' => $request->hoTen,
                    'email' => $request->email,
                    'soDienThoai' => $request->soDienThoai,
                    'diaChi' => $request->diaChi,
                    'phuongthucthanhtoan' => $request->phuongthucthanhtoan,
                ]
            );
            return response()->json([
                'message' => 'ok',
                'status' => true,
                'errors' => []
            ]);
        } else {
            // Xử lý trường hợp khi người dùng không được xác thực
        }


                    
            }
}
