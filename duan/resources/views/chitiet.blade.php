@extends('layout')
@section('tieudetrang')
Chi tiết sản phẩm
@endsection
@section('noidung')

<!-- Navbar end -->
<!-- Main Start -->
<main>
  @foreach($products as $value)
  <div class="container px-0 pt-3 pb-3">
    <a class="text-decoration-none text-dark" href="">
      Trang chủ
    </a>
    <small>/ Chi tiết</small>
    <small>/ {{$value->name}}</small>

  </div>

  <div class="container pt-5 pb-5 px-0">
    <div class="row">
      <div class="col-sm-5">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{URL::to($value->img)}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{URL::to($value->img)}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{URL::to($value->img)}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span aria-hidden="true">
              <i class="bi bi-caret-left-fill text-dark"></i>
            </span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next text-dark" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span aria-hidden="true">
              <i class="bi bi-caret-right-fill text-dark"></i>
            </span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-sm-7 p-4">
        <div class="pb-1">
          <h4 class="pb-1">{{$value->name}}</h4>
          <small>Thương hiệu: <b>{{$value->nhaxuatban}}</b></small><br>
          <small>Mã sản phẩm: <a href="#">{{$value->id}}</a></small>
        </div>
        <div class="pt-3 pb-3" style="font-size: 25px;"><b class="text-danger">{{number_format($value->price)}} đ</b>
        </div>
        <div id="amount" class="d-flex align-items-center pt-3 pb-3">
          <span>Số lượng:</span>
          <div class="input-group mx-3" style="width: 130px;">
            <button id="minus" onclick="minus(event, this)" class="btn btn-primary">
              <i class="bi bi-dash"></i>
            </button>
            <input id="num" type="text" class="form-control text-center" value="1">
            <button id="plus" onclick="plus(event, this)" class="btn btn-primary">
              <i class="bi bi-plus"></i>
            </button>
          </div>
        </div>
        <div class="pt-3 pb-1">
          <p><button class="btn btn-primary p-2 w-100">Mua ngay</button></p>
          <p><button class="btn btn-danger p-2 w-100">Thêm vào giỏ hàng</button></p>
        </div>
        <div class="text-center">
          <i class="bi bi-facebook p-1"></i>
          <i class="bi bi-messenger p-1"></i>
          <i class="bi bi-instagram p-1"></i>
          <i class="bi bi-whatsapp p-1"></i>
          <i class="bi bi-twitter p-1"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="container px-0">
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
          role="tab" aria-controls="home-tab-pane" aria-selected="true">Mô tả</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
          role="tab" aria-controls="profile-tab-pane" aria-selected="false">Bình
          luận</button>
      </li>

    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <div class="bg-light pt-3 p-3">
          <h5 class="text-center">Thông tin sản phẩm</h5>
          <table style="width:100%">
            <tr>
              <th>Tên sách:</th>
              <td>{{$value->name}}</td>
            </tr>
            <tr>
              <th>Tác giả:</th>
              <td>{{$value->tacgia}}</td>
            </tr>
            <tr>
              <th>Nhà xuất bản:</th>
              <td> {{$value->nhaxuatban}}</td>
            </tr>
            <tr>
              <th>Nhà phát hành:</th>
              <td>{{$value->idCategory}}</td>
            </tr>
            <tr>
              <th>Năm xuất bản:</th>
              <td>2021</td>
            </tr>
            <tr>
              <th>Số trang:</th>
              <td>112 trang</td>
            </tr>
            <tr>
              <th>Kích thước:</th>
              <td>19x 27 cm</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <div class="bg-light pt-3 p-3">
          <div class="row">
            <div class="col-lg-6">
              <h5>Tất cả bình luận</h5>
              @foreach ($comment as $com)
              <div class="d-flex">
                <img src="/img/user.png" class="img-fluid rounded-start" alt="" style="width: 40px;height: 40px;">
                <div class="card-body p-1 mx-3">
                  <div class="d-flex">
                    <b class="card-title">{{$com->users->name}}</b> -
                    <small> {{$com->created_at->format('d/m/Y')}}</small>
                  </div>
                </div>
              </div>
              <small class="p-1">{{$com->content}}</small>
              @endforeach
            </div>
            <div class="col-lg-6">
              @if(Session::has('error'))
                <div class="alert alert-danger">
                  {{Session::get('error')}}
                </div>
              @endif
              @if(Session::has('success'))
                <div class="alert alert-success">
                   {{Session::get('success')}}
                </div>
              @endif
              @if (auth()->check())
              <form method="POST" action="{{route('comment',$value->id)}}">
                @csrf
                <div class="mb-3">
                  <label for="content" class="form-label">Bình luận của bạn:</label>
                  <textarea class="form-control" name="content" id="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary"> Gửi bình luận</button>
              </form>
              @else
              <div class="alert alert-danger" role="alert">
                <strong>Đăng nhập để bình luận</strong> Nhấn vào đây <a href="{{url('/login')}}"> Đăng nhập</a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <section class="pt-2 pb-2">
      <div class="container bg-light px-4 pt-2 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">Sản phẩm tương tự</h3>
        <div class="row pt-2 pb-2">
          <div class="col-xl-2 col-sm-4 p-1 px-1">
            <div class="card border-1">
              <img class="card-img-top" width="200px" height="200px" src="{{$hot[0]->img}}" alt="{{$hot[0]->img}}">
              <div class="middle">
                <a href="#" class="btn btn-light zoom border-0">
                  <i class=" bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body">
                <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[0]->name}}</a>
                <div class="row d-flex">
                  <div class="col-sm-10">
                    <p>
                      <span style="color: red;"><b>{{number_format($hot[0]->price)}}</b></span><br>
                      <span><del>{{number_format($hot[0]->priceSale)}}</del></span>
                    </p>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-primary float-end px-2"
                      style="padding: 5px 10px;border-radius: 50%;">
                      <i class="bi bi-bag-plus-fill"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-sm-4 p-1 px-1">
            <div class="card border-1">
              <img class="card-img-top" width="200px" height="200px" src="/uploads/{{$hot[1]->img}}"
                alt="{{$hot[1]->img}}">
              <div class="middle">
                <a href="#" class="btn btn-light zoom border-0">
                  <i class=" bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body">
                <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[1]->name}}</a>
                <div class="row d-flex">
                  <div class="col-sm-10">
                    <p>
                      <span style="color: red;"><b>{{number_format($hot[1]->price)}}</b></span><br>
                      <span><del>{{number_format($hot[1]->priceSale)}}</del></span>
                    </p>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-primary float-end px-2"
                      style="padding: 5px 10px;border-radius: 50%;">
                      <i class="bi bi-bag-plus-fill"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-sm-4 p-1 px-1">
            <div class="card border-1">
              <img class="card-img-top" width="200px" height="200px" src="/uploads/{{$hot[2]->img}}"
                alt="{{$hot[2]->img}}">
              <div class="middle">
                <a href="#" class="btn btn-light zoom border-0">
                  <i class=" bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body">
                <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[2]->name}}</a>
                <div class="row d-flex">
                  <div class="col-sm-10">
                    <p>
                      <span style="color: red;"><b>{{number_format($hot[2]->price)}}</b></span><br>
                      <span><del>{{number_format($hot[2]->priceSale)}}</del></span>
                    </p>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-primary float-end px-2"
                      style="padding: 5px 10px;border-radius: 50%;">
                      <i class="bi bi-bag-plus-fill"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-sm-4 p-1 px-1">
            <div class="card border-1">
              <img class="card-img-top" width="200px" height="200px" src="/uploads/{{$hot[3]->img}}"
                alt="{{$hot[3]->img}}">
              <div class="middle">
                <a href="#" class="btn btn-light zoom border-0">
                  <i class=" bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body">
                <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[3]->name}}</a>
                <div class="row d-flex">
                  <div class="col-sm-10">
                    <p>
                      <span style="color: red;"><b>{{number_format($hot[3]->price)}}</b></span><br>
                      <span><del>{{number_format($hot[3]->priceSale)}}</del></span>
                    </p>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-primary float-end px-2"
                      style="padding: 5px 10px;border-radius: 50%;">
                      <i class="bi bi-bag-plus-fill"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-sm-4 p-1 px-1">
            <div class="card border-1">
              <img class="card-img-top" width="200px" height="200px" src="/uploads/{{$hot[4]->img}}"
                alt="{{$hot[4]->img}}">
              <div class="middle">
                <a href="#" class="btn btn-light zoom border-0">
                  <i class=" bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body">
                <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[4]->name}}</a>
                <div class="row d-flex">
                  <div class="col-sm-10">
                    <p>
                      <span style="color: red;"><b>{{number_format($hot[4]->price)}}</b></span><br>
                      <span><del>{{number_format($hot[4]->priceSale)}}</del></span>
                    </p>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-primary float-end px-2"
                      style="padding: 5px 10px;border-radius: 50%;">
                      <i class="bi bi-bag-plus-fill"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-sm-4 p-1 px-1">
            <div class="card border-1">
              <img class="card-img-top" width="200px" height="200px" src="/uploads/{{$hot[5]->img}}"
                alt="{{$hot[5]->img}}">
              <div class="middle">
                <a href="#" class="btn btn-light zoom border-0">
                  <i class=" bi bi-zoom-in"></i>
                </a>
              </div>
              <div class="card-body">
                <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[5]->name}}</a>
                <div class="row d-flex">
                  <div class="col-sm-10">
                    <p>
                      <span style="color: red;"><b>{{number_format($hot[5]->price)}}</b></span><br>
                      <span><del>{{number_format($hot[5]->priceSale)}}</del></span>
                    </p>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-primary float-end px-2"
                      style="padding: 5px 10px;border-radius: 50%;">
                      <i class="bi bi-bag-plus-fill"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <a class="" href="{{ route('cuahang') }}">
            <button class="btn btn-primary border-0" style="border-radius: 40px;">
              Xem tất cả
              <i class="bi bi-chevron-right"></i>
            </button>
          </a>
        </div>
      </div>
    </section>
</main>
@endsection
