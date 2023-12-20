@extends('admin.layoutadmin')
@section('noidung')
<div class="container-fluid">

    <!-- Page Heading -->
    <h2>Danh sách người dùng</h2>


    {{-- {{-- <!-- DataTales Example --> --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @if (session('status'))
            <a href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">{{ session('status') }} {{ session('tieuDe') }}</span>
            </a>
            @else

            <a href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">thông báo thành công</span>

            </a>
            <a href="#" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">thông báo không thành công</span>

            </a>
             @endif






        </div>
        <div >
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ten</th>
                            {{-- <th>img</th> --}}
                            <th>email</th>
                            {{-- <th>password</th> --}}
                            <th>Địa Chỉ</th>
                            <th>SĐT</th>
                            {{-- <th>Trạng Thái</th>                          --}}
                            {{-- <th>Vai tro</th>  --}}
                            <th>Hành động</th>
                        </tr>
                        
                        
                    </thead>
          
                   
                    <tbody>
                    
                        @foreach ($listuser as $user)
                        <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$user->name}}</td>
                        {{-- <td> {{$user ->img}}</td> --}}
                        <td>{{$user->email}}</td>
                        {{-- <td>{{$user->password}}</td> --}}
                        <td>{{$user->address}}</td>     
                        <td>{{$user->phone}}</td>
                        {{-- <td>{{$user->status}}</td>
                        <td>{{$user->role}}</td> --}}
                        <td>
                            <p><a href="/user/delete/{{$user->id}}"onclick="return confirm('Bạn có chắc muốn bỏ vào thùng rác?')" class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash" ></i>
                                </span>
                                <span class="text" style="width:120px">Thùng Rác</span>
                               
                            </a>
                        </p>
                                <p><a href="/user/update/{{$user->id}}" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit" style="font-size: 14px"></i>
                                    </span>
                                    <span class="text" style="width:120px" >Cập nhật</span>
                                    {{-- <span class="text" style="width:120px"><a href="/user/delete/{{$user->id}}"></a>Delete</span> --}}
                                </a></p>
                            {{-- <a href="/user/update/{{ $user->id }}">Update</a> <br>
                            <a href="/user/delete/{{ $user->id }}">Delete</a> --}}
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
    
@endsection