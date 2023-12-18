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
                    <h2 class="mt-4 mb-4">Danh sách bình luận - Admin</h2>
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
                                <th scope="col" class="col-lg-1">ID</th>
                                <th scope="col" class="col-lg-1">ID user</th>
                                <th scope="col" class="col-lg-1">ID Product</th>
                                <th scope="col" class="col-lg-1">Content</th>
                                <th scope="col" class="col-lg-1">Time</th>
                                <th scope="col" class="col-lg-1">Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comment as $comment)
                            <tr>
                                <td class="limited-text">{{$comment->id}}</td>
                                <td class="limited-text">{{$comment->id_user}}</td>
                                <td class="limited-text">{{$comment->id_product}}</td>
                                <td class="limited-text">{{$comment->content}}</td>
                                <td class="limited-text">{{$comment->time}}</td>
                                <td>
                                   <center> <a href="{{url('del/'.$comment->id)}}"
                                        onclick="return confirm('Bạn muốn xóa bình luận ?')" title="Xoa"><button
                                            type="button" class="btn btn-danger w-100 mb-2">Xóa</button></a></center>
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
