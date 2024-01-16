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
            
                                            <div class="form-outline mb-4">
                                                <label for="name" class="formbold-form-label"> Nhà cung cấp</label>
                                                <input type="text" name="nhacungcap" id="nhacungcap" value="{{old('nhacungcap')}}"
                                                    placeholder="Nhập Nhà Cung Cấp" class="form-control" />
                                            </div>
                                            @error('nhacungcap')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <div class="form-outline mb-4">
                                                <label for="name" class="formbold-form-label"> Nhà xuất bản </label>
                                                <input type="text" name="nhaxuatban" id="nhaxuatban" value="{{old('nhaxuatban')}}"
                                                    placeholder="Nhập nhà xuất bản" class="form-control" />
                                            </div>
                                            @error('nhaxuatban')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
            
                                            <div class="form-outline mb-4">
                                                <label for="name" class="formbold-form-label"> Tác giả</label>
                                                <input type="text" name="tacgia" id="tacgia" value="{{old('tacgia')}}"
                                                    placeholder="Nhập Tên tác giả" class="form-control" />
                                            </div>
                                            @error('tacgia')
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
            
                                            <div class="formbold-form-label">
                                                <label>Danh mục:</label><br>
                                                <select name="idCategory" value="{{old('idCategory')}}" required
                                                    class="form-control">
                                                    <option value="1">--Danh Muc--</option>
                                                    @foreach ($category as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('idCategory')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div><br>
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
