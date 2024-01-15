@extends('layout')
@section('tieudetrang')
    Giỏ hàng
@endsection
@section('noidung')
    <div class="container px-0 pt-3 pb-3">
        <a class="text-decoration-none text-dark" href="">
            Trang chủ
        </a> /
        <small>Giỏ hàng</small>
    </div>
    <div class="container pt-3 pb-3 px-0">
        <h4 class="mb-4">Giỏ hàng</h4>
        <div class="container px-0">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('update-cart'))
            <div class="alert alert-success">
                {{ session('update-cart') }}
            </div>
        @endif
        </div>
        <div class="row">
            <div class=" p-3">
                <table class="table table-hover">
                    @if (session('cart') && count(session('cart')) > 0)
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%">STT</th>
                            <th scope="col" style="width: 10%">Hình ảnh</th>
                            <th scope="col" style="width: 40%">Sản phẩm</th>
                            <th scope="col" style="width: 10%">Số lượng</th>
                            <th scope="col" style="width: 10%">Giá</th>
                            <th scope="col" style="width: 10%">Tổng</th>
                            <th scope="col" style="width: 5%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            $stt = 1;
                        @endphp
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                @php
                                    $quantity = isset($details['quantity']) ? $details['quantity'] : 1;
                                    $total += $details['price'] * $quantity;
                                @endphp
                                <tr data-id="{{ $id }}">
                                    <td>{{ $stt++ }}</td>
                                    <td><img src="{{ $details['img'] }}" alt="" width="80px" height="80px"></td>
                                    <td>{{ $details['name'] }}</td>

                                    <td data-th="Quantity"> 
                                        <input type="number" value="{{ $quantity }}" class="form-control quantity cart_update" min="1"/>
                                    </td>
                                    <td data-th="Price">{{ number_format($details['price']) }}₫</td>
                                    <td data-th="Subtotal">{{ number_format($details['price'] * $details['quantity']) }}₫</td>
                                    <td><button class="btn btn-danger btn-sm cart-remove">Xóa</button></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody> 
                </table>
            </div>
            <div class="col-lg-3 p-3 hg">
               
                <div class="p-2">
                    <div class="row">
                        <div class="col-6">
                            <h5>Tổng cộng:</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="text-end text-danger">{{number_format($total) }}₫</h5>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <form action="/checkout" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button class="btn btn-primary w-100" type="submit" id="check-out-button">
                                Tiến hành thanh toán
                        </button>
                    </form>
                    {{-- <button class="btn btn-primary w-100">
                        <a href="{{ url("/thanhtoan") }}" class="text-light text-decoration-none">
                            Tiến hành thanh toán
                        </a>
                    </button> --}}
                </div>
            </div>
                 @else
                    
                        <table>
                        </table>
                            <div class="col text-center">
                            <h2>Giỏ hàng của bạn đang trống!</h2>
                            <h5>Hãy thêm sản phẩm vào ngay!!</h5>
                            <a href="{{ url("/cuahang") }}" class="btn btn" style="background-color: #f27024; color:white;">Mua ngay</a>
                        </div>
                    
                    
                   
                @endif
        </div>
    </div>
    
@endsection
