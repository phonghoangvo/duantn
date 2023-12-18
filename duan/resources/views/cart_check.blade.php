
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
                <form id="oderForm" name="oderForm" action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="hoTen" id="hoTen" placeholder="Họ và Tên" >
                        <p></p>
                    </div>
                    <div class="row">
                         <div class="col-lg-7 mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                            <p></p>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <input type="tel" class="form-control" name="soDienThoai" id="soDienThoai" placeholder="Số điện thoại">
                            <p></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="diaChi" id="diaChi" placeholder="Địa chỉ" >
                        <p></p>
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Phương thức giao hàng:</label>
                        <div class="form-control">
                            <input type="radio" checked>
                                    <span> Giao hàng tận nơi</span>
                                    <span class="text-end">30.000 Đ</span>
                        </div>
                    </div>
                
                    <div class="mb-3">
                        <label for="phuongThucThanhToan" class="form-label">Phương Thức Thanh Toán:</label>
                        <div class="">
                            <input type="radio" name="phuongthucthanhtoan" value="tructiep" id="thanhtoan1" checked>
                            <label for="thanhtoan1" class="form-check-label">Trực tiếp</label>
                        </div>
                        <div class="">
                            <input type="radio" name="phuongthucthanhtoan" value="thetindung" id="thanhtoan2">
                            <label for="thanhtoan2" class="form-check-label">Thẻ tín dụng</label>
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
                    </div>
                    
                                                   
                    <div class="mb-3">
                        <label for="ghiChu" class="form-label">Ghi Chú:</label>
                        <textarea class="form-control" name="ghiChu" id="ghiChu" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <a class="text-decoration-none" href="{{ url('/gio-hang') }}">Giỏ Hàng</a>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="submit" class="btn btn-primary">Hoàn tất đơn hàng</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 p-5">
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Thành tiền</th>
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
                                        <td class="col-2"><img src="/uploads/{{ $details['img'] }}" alt="" width="50px" height="50px"></td>
                                        <td> 
                                            <input type="number" value="{{ $details['quantity'] ?? 1 }}" class="form-control quantity cart-update" min="1" name="quantity[{{ $details['id'] }}]">
                                        </td>
                                        <td>{{number_format( $details['price']) }}₫</td>
                                        <td class="col-2">{{number_format( $details['price'] * ($details['quantity'] ?? 1) )}}₫</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="input-group d-flex">
                    <input type="text" name="" id="" class="form-control" placeholder="Mã giảm giá">
                    <button type="button" class="btn btn-secondary">Sử dụng</button>
                </div>
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

