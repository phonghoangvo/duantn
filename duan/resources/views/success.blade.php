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
                    Chúng tôi đã nhận được đơn hàng và sẽ vận chuyển đến bạn sớm nhất
                </div>
                <div class="card-body">
                    <a href="{{ url('/') }}" class="btn btn-info text-dark"> <i class="fa fa-arrow-left"></i>Tiếp tục mua sắm</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection