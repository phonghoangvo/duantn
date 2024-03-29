
@extends('layout')
@section('tieudetrang')
    Thanh toán
@endsection
@section('noidung')
    <div class="container px-0 pt-3 pb-3">
        <a class="text-decoration-none text-dark" href="trangchu.html">
            Trang chủ
        </a> /
        <small>Thanh toán</small>
    </div>
    <div class="container pt-3 pb-3 px-0">
        <h2>Trang Thanh Toán</h2>
        <div class="row">
            <div class="col-lg-5 p-5 left">
                <h5>Thông tin giao hàng</h5>
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    @if(auth()->check())
                    <!-- Hiển thị thông tin người dùng nếu đã đăng nhập -->
                    <div class="mb-3">
                        <label for="">Họ Tên:</label>
                        <input type="text" class="form-control" name="hoTen" id="hoTen" placeholder="Họ và Tên" value="{{ auth()->user()->name }}" >
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 mb-3">
                            <label for="">Email: </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ auth()->user()->email }}" >
                            <p></p>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <label for="">Số điện thoại:</label>
                            <input type="tel" class="form-control" name="soDienThoai" id="soDienThoai" placeholder="Số điện thoại" value="{{ auth()->user()->phone }}" >
                            <p></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Địa chỉ:</label>
                        <input type="text" class="form-control" name="diaChi" id="diaChi" placeholder="Địa chỉ" value="{{ auth()->user()->address }}" >
                        <p></p>
                    </div>
                @else
                    <!-- Hiển thị trường nhập liệu nếu chưa đăng nhập -->
                    <div class="mb-3">
                        <input type="text" class="form-control" name="hoTen" id="hoTen" placeholder="Họ và Tên">
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            <p></p>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <input type="tel" class="form-control" name="soDienThoai" id="soDienThoai" placeholder="Số điện thoại">
                            <p></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="diaChi" id="diaChi" placeholder="Địa chỉ">
                        <p></p>
                    </div>
                @endif



                    {{-- <div class="mb-3">
                        <label for="" class="form-label">Phương thức:</label>
                        <div class="form-control">
                            <input type="radio" value="thanhtoankhinhanhang" name="phuongthucthanhtoan" checked>
                            <label for="" class="form-check-label">Thanh toán khi nhận hàng</label>
                        </div>
                    </div>
                    <div class="form-row d-none" id="card-thanhtoan-form">
                        <div class="form-group col mb-3">
                            <label for="inputCardNumber">Số thẻ:</label>
                            <input type="text" class="form-control" id="inputCardNumber" placeholder="Điền số trên thẻ">
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-md-6">
                                <label for="inputCardHolder">Tên chủ thẻ:</label>
                                <input type="text" class="form-control" id="inputCardHolder" placeholder="VD: NGUYEN VAN A">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputExpiration">Thời gian hiệu lực:</label>
                                <input type="text" class="form-control" id="inputExpiration" placeholder="MM/YYYY">
                            </div>
                        </div>
                    </div> --}}


                    <div class="mb-3">
                        <label for="ghiChu" class="form-label">Ghi Chú:</label>
                        <textarea class="form-control" name="ghiChu" id="ghiChu" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn btn-light w-100" id="check-out-button">
                                <a class="text-decoration-none" href="{{ url('/giohang') }}">Quay lại giỏ Hàng</a>
                            </button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <form action="{{ route('order.store') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Hoàn tất đơn hàng</button>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 p-5">
                <div class="pt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">STT</th>
                                <th scope="col" style="width: 26%">Tên sản phẩm</th>
                                <th scope="col" style="width: 15%">Hình ảnh</th>
                                <th scope="col" style="width: 13%">Số lượng</th>
                                <th scope="col" style="width: 10%">Giá</th>
                                <th scope="col" style="width: 10%">Thành tiền</th>
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
                                    $total += $details['price'] * ($details['quantity'] ?? 1);
                                    @endphp
                                    <tr>
                                        <td>{{$stt++}}</td>
                                        <td>{{ $details['name'] }}</td>
                                        <td class="col-2"><img src="{{ $details['img'] }}" alt="" width="80px" height="80px"></td>
                                        <td> {{ $details['quantity'] }} </td>
                                        <td>{{number_format( $details['price']) }}₫</td>
                                        <td class="col-2">{{number_format( $details['price'] * ($details['quantity'] ?? 1) )}}₫</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                {{-- <hr>
                <div class="input-group d-flex">
                    <input type="text" name="" id="" class="form-control" placeholder="Mã giảm giá">
                    <button type="button" class="btn btn-secondary">Sử dụng</button>
                </div> --}}
                <hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Tạm tính:</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <p>{{number_format( $total) }}₫</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Phí vận chuyển:</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <p>30.000₫</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Tổng cộng:</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <span>{{number_format ($total + 30000) }}₫</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

