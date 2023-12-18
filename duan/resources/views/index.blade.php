@extends('layout')

@section('tieudetrang')
    Trang chủ
@endsection
@section('noidung')
    @include('header')
 <!-- Product Hot Start -->
 <section>
    <div class="container bg-success-subtle px-4 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">SALE</h3>
        <div class="row  pt-2 pb-2">
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$giamgia[0]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$giamgia[0]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[0]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[0]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($giamgia[0]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$giamgia[1]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[1]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[1]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($giamgia[1]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$giamgia[2]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[2]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[2]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($giamgia[2]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$giamgia[3]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[3]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[3]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($giamgia[3]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$giamgia[4]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[4]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[4]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($giamgia[4]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$giamgia[5]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[5]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[5]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($giamgia[5]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
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
<!-- Product Hot End -->
<!-- Product Sách Start -->
<div class="container pt-2 pb-2 px-0">
    <a href="#">
        <img class="w-100" src="img/sach-banner.jpg" alt="">
    </a>
</div>
<section class="pt-2 pb-2">
    <div class="container bg-success-subtle px-4 pt-2 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">BOOK</h3>
        <div class="row  pt-2 pb-2">
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[0]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[0]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[0]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[0]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[1]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[1]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[1]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[1]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[2]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[2]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[2]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[2]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[3]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[3]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[3]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[3]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[4]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[4]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[4]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[4]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[5]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[5]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[5]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[5]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
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
<!-- Product Sách End -->
<!-- Product Văn phòng phẩm Start -->
<div class="container pt-2 pb-2 px-0">
    <a href="">
        <img class="w-100" src="img/van-phong-pham.jpg" alt="">
    </a>
</div>
<section class="pt-2 pb-2">
    <div class="container bg-success-subtle px-4 pt-2 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">VĂN PHÒNG PHẨM</h3>
        <div class="row  pt-2 pb-2">
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$vanphongpham[0]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$vanphongpham[0]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($vanphongpham[0]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($vanphongpham[0]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$vanphongpham[1]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$vanphongpham[1]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($vanphongpham[1]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($vanphongpham[1]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$vanphongpham[2]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$vanphongpham[2]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($vanphongpham[2]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($vanphongpham[2]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$vanphongpham[3]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$vanphongpham[3]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($vanphongpham[3]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($vanphongpham[3]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$vanphongpham[4]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$vanphongpham[4]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($vanphongpham[4]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($vanphongpham[4]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$vanphongpham[5]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$vanphongpham[5]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($vanphongpham[5]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($vanphongpham[5]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="text-center">
            <a class="" href="{{ route('cuahang', ['id' => 28]) }}">
                <button class="btn btn-primary border-0" style="border-radius: 40px;">
                    Xem tất cả
                    <i class="bi bi-chevron-right"></i>
                </button>
            </a>
        </div>
    </div>
</section>
<!-- Product Văn phòng phẩm End -->
<!-- Product Lịch Start -->
<div class="container pt-2 pb-2 px-0">
    <a href="">
        <img class="w-100" src="img/lich_banner.png" alt="">
    </a>
</div>
<section class="pt-2 pb-2">
    <div class="container bg-success-subtle px-4 pt-2 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">LỊCH</h3>
        <div class="row  pt-2 pb-2">
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$lich[0]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$lich[0]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($lich[0]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($lich[0]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$lich[1]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$lich[1]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($lich[1]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($lich[1]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$lich[2]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$lich[2]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($lich[2]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($lich[2]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$lich[3]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$lich[3]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($lich[3]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($lich[3]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$lich[4]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$lich[4]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($lich[4]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($lich[4]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$lich[5]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$lich[5]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($lich[5]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($lich[5]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="" href="{{ route('cuahang', ['id' => 29]) }}">
                <button class="btn btn-primary border-0" style="border-radius: 40px;">
                    Xem tất cả
                    <i class="bi bi-chevron-right"></i>
                </button>
            </a>
        </div>
    </div>
</section>
<!-- Product Lịch End -->
<!-- Product Tập Start -->
<div class="container pt-2 pb-2 px-0">
    <a href="">
        <img class="w-100" src="img/tap-banner.png" alt="">
    </a>
</div>
<section class="pt-2 pb-2">
    <div class="container bg-success-subtle px-4 pt-2 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">TẬP</h3>
        <div class="row pt-2 pb-2">
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$tap[0]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$tap[0]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($tap[0]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($tap[0]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$tap[1]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$tap[1]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($tap[1]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($tap[1]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$tap[2]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$tap[2]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($tap[2]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($tap[2]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$tap[3]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$tap[3]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($tap[3]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($tap[3]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$tap[4]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$tap[4]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($tap[4]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($tap[4]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$tap[5]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$tap[5]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($tap[5]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($tap[5]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary float-end px-2" style="padding: 5px 10px;border-radius: 50%;margin-top:10px;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="" href="{{ route('cuahang', ['id' => 30]) }}">
                <button class="btn btn-primary border-0" style="border-radius: 40px;">
                    Xem tất cả
                    <i class="bi bi-chevron-right"></i>
                </button>
            </a>
        </div>
    </div>
</section>
<!-- Product Tập End -->





<!-- Post start -->
{{-- <section>
    <div class="container p-2">
        <div class="row">
            <div class="col-sm-6 p-2">
                <div class="card">
                    <div class="mx-2">
                        <h2>Post 1</h2>
                    </div>
                    <div class="mb-3 p-2">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/post.jpg" class="img-thumbnail rounded-start border-0" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tiêu đề</h5>
                                    <p class="card-text"><small class="text-body-secondary">Ngày đăng: </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 p-2">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/post.jpg" class="img-thumbnail rounded-start border-0" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tiêu đề</h5>
                                    <p class="card-text"><small class="text-body-secondary">Ngày đăng: </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center px-2 pb-2">
                        <a href="#">
                            <button class="btn btn-secondary border-0 w-100">
                                Xem tất cả
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p-2">
                <div class="card">
                    <div class="mx-2">
                        <h2>Post 2</h2>
                    </div>
                    <div class="mb-3 p-2">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/post.jpg" class="img-thumbnail rounded-start border-0" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tiêu đề</h5>
                                    <p class="card-text"><small class="text-body-secondary">Ngày đăng: </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 p-2">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/post.jpg" class="img-thumbnail rounded-start border-0" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tiêu đề</h5>
                                    <p class="card-text"><small class="text-body-secondary">Ngày đăng: </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center px-2 pb-2">
                        <a href="#">
                            <button class="btn btn-secondary border-0 w-100">
                                Xem tất cả
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Post end -->
@endsection
