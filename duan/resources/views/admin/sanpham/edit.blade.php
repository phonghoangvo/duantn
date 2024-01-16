@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<div class="mask d-flex align-items-center h-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        <form action="{{url('update/'.$product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <label for="name" class="formbold-form-label"> Tên Sản Phẩm </label>
                                        <input type="text" name="name" id="name" placeholder="Nhập Tên Sản Phẩm"
                                            class="form-control" value="{{$product->name}}" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label for="price" class="formbold-form-label"> Giá Sản Phẩm </label>
                                        <input type="number" name="price" id="price" placeholder="Nhập Giá Sản Phẩm"
                                            class="form-control" value="{{$product->price}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label for="luotxem" class="formbold-form-label"> Lượt xem </label>
                                        <input type="number" name="luotxem" id="luotxem" placeholder="Nhập lượt xem"
                                            class="form-control" value="{{$product->luotxem}}" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label for="name" class="formbold-form-label"> Năm sản xuất </label>
                                        <input type="text" name="namsanxuat" id="namsanxuat" placeholder="Nhập Năm Sản Phẩm"
                                            class="form-control" value="{{$product->namsanxuat}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label for="yeuthich" class="formbold-form-label"> Yêu thích </label>
                                        <input type="number" name="yeuthich" id="yeuthich" placeholder="Nhập Yêu thích Sản Phẩm"
                                            class="form-control" value="{{$product->yeuthich}}" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label for="quantity" class="formbold-form-label"> Số lượng </label>
                                        <input type="number" name="quantity" id="quantity" placeholder="Nhập số lượng Sản Phẩm"
                                            class="form-control" value="{{$product->quantity}}" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="phone" class="formbold-form-label"> Giảm giá </label>
                                <input type="number" name="priceSale" id="priceSale"
                                    placeholder="Nhập Giảm giá (nếu có)" class="form-control"
                                    value="{{$product->priceSale}}" />
                            </div>
                            <div class="form-outline mb-4"><div class="formbold-form-label">
                                <label> Voucher:</label><br>
                                <select name="idVoucher" value="{{old('idVoucher')}}" required
                                    class="form-control">
                                    <option value="1">-- Voucher --</option>
                                    @foreach ($voucher as $voucher)
                                    <option @if($voucher->idVoucher == $product->idVoucher) selected @endif value="{{$voucher->id}}">
                                        {{$voucher->magiamgia}}
                                    </option>
                                        @endforeach
                                </select>
                            </div><br>
                            <div class="form-outline mb-4"><div class="formbold-form-label">
                                <label> Tác giả:</label><br>
                                <select name="idTacgia" value="{{old('idTacgia')}}" required
                                    class="form-control">
                                    <option value="1">-- Tác giả --</option>
                                    @foreach ($tacgia as $tacgia)
                                    <option @if($tacgia->idTacgia == $product->idTacgia) selected @endif value="{{$tacgia->id}}">
                                        {{$tacgia->name}}
                                    </option>
                                        @endforeach
                                </select>
                            </div><br>
                            <div class="form-outline mb-4"><div class="formbold-form-label">
                                <label> Nhà xuất bản:</label><br>
                                <select name="idNhaxuatban" value="{{old('idNhaxuatban')}}" required
                                    class="form-control">
                                    <option value="1">-- Nhà xuất bản --</option>
                                    @foreach ($nhaxuatban as $nhaxuatban)
                                    <option @if($nhaxuatban->idNhaxuatban == $product->idNhaxuatban) selected @endif value="{{$nhaxuatban->id}}">
                                        {{$nhaxuatban->name}}
                                    </option>
                                        @endforeach
                                </select>
                            </div><br>
                            <div class="form-outline mb-4">
                                <label for="name" class="formbold-form-label"> Ngày đăng </label>
                                <input type="date" name="ngayDang" id="ngayDang" value="{{$product->ngayDang}}"
                                    placeholder="Nhập ngày đăng" class="form-control" />
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <label for="message" class="formbold-form-label"> Mô tả sản phẩm </label>
                                <textarea rows="6" name="moTa" id="moTa" placeholder="Viết mô tả sản phẩm"
                                    class="form-control">
                                {{$product->moTa}}
                            </textarea>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="message" class="formbold-form-label">Tóm tắt sản phẩm </label>
                                <textarea rows="6" name="tomTat" id="tomTat" placeholder="Viết tóm tắt sản phẩm"
                                    class="form-control">
                                {{$product->tomTat}}
                            </textarea>
                            </div>
                            <label for="upload" class="formbold-input-label">
                                Thêm Ảnh Sản Phẩm

                                <input type="file" name="img" value="{{$product->img}}" class="form-control"
                                    id="customFile" />
                            </label>
                            @if($product->img)
                            <img style="width:200px;height:200px" src="{{$product->img}}">
                            @endif
                            <div class="button">
                            <input type="submit" value="Cập Nhật" class="formbold-btn">
                            <button class="formbold-btn">
                                <a style="text-decoration: none;color:white" href="{{url('admin/list')}}">Danh sách sản phẩm </a>
                            </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
