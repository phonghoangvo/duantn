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

                            <div class="form-outline mb-4">
                                <label for="phone" class="formbold-form-label"> Giảm giá </label>
                                <input type="number" name="priceSale" id="priceSale"
                                    placeholder="Nhập Giảm giá (nếu có)" class="form-control"
                                    value="{{$product->priceSale}}" />
                            </div>

                            <div class="form-outline mb-4">
                                <label for="name" class="formbold-form-label"> Nhà cung cấp</label>
                                <input type="text" name="nhacungcap" value="{{$product->nhacungcap}}" id="nhacungcap"
                                    placeholder="Nhập Nhà Cung Cấp" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label for="name" class="formbold-form-label"> Nhà xuất bản </label>
                                <input type="text" name="nhaxuatban" id="nhaxuatban" value="{{$product->nhaxuatban}}"
                                    placeholder="Nhập nhà xuất bản" class="form-control" />
                            </div>

                            <div class="form-outline mb-4">
                                <label for="name" class="formbold-form-label"> Tác giả</label>
                                <input type="text" name="tacgia" id="tacgia" value="{{$product->tacgia}}"
                                    placeholder="Nhập Tên tác giả" class="form-control" />
                            </div>
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
                            <div class="formbold-form-label">
                                <label>Danh mục:</label><br>
                                <select name="idCategory" required class="form-control">
                                    <option value="1">--Danh Mục--</option>
                                    @foreach ($category as $category)
                                    <option @if($category->idCategory == $product->idCategory) selected @endif value="{{$category->id}}">
                                        {{$category->name}}
                                    </option>
                                    {{-- <option value="{{$category->id}}">{{$category->name}}</option> --}}
                                    @endforeach
                                </select>
                            </div><br>
                            <label for="upload" class="formbold-input-label">
                                Thêm Ảnh Sản Phẩm

                                <input type="file" name="img" value="{{$product->img}}" class="form-control"
                                    id="customFile" />
                            </label>
                            @if($product->img)
                            <img src="/uploads/{{$product->img}}">
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
