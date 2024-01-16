<?php

namespace App\Http\Controllers;

use App\Models\Cart as ModelsCart;
use App\Models\Cuahang;
use App\Models\DiachiKhachhang;
use App\Models\Order;
use App\Models\Order_Detail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Stripe\Checkout\Session;

class CartController extends Controller
{
    public function cart(){
        return view('cart');
    }
    // public function addToCart($id){
    //     $product = Cuahang::findOrFail($id);
    //     $cart = session()->get('cart', []);
    //     if(isset($cart[$id])){
    //         $cart[$id]['quantity']++;

    //     } else {
    //         $cart[$id] = [
    //             "id" => $product->id,
    //             "name" => $product->name,
    //             "img" => $product->img,
    //             "quantity" => 1,
    //             "price" => $product->price,
    //         ];
    //     }

    //     session()->put("cart", $cart);
    //     return redirect()->back()->with("add-to-cart","Bạn đã thêm sản phẩm vào giỏ hàng");
    // }
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

        // Lưu dữ liệu vào bảng carts trong database
        $cartData = [
            'user_id' => auth()->id(), // Lấy ID của người dùng đang đăng nhập
            'product_id' => $product->id,
            'quantity' => $cart[$id]['quantity'],
            'price' => $product->price,
            'total' => $product->price * $cart[$id]['quantity'],
        ];
        \App\Models\Cart::create($cartData);

        session()->put("cart", $cart);
        return redirect()->back()->with("add-to-cart","Bạn đã thêm sản phẩm vào giỏ hàng");
    }

    public function updateCart(Request $request) {
        if($request->id && $request->quantity) {
            $cart = session() -> get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);

            // Cập nhật số lượng sản phẩm trong bảng carts
            $cartItem = \App\Models\Cart::where('product_id', $request->id)->first();
            $cartItem->quantity = $request->quantity;
            $cartItem->total = $cartItem->quantity * $request->price; // Thêm dòng này
            $cartItem->save();

            session()->flash('success','Giỏ hàng của bạn đã được cập nhật!');
        }
    }
    // public function remove(Request $request){
    //     if($request->id){
    //         $cart = session()->get('cart');
    //         if(isset($cart[$request->id])){
    //             unset($cart[$request->id]);
    //             session()->put('cart', $cart);
    //         }
    //         session()->flash('success', 'Bạn đã xóa sản phẩm khỏi giỏ hàng');
    //     }
    // }
    public function remove(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            // Xóa dữ liệu từ bảng carts trong database
            $cartItem = \App\Models\Cart::where('product_id', $request->id)->first();
            $cartItem->delete();

            session()->flash('success', 'Bạn đã xóa sản phẩm khỏi giỏ hàng');
        }
    }
    public function success(Request $request) {
        $checkoutSessionId = session()->get('checkout_session_id');

        $checkoutSession = \Stripe\Checkout\Session::retrieve($checkoutSessionId, [ 'api_key' => config('stripe.sk') ]);
        if ($checkoutSession->payment_status == 'paid') {
            session()->forget('cart');
        }

        return redirect()->route('giohang');
    }
    public function cancel()
    {
        return view('cancel');
    }
    public function cart_check(){
        return view('cart_check');
    }

    public function cart_pay(){
        return view('vendor.cashier.payment');
    }
    public function checkout(Request $request) {
        $productItems = [];

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        foreach (session('cart') as $id => $details) {

            $product_name = $details['name'];
            $total = $details['price'];
            $quantity = $details['quantity'];
<<<<<<< HEAD

            $unit_amount = "$total";

=======
 
            $two0 = "00";
            $unit_amount = "$total$two0";
 
>>>>>>> fb200323ef340c1b8a28d5a0261ad8a3541440a2
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
            'payment_method_types' => ['card'],
            'line_items'            => [$productItems],
            'mode'                  => 'payment',
            'allow_promotion_codes' => true,
            'metadata'              => [
                'user_id' => "0001"
            ],
<<<<<<< HEAD
            'customer_email' => "khavodinh46@gmail.com",
=======
            'customer_email' => "khavodinh46@gmail.com", //$user->email,
>>>>>>> fb200323ef340c1b8a28d5a0261ad8a3541440a2
            'success_url' => route('success'),
            'cancel_url'  => route('cancel'),
        ]);

        session()->put('checkout_session_id', $checkoutSession->id);

        return redirect()->away($checkoutSession->url);
    }
<<<<<<< HEAD
    // ------------------------------------------------
=======
    public function success()
    {
        return view('check_out');
    }
 
    public function cancel()
    {
        return view('cancel');
    }
>>>>>>> fb200323ef340c1b8a28d5a0261ad8a3541440a2
}
