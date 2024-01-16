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
  <h2 class="mt-4 mb-4">Danh sách Đơn Hàng</h2>
  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
  </div>
  @endif
  <div class="row mt-3">
    <div class="col-12">
      <div class="card">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped mb-0 text-center">
              <thead>
                <tr>
                  <th scope="col" class="col-lg-1">STT</th>
                  <th scope="col" class="col-lg-1">Họ Tên Khách Hàng</th>
                  <th scope="col" class="col-lg-1">Tên Sản Phẩm</th>
                  <th scope="col" class="col-lg-1">Số Lượng</th>
                  <th scope="col" class="col-lg-1">Tổng Tiền</th>
                  <th scope="col" class="col-lg-1">Trạng Thái</th>
                  <th scope="col" class="col-lg-1">Thời Gian Mua Hàng</th>
                  <th scope="col" class="col-lg-1">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Oder_detail as $data)
                <tr>
                  <td class="limited-text">{{$loop->index+1}}</td>
                  <td class="limited-text">{{$data->Order->hoTen}}</td>
                  <td class="limited-text">{{$data->Product->name}}</td>
                  <td class="limited-text">{{$data->quantity}}</td>
                  <td class="limited-text">{{$data->total}}</td>
                  <td class="limited-text">
                      <input type="checkbox" value="Choxacnhan" name="Order" class="form-check-input">
                      <label class="form-check-label">Đang Chờ Xác Nhận</label><br>
                      <input type="checkbox" value="Choxacnhan" name="Order" class="form-check-input">
                      <label class="form-check-label">Đang Chờ Vận Chuyển</label><br>
                      <input type="checkbox" value="Choxacnhan" name="Order" class="form-check-input">
                      <label class="form-check-label">Giao Hàng Thành Công</label>
                  </td>
                  <td class="limited-text">{{$data->created_at}}</td>
                  <td>
                    <input type="submit" value="Save" class="btn btn-success">
                    <a href="{{url('deleteorder/'.$data->id)}}" onclick="return confirm('Bạn muốn xóa đơn hàng ?')"
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
