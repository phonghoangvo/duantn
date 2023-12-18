<header>
    <div class="container pt-2 px-0">
        <div class="row">
            <div class="col-lg-3">
                <p class=" gap-1">
                    <a class="btn bg-primary align-items-center justify-content-between shadow-none d-flex text-white w-100" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="border-radius: 0%;">
                        DANH MỤC SẢN PHẨM
                        <i class="bi bi-list"></i>
                    </a>
                </p>
                <div class="collapse pb-3" id="collapseExample">
                    <div class="card card-body">
                        <!-- Default dropend button -->
                        <div class="btn-group drop">
                            <a href="cuahang.html" class="btn align-items-center justify-content-between shadow-none d-flex w-100 border-bottom border-0">Cửa hàng</a>
                        </div>
                        <div class="btn-group drop">
                            <button type="button" class="btn align-items-center justify-content-between shadow-none d-flex w-100 dropdown-toggle border-bottom border-0" data-bs-toggle="dropdown" aria-expanded="false">
                                SÁCH TIẾNG VIỆT
                            </button>
                            <ul class="dropdown-menu">
                                @foreach ($danhmucsach as $dms)
                                <li class="m-2">
                                    <a href="{{ route('cuahang', ['id' => $dms->id]) }}"><small>{{$dms->name}}</small></a>
                                </li>
                                <hr>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group drop">
                            @foreach ($danhmucvpp as $dmvpp)
                            <button type="button"  class="btn align-items-center justify-content-between shadow-none d-flex w-100 border-bottom border-0 ">
                                <a href="{{ route('cuahang', ['id' => $dmvpp->id]) }}"><span>{{$dmvpp->name}}</span></a>
                            @endforeach
                        </div>
                        <div class="btn-group drop">
                            @foreach ($danhmuclich as $dml)
                            <button type="button"  class="btn align-items-center justify-content-between shadow-none d-flex w-100 border-bottom border-0 ">
                                <a href="{{ route('cuahang', ['id' => $dml->id]) }}"><span>{{$dml->name}}</span></a>
                            @endforeach
                        </div>
                        <div class="btn-group drop">
                            @foreach ($danhmuctap as $dmt)
                            <button type="button" class="btn align-items-center justify-content-between shadow-none d-flex w-100 border-bottom border-0 ">
                                <a href="{{ route('cuahang', ['id' => $dmt->id]) }}"><span>{{$dmt->name}}</span></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="bg-sale">
                    <img src="/img/bg-sale.jpg" alt="" class="w-100 p-3">
                </div>
            </div>
            <div class="col-lg-9">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/banner.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container py-5 px-0">
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme">
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-1.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-2.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img//thuonghieu-3.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-4.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-5.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-6.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-7.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-8.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-9.png" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-10.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-11.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-12.jpg" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-13.png" alt="">
                    </div>
                    <div class="vendor-item border bg-white p-4">
                        <img src="img/thuonghieu-14.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>