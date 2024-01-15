@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
            <style>
                .intro{
                    height: 100%;
                }
            </style>
            <section class="intro">
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
                                        <form action="{{route('save_add')}}" id="formadd" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label for="name" class="formbold-form-label"> Tên Sản Phẩm </label>
                                                        <input type="text" name="name" id="form6Example1"
                                                            placeholder="Nhập Tên Sản Phẩm" class="form-control"
                                                            value="{{old('name')}}" />
                                                    </div>
                                                </div>
                                                @error('name')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <div class="col-12 col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label for="price" class="formbold-form-label"> Giá Sản Phẩm </label>
                                                        <input type="number" name="price" id="form6Example2"
                                                            value="{{old('price')}}" placeholder="Nhập Giá Sản Phẩm"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                @error('price')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label for="name" class="formbold-form-label"> Lượt xem </label>
                                                        <input type="text" name="luotxem" id="form6Example1"
                                                            placeholder="Nhập lượt xem" class="form-control"
                                                            value="{{old('luotxem')}}" />
                                                    </div>
                                                </div>
                                                @error('luotxem')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <div class="col-12 col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label for="namsanxuat" class="formbold-form-label"> Năm sản xuất </label>
                                                        <input type="number" name="namsanxuat" id="form6Example2"
                                                            value="{{old('namsanxuat')}}" placeholder="Nhập năm sản xuất"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                @error('namsanxuat')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label for="yeuthich" class="formbold-form-label"> Yêu thích </label>
                                                        <input type="number" name="yeuthich" id="form6Example2"
                                                            value="{{old('yeuthich')}}" placeholder="Nhập yêu thích Sản Phẩm"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                @error('yeuthich')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <div class="col-12 col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label for="quantity" class="formbold-form-label"> Số lượng </label>
                                                        <input type="number" name="quantity" id="form6Example2"
                                                            value="{{old('quantity')}}" placeholder="Nhập số lượng Sản Phẩm"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                @error('quantity')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-outline mb-4"><div class="formbold-form-label">
                                                <label> Voucher:</label><br>
                                                <select name="idVoucher" value="{{old('idVoucher')}}" required
                                                    class="form-control">
                                                    <option value="1">-- Voucher --</option>
                                                    @foreach ($voucher as $voucher)
                                                    <option value="{{$voucher->id}}">{{$voucher->magiamgia}}</option>
                                                    @endforeach
                                                </select>
                                            </div><br>
                                            @error('idVoucher')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <!-- Text input -->
                                            <div class="form-outline mb-4">
                                                <label for="form6Example3" class="formbold-form-label"> Giảm giá </label>
                                                <input type="number" name="priceSale" id="priceSale" value="{{old('priceSale')}}"
                                                    placeholder="Nhập Giảm giá (nếu có)" class="form-control" />
                                            </div>
                                            @error('priceSale')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <div class="form-outline mb-4"><div class="formbold-form-label">
                                                <label> Tác giả:</label><br>
                                                <select name="idTacgia" value="{{old('idTacgia')}}" required
                                                    class="form-control">
                                                    <option value="1">-- Tác Giả --</option>
                                                    @foreach ($tacgia as $tg)
                                                    <option value="{{$tg->id}}">{{$tg->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div><br>
                                            @error('idTacgia')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
            
                                            <div class="form-outline mb-4"><div class="formbold-form-label">
                                                <label> Nhà xuất bản :</label><br>
                                                <select name="idNhaxuatban" value="{{old('idNhaxuatban')}}" required
                                                    class="form-control">
                                                    <option value="1">-- Nhà xuất bản --</option>
                                                    @foreach ($nhaxuatban as $nxb)
                                                    <option value="{{$nxb->id}}">{{$nxb->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div><br>
                                            @error('idNhaxuatban')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
            
                                            <div class="form-outline mb-4">
                                                <label for="name" class="formbold-form-label"> Ngày đăng </label>
                                                <input type="date" name="ngayDang" id="ngayDang" value="{{old('ngayDang')}}"
                                                    placeholder="Nhập ngày đăng" class="form-control" />
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label for="message" class="formbold-form-label">Mô tả sản phẩm </label>
                                                <textarea rows="6" name="moTa" id="moTa" value="{{old('moTa')}}"
                                                    placeholder="Viết mô tả sản phẩm" class="form-control">
                                            </textarea>
                                            </div>
                                            @error('moTa')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <div class="form-outline mb-4">
                                                <label for="message" class="formbold-form-label">Tóm tắt sản phẩm </label>
                                                <textarea rows="6" name="tomTat" id="tomTat" value="{{old('tomTat')}}"
                                                    placeholder="Viết tóm tắt sản phẩm" class="form-control">
                                            </textarea>
                                            </div>
                                            @error('tomTat')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <label class="formbold-form-label">Hình ảnh sản phẩm</label><br>
                                            <input type="file" name="img" value="{{old('img')}}" id="img"><br>
                                            @error('img')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <!-- Submit button -->
                                            <input type="submit" value="Save" class="formbold-btn">
                                            <button class="formbold-btn">
                                                <a style="text-decoration: none;color:white" href="{{url('admin/list')}}">Danh sách sản phẩm </a>
                                            </button>
                                        </form>
            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           
@endsection
