
@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')

<style>
    .limited-text {
        max-width: 200px; /* Điều chỉnh giới hạn chiều rộng tối đa theo nhu cầu */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>



<div class="container-fluid">
    <h2>Danh sách tin</h2>
  <div class="row mt-3">
      <div class="col-12">
          <a href="{{ url('admin/themtin') }}" class="btn btn-primary">Thêm</a>
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
                              <th scope="col" class="col-lg-1">STT</th>
                              <th scope="col" class="col-lg-1">Tiêu Đề</th>
                              <th scope="col" class="col-lg-1">Ảnh</th>
                              <th scope="col" class="col-lg-2 limited-text">Nội dung</th>
                              <th scope="col" class="col-lg-2 limited-text">Tóm tắt</th>
                              <th scope="col" class="col-lg-1">Thời gian đăng</th>
                              <th scope="col" class="col-lg-1">Thời gian cập nhật</th>
                              <th scope="col" class="col-lg-1">Trạng thái</th>
                              <th scope="col" class="col-lg-1">Chức năng</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($listtintuc as $loadtin)
                              <tr>
                                <th scope="row">{{ $loadtin->id }}</th>
                                <td>{{ $loadtin->title }}</td>
                                <td><img src="{{ $loadtin->img }}" alt="" style= " max-width: 100px; max-height: 50px;"></td>
                                <td data-original-text="{{ $loadtin->content }}" class="limited-text">{{ $loadtin->content }}</td>
                                <td data-original-text="{{ $loadtin->summary }}" class="limited-text">{{ $loadtin->summary }}</td>
                                

                                @if($loadtin->created_at)
                                    <td>{{ $loadtin->created_at->format('d/m/Y') }}</td>
                                @else
                                    <td>Ngày tạo không xác định</td>
                                @endif
                                

                                @if($loadtin->updated_at)
                                    <td>{{ $loadtin->updated_at->format('d/m/Y') }}</td>
                                @else
                                    <td>Ngày tạo không xác định</td>
                                @endif
                                
                                <td>
                                @if ($loadtin->hidden == 0)
                                    Ẩn
                                @elseif ($loadtin->hidden == 1)
                                    Hiện
                                @else
                                    Không xác định
                                @endif
                                </td>
                                
                                  <td>
                                      <a href="{{ url("xoa/{$loadtin->id}") }}" class="btn btn-danger w-100 mb-2" onclick="return confirm('Bạn có thật sự muốn xóa không?')">Xóa</a>

                                      <a href="{{ route('suatin', ['id' => $loadtin->id]) }}" class="btn btn-info w-100">Sửa</a>
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