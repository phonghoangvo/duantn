@extends('layout')
@section('noidung')
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="text-center">Chỉnh sửa thông tin cá nhân</h2>
                <form action="{{ route('profile.update') }}" method="post" style="padding: 32px;; border:solid 2px 
                    box-shadow: -1px 0px 10px 12px rgba(204,187,187,0.41);
                    -webkit-box-shadow: -1px 0px 10px 12px rgba(204,187,187,0.41);
                    -moz-box-shadow: -1px 0px 10px 12px rgba(204,187,187,0.41); margin:32px; border-radius : 10px">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Họ & Tên:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <label for="address">Địa chỉ:</label>
                        <input type="text" class="form-control" id="address" name="address"value="{{ $user->address }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số Điện Thoại:</label>
                        <input type="number" class="form-control" id="phone" name="phone"value="{{ $user->phone }}">
                    </div>
                    {{-- <div class="form-group">
                        <label for="role">Role:</label>
                        <input type="text" class="form-control" id="role" name="role"value="{{ $user->role }}">
                    </div> --}}
                    <div class="form-group pt-3 pb-3">
                        <button type="submit" class="btn btn-primary float-end">Sửa</button>
                    </div>
                    {{-- @include('partials.formerrors') --}}
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection