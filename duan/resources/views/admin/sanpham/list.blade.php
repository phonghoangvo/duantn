@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<style>
  .limited-text {
    max-width: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
</style>
<div class="container-fluid">
  <h2 class="mt-4 mb-4">Danh sách Sản Phẩm</h2>
  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
  </div>
  @endif
  <div class="row mt-3">
    <div class="col-12">
      <a href="{{url('admin/add')}}" class="btn btn-success mb-4">Thêm sản phẩm</a>
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
                  <th scope="col" class="col-lg-1">Tên sản phẩm</th>
                  <th scope="col" class="col-lg-1">Hình ảnh</th>
                  <th scope="col" class="col-lg-1">Giá sản phẩm</th>
                  <th scope="col" class="col-lg-1">Giảm giá</th>
                  <th scope="col" class="col-lg-1">Nhà cung cấp</th>
                  <th scope="col" class="col-lg-1">Nhà xuất bản</th>
                  <th scope="col" class="col-lg-1">Tác giả</th>
                  <th scope="col" class="col-lg-1">Ngày đăng</th>
                  <th scope="col" class="col-lg-1">Tóm tắt</th>
                  <th scope="col" class="col-lg-1">Danh mục</th>
                  <th scope="col" class="col-lg-1">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $data)
                <tr>
                  <td class="limited-text">{{$data->id}}</td>
                  <td class="limited-text">{{$data->name}}</td>
                  <td class="limited-text"><img src="{{$data->img}}" style="height:60px;width:50px"></td>
                  <td class="limited-text">{{$data->price}}</td>
                  <td class="limited-text">{{$data->priceSale}}</td>
                  <td class="limited-text">{{$data->nhacungcap}}</td>
                  <td class="limited-text">{{$data->nhaxuatban}}</td>
                  <td class="limited-text">{{$data->tacgia}}</td>
                  <td class="limited-text">{{$data->ngayDang}}</td>
                  <td class="limited-text">{{$data->moTa}}</td>
                  <td class="limited-text">{{$data->idCategory}}</td>
                  <td>
                    <a href="{{url('admin/edit/'.$data->id)}}" title="Sua"><button type="button"
                        class="btn btn-info w-100 pt-2">Sửa</button></a>
                    <a href="{{url('del/'.$data->id)}}" onclick="return confirm('Ban muon xoa san pham?')"
                      title="Xoa"><button type="button" class="btn btn-danger w-100 mb-2">Xóa</button></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {{ $page->links()}}
      </div>
    </div>
  </div>
</div>
@endsection
