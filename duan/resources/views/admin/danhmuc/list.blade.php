@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<style>
  .limited-text {
    max-width: 200px;
    /* Điều chỉnh giới hạn chiều rộng tối đa theo nhu cầu */
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
</style>
<div class="container-fluid">
  <h2 class="mt-4 mb-4">Danh sách Danh Mục - Admin</h2>
  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
  </div>
  @endif
  <div class="row mt-3">
    <div class="col-12">
      <a href="{{url('admin/addcate')}}" class="btn btn-success mb-4">Thêm danh mục</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12">
      <div class="card">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped mb-0 text-center">
              <thead>
                <tr>
                  <th scope="col" class="col-lg-1">ID</th>
                  <th scope="col" class="col-lg-1">Tên danh mục</th>
                    <th scope=" col" class="col-lg-1">Ẩn - Hiện</th>
                  <th scope="col" class="col-lg-1">Thứ tự</th>
                  <th scope="col" class="col-lg-1">Slug</th>
                  <th scope="col" class="col-lg-1">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cate as $cate)
                <tr>
                  <td class="limited-text">{{$cate->id}}</td>
                  <td class="limited-text">{{$cate->name}}</td>
                  <td class="limited-text">{{$cate->hidden}}</td>
                  <td class="limited-text">{{$cate->thutu}}</td>
                  <td class="limited-text">{{$cate->slug}}</td>
                  <td>
                    <a href="{{url('/admin/editcate/'.$cate->id)}}" title="Sua"><button type="button"
<<<<<<< HEAD
                        class="btn btn-info w-100">Sửa</button></a>
                    <a href="{{url('delcate/'.$cate->id)}}" onclick="return confirm('Bạn muốn xóa danh mục?')"
=======
                        class="btn btn-info w-100 mb-2">Sửa</button></a>
                    <a href="{{url('del/'.$cate->id)}}" onclick="return confirm('Bạn muốn xóa danh mục?')"
>>>>>>> 4ac3c7475b56d5b6cc8c4cab7672df03ad6c9478
                      title="Xoa"><button type="button" class="btn btn-danger w-100 mb-2">Xóa</button></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
