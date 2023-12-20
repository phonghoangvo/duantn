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
    
        if(Auth::check() == false){
            return redirect()->route('login');
        }
      
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
    
    public function updateCart(Request $request) {
        if($request->id && $request->quantity) {
            $cart = session() -> get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success','Giỏ hàng của bạn đã được cập nhật!');

        }

    }
    public function remove(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Bạn đã xóa sản phẩm khỏi giỏ hàng');
        }
    }
    
    // public function processCheckout(Request $request){


    //     //Validation
    //     $validator = Validator::make($request->all(),[
    //         'hoTen' => 'required|min:5',
    //         'email' => 'required',
    //         'soDienThoai' => 'required|min:10|max:11',
    //         // 'diaChi' => 'required|min:30',
    //         // 'diaChi' => 'required',
    //     ]);

    //     if($validator->fails()){
    //         return response()->json([
    //             'message' => 'Hãy sửa những chố lỗi',
    //             'status' => false,
    //             'errors' => $validator->errors()
    //         ]);
    //     }
    //     //saveuser
    //     // $diachiuse
    //     $user = auth()->user();

    //     if ($user) {
    //         DiachiKhachhang::updateOrCreate(
    //             ['user' => $user->id],
    //             [
    //                 'hoTen' => $request->hoTen,
    //                 'email' => $request->email,
    //                 'soDienThoai' => $request->soDienThoai,
    //                 'diaChi' => $request->diaChi,
    //                 'phuongthucthanhtoan' => $request->phuongthucthanhtoan,
    //             ]
    //         );
    //         return response()->json([
    //             'message' => 'ok',
    //             'status' => true,
    //             'errors' => []
    //         ]);
    //     } else {
    //         // Xử lý trường hợp khi người dùng không được xác thực
    //     }
    // }
    public function checkout(Request $request) {
        $productItems = [];
 
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        foreach (session('cart') as $id => $details) {
 
            $product_name = $details['name'];
            $total = $details['price'];
            $quantity = $details['quantity'];
 
            $two0 = "00";
            $unit_amount = "$total$two0";
 
            $productItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $product_name,
                    ],
                    'currency'     => 'USD',
                    'unit_amount'  => $unit_amount,
                ],
                'quantity' => $quantity
            ];
        }
 
        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'            => [$productItems],
            'mode'                  => 'payment',
            'allow_promotion_codes' => true,
            'metadata'              => [
                'user_id' => "0001"
            ],
            'customer_email' => "khavodinh46@gmail.com", //$user->email,
            'success_url' => route('success'),
            'cancel_url'  => route('cancel'),
        ]);
     
        return redirect()->away($checkoutSession->url);
    }
    public function success()
    {
        return view('check_out');
    }
 
    public function cancel()
    {
        return view('cancel');
    }
}
