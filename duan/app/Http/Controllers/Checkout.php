<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmation;
use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Checkout extends Controller
{
    public function index()
    {
        $cart = \App\Models\Cart::where('user_id', auth()->id())->get();
        return view('cart_check', compact('cart'));
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

        // Tính toán lại giá trị total cho đơn hàng mới
        $total = 0;
        $cart = session()->get('cart');
        foreach ($cart as $item) {
            $product = \App\Models\Product::find($item['id']);
            $total += $product->price * $item['quantity'];
        }
        $total += 30000; // Thêm phí vận chuyển

        $order->total = $total;
        $order->status = 'new'; // Trạng thái mới
        $order->save();

        // Lấy thông tin chi tiết đơn hàng từ session
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

        // Gửi email đến khách hàng
        $orderDetails = Order_Detail::where('order_id', $order->id)->get();
        $data = [
            'order' => $order,
            'orderDetails' => $orderDetails,
            'url' => route('order.confirm'),
        ];
        Mail::to($order->email)->send(new OrderConfirmation($data));
        session()->forget('cart');

        // Redirect đến trang xác nhận đặt hàng
        return redirect()->route('order.confirm');
    }

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
