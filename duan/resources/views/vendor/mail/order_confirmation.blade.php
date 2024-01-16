@component('mail::message')
<img src="{{ $logoUrl }}" alt="Logo">
# Xác nhận đơn hàng

Cảm ơn bạn đã đặt hàng tại chúng tôi. Chi tiết đơn hàng của bạn đã được lưu vào hệ thống.

## Thông tin đơn hàng

@component('mail::table')
| STT | Sản phẩm | Giá | Số lượng | Thành tiền |
|-----|----------|-----|----------|------------|
@foreach ($order->orderDetails as $index => $orderDetail)
| {{ $index + 1 }} | {{ $orderDetail->product->name }} | {{ number_format($orderDetail->product->price) }}₫ | {{ $orderDetail->quantity }} | {{ number_format($orderDetail->total) }}₫ |
@endforeach
@endcomponent

Tổng tiền: {{ number_format($order->total) }}₫

## Thông tin liên hệ

Họ tên: {{ $order->hoTen }}
Email: {{ $order->email }}
Số điện thoại: {{ $order->phone }}
Địa chỉ: {{ $order->address }}
Ghi chú: {{ $order->note }}

## Thông tin vận chuyển

Phí vận chuyển: 30,000₫

## Thanh toán

Phương thức thanh toán: {{ $order->payment_method }}
@if ($order->payment_method == 'COD')
Thanh toán khi nhận hàng.
@else
Chuyển khoản đến số tài khoản: {{ $order->bank_account }}
@endif

@component('mail::button', ['url' => $url])
Xem đơn hàng
@endcomponent

Trân trọng,<br>
{{-- {{ config('app.name') }} --}}
FPoly Book Store
@endcomponent
