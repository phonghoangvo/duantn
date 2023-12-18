@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<style>
  .intro {
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
              <form action="{{route('save_cate')}}" id="formadd" method="post" enctype="multipart/form-data">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-12 col-md-6 mb-4">
                    <div class="form-outline">
                      <label for="name" class="formbold-form-label"> Tên Danh Mục </label>
                      <input type="text" name="name" id="name" placeholder="Nhập Tên Sản Phẩm"
                        class="form-control" value="{{old('name')}}" />
                    </div>
                  </div>
                  @error('name')
                  <div class="alert alert-danger">
                    {{ $message }}
                  </div>
                  @enderror
                  <div class="col-12 col-md-6 mb-4">
                    <div class="form-outline">
                      <label for="slug" class="formbold-form-label">Slug</label>
                      <input type="name" name="slug" id="slug" value="{{old('slug')}}" class="form-control" />
                    </div>
                  </div>
                  @error('slug')
                  <div class="alert alert-danger">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                  <label for="thutu" class="formbold-form-label"> Thứ tự </label>
                  <input type="text" style="width:550px" name="thutu" id="thutu" placeholder="Nhập thứ tự"
                    class="form-control" value="{{old('thutu')}}" />
                </div>
                @error('thutu')
                <div class="alert alert-danger">
                  {{ $message }}
                </div>
                @enderror
                <!-- Submit button -->
                <input type="submit" value="Save" class="formbold-btn">
                <button class="formbold-btn">
                  <a style="text-decoration: none;color:white" href="{{url('admin/listcate')}}">Danh sách sản phẩm </a>
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
