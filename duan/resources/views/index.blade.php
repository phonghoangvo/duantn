@extends('layout')

@section('tieudetrang')
    Trang chủ
@endsection
@section('noidung')
    @include('header')
 <!-- Product Hot Start -->
 <section>
    <div class="container bg-success-subtle px-4 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">SẢN PHẨM DÀNH CHO BẠN</h3>
        <div class="row  pt-2 pb-2">
            @foreach ($danhchoban as $danhchoban)       
            
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$danhchoban->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$danhchoban->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$danhchoban->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$danhchoban->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($danhchoban->priceSale)}}.000₫</b></span><br>
                                    <span><del>{{number_format($danhchoban->price)}}.000 ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $danhchoban->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

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

<div class="container pt-2 pb-2 px-0">
    <a href="#">
        <img class="w-100" src="img/sach-banner.jpg" alt="" height="400px">
    </a>
</div>
<section class="pt-2 pb-2">
    <div class="container bg-success-subtle px-4 pt-2 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">SẢN PHẨM NỔI BẬT</h3>
        <div class="row  pt-2 pb-2">
            @foreach ($hot as $hot)       
            
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$hot->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$hot->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$hot->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$hot->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($hot->priceSale)}}.000₫</b></span><br>
                                    <span><del>{{number_format($hot->price)}}.000 ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $hot->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
 <div class="container pt-2 pb-2 px-0">
    <a href="#">
        <img class="w-100" src="img/banner2.jpg" alt="" height="400px">
    </a>
</div>
<section class="pt-2 pb-2">
    <div class="container bg-success-subtle px-4 pt-2 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">SẢN PHẨM ĐƯỢC YÊU THÍCH</h3>
        <div class="row  pt-2 pb-2">
            @foreach ($yeuthich as $yeuthich)       
            
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$yeuthich->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$yeuthich->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$yeuthich->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$yeuthich->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($yeuthich->priceSale)}}.000₫</b></span><br>
                                    <span><del>{{number_format($yeuthich->price)}}.000 ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $yeuthich->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
 <div class="container pt-2 pb-2 px-0">
    <a href="#">
        <img class="w-100" src="img/banner2.jpg" alt="" height="400px">
    </a>
</div>
 <section>
    <div class="container bg-success-subtle px-4 pb-2" style="border-radius: 5px;">
        <h3 class="text-center pt-2">SẢN PHẨM ĐANG GIẢM GIÁ</h3>
        <div class="row  pt-2 pb-2">
            @foreach ($giamgia as $giamgia)       
            
            <div class="col-xl-2 col-sm-4 p-1 px-1">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$giamgia->img}}" alt="" width="100%" height="250px">
                    <div class="middle">
                        <a href="{{url('/chitiet',$giamgia->id)}}" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/chitiet',$giamgia->id)}}" class="text-decoration-none " style="font-size: 13px; color: gray;">{{$giamgia->name}}</a>
                        <div class="row d-flex">
                            <div class="col-sm-10">
                                <p>
                                    <span style="color: red;"><b>{{number_format($giamgia->priceSale)}} ₫</b></span><br>
                                    <span><del>{{number_format($giamgia->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{ route('add_to_cart', $giamgia->id) }}" class=" btn btn float-end px-2" style="background-color:#f27024;padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
                       
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
