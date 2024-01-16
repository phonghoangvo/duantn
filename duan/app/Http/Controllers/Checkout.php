<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Checkout extends Controller
{
    public function index()
    {
        $cart = \App\Models\Cart::where('user_id', auth()->id())->get();
        $total = 0;
        foreach ($cart as $item) {
            $product = \App\Models\Product::find($item->product_id);
            $total += $product->price * $item->quantity;
        }
        session(['total' => $total]);
        return view('cart_check', compact('cart', 'total'));
    }
    public function store(Request $request)
    {
        // Lưu thông tin đơn hàng
        $order = new Order();
        $order->user_id = $request->user_id ?? Auth::id();
        $order->hoTen = $request->hoTen;
        $order->email = $request->email;
        $order->phone = $request->soDienThoai;
        $order->address = $request->diaChi;
        $order->note = $request->ghiChu;
        $total = session('total');
        $order->total = $total + 30000; // Tổng cộng = tạm tính + phí vận chuyển
        $order->status = 'new'; // Trạng thái mới
        $order->save();

        $cart = session()->get('cart');
        if ($cart !== null) {
            foreach ($cart as $item) {
                $orderDetail = new Order_Detail();
                $orderDetail->order_id = $order->id;
                $orderDetail->id_product = $item['id'];
                $orderDetail->total = $item['price'] * $item['quantity'];
                $orderDetail->quantity = $item['quantity'];
                $orderDetail->save();
            }
        }
        // Lưu chi tiết đơn hàng
        // $cart = session()->get('cart');
        // foreach ($cart as $item) {
        //     $orderDetail = new Order_Detail();
        //     $orderDetail->order_id = $order->id;
        //     $orderDetail->product_id = $item['id'];
        //     $orderDetail->price = $item['price'];
        //     $orderDetail->quantity = $item['quantity'];
        //     $orderDetail->save();
        // }

        // Xóa giỏ hàng
        session()->forget('cart');

        // Redirect đến trang xác nhận đặt hàng
        return redirect()->route('order.confirm');
    }
    // public function confirm()
    // {
    //     // Lấy thông tin đơn hàng và chi tiết đơn hàng
    //     $order = Order::where('id', auth()->id())->orderBy('created_at', 'desc')->first();
    //     $orderDetails = Order_Detail::where('order_id', $order->id)->get();

    //     // Trả về view với dữ liệu
    //     return view('order_confirm', compact('order', 'orderDetails'));
    // }
    public function confirm()
    {
        // Lấy thông tin đơn hàng và chi tiết đơn hàng
        $order = Order::where('user_id', auth()->id())->orderBy('created_at', 'desc')->first();

        if ($order) {
            $orderDetails = Order_Detail::where('order_id', $order->id)->get();

            // Trả về view với dữ liệu
            return view('order_confirm', compact('order', 'orderDetails'));
        } else {
            // Redirect người dùng về trang chủ nếu không có đơn hàng nào
            return redirect()->route('index');
        }
    }
}
