@extends('layout')

@section('tieudetrang')
    Trang chủ
@endsection
@section('noidung')
    @include('header')
 <!-- Product Hot Start -->
 <section>
    <div class="container bg-success-subtle px-4 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">SẢN PHẨM ĐANG GIẢM GIÁ</h3>
        <div class="row  pt-2 pb-2">
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="/{{$giamgia[0]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$giamgia[0]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$giamgia[0]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[0]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[0]->priceSale)}}.000₫</b></span><br>
                                    <span><del>{{number_format($giamgia[0]->price)}}.000 ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $giamgia[0]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$giamgia[1]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$giamgia[1]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$giamgia[1]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[1]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[1]->priceSale)}}.000₫</b></span><br>
                                    <span><del>{{number_format($giamgia[1]->price)}}.000 ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $giamgia[1]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$giamgia[2]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$giamgia[2]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$giamgia[2]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[2]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[2]->priceSale)}}.000₫</b></span><br>
                                    <span><del>{{number_format($giamgia[2]->price)}}.000 ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $giamgia[2]->id) }}" class="btn float-end px-2" style="background-color:#f27024; padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$giamgia[3]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$giamgia[3]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$giamgia[3]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[3]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[3]->priceSale)}}.000₫</b></span><br>
                                    <span><del>{{number_format($giamgia[3]->price)}}.000₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $giamgia[3]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$giamgia[4]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$giamgia[4]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$giamgia[4]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[4]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[4]->priceSale)}}.000₫</b></span><br>
                                    <span><del>{{number_format($giamgia[4]->price)}}.000₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $giamgia[4]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$giamgia[5]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$giamgia[5]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$giamgia[5]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia[5]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia[5]->priceSale)}}.000₫</b></span><br>
                                    <span><del>{{number_format($giamgia[5]->price)}}.000₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $giamgia[5]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
       

        <div class="text-center">
            <a class="" href="{{ route('cuahang') }}">
                <button class="btn btn-primary border-0" style="border-radius: 40px;background-color:#f27024; color:white;">
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
        <h3 class="text-center pt-2">SÁCH</h3>
        <div class="row  pt-2 pb-2">
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="/{{$hot[0]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$hot[0]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$hot[0]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[0]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[0]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[0]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $hot[0]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$hot[1]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$hot[1]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$hot[1]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[1]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[1]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[1]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $hot[1]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[2]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$hot[2]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$hot[2]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[2]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[2]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[2]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $hot[2]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[3]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$hot[3]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$hot[3]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[3]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[3]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[3]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $hot[3]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[4]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$hot[4]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$hot[4]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[4]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[4]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[4]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $hot[4]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src=" {{$hot[5]->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$hot[5]->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$hot[5]->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot[5]->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot[5]->priceSale)}}₫</b></span><br>
                                    <span><del>{{number_format($hot[5]->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $hot[5]->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            
            <a class="" href="{{ route('cuahang') }}">
                <button class="btn btn-primary border-0" style="border-radius: 40px;background-color:#f27024; color:white;">
                    Xem tất cả
                    <i class="bi bi-chevron-right"></i>
                </button>
            </a>
        </div>
    </div>
    
</section>




@endsection
