@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<div class="container-fluid" style="background: white">
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form action="{{url('updatecate/'.$cate->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="formbold-input-flex">
                    <div>
                        <input type="hidden" name="id" value="{{$cate->id}}">
                        <input type="text" style="width:550px" name="name" id="name" placeholder="Nhập Tên Danh Mục"
                            class="formbold-form-input" value="{{$cate->name}}" />
                        <label for="name" class="formbold-form-label"> Tên Danh Mục </label>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <input type="name" name="slug" id="slug" placeholder="Nhập Slug"
                            class="formbold-form-input" value="{{$cate->slug}}" />
                        <label for="slug" class="formbold-form-label"> Slug </label>
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <input type="text" style="width:550px" name="thutu" id="thutu"
                            placeholder="Nhập thứ tự"  value="{{$cate->thutu}}" class="formbold-form-input" />
                        <label for="thutu" class="formbold-form-label"> Thứ tự </label>
                    </div>
                </div>
                @error('thutu')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                <div class="button">
                    <input type="submit" value="Cập Nhật" class="formbold-btn">
                    <button class="formbold-btn">
                        <a style="text-decoration: none;color:white" href="{{url('/admin/listcate')}}">Danh sách sản phẩm </a>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection