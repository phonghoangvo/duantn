@extends('layout')
@section('noidung')
<div class="container pt-5 pb-5">
    <div class='row'>
        <h1 class="pt-5 pb-5">
            Đặt hàng thành công
            <i class="bi bi-check-circle-fill" style="color: green"></i>
        </h1>
        <div class='col-md-12 pt-5 pb-5'>
            <div class="card">
                <div class="card-header pt-5 pb-5">
                    {{-- Chúng tôi đã nhận được đơn hàng và sẽ vận chuyển đến bạn sớm nhất --}}
                    <h1>Thông tin đơn hàng</h1>
                    <p>Mã đơn hàng: {{ $order->id }}</p>
                    <p>Ngày đặt hàng: {{ $order->created_at }}</p>
                    <p>Tổng tiền: {{ number_format($order->total) }}₫</p>

                    <h2>Chi tiết đơn hàng</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">ID</th>
                                <th scope="col" style="width: 10%">Hình ảnh</th>
                                <th scope="col" style="width: 40%">Sản phẩm</th>
                                <th scope="col" style="width: 10%">Số lượng</th>
                                <th scope="col" style="width: 10%">Giá</th>
                                <th scope="col" style="width: 10%">Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{ $orderDetail->id_product }}</td>
                                <td><img src="{{ $orderDetail->product->img }}" alt="" width="80px" height="80px"></td>
                                <td>{{ $orderDetail->product->name }}</td>
                                <td>{{ $orderDetail->quantity }}</td>
                                <td data-th="Price">{{ number_format($orderDetail->product->price) }}₫</td>
                                <td>{{ number_format($orderDetail->total) }}₫</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <a href="{{ url('/') }}" class="btn btn-info text-dark"> <i class="fa fa-arrow-left"></i>Tiếp tục mua sắm</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
