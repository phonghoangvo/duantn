@extends('layout')
@section('tieudetrang')
    Cửa hàng
@endsection
@section('noidung')



<div class="container px-0 pt-3 pb-3">
    <a class="thanhphantrang text-decoration-none" href="">
        Trang chủ
    </a> /
    <small>Cửa hàng</small>


</div>
<div class="container pt-3 pb-3 px-0">


    <div class="row">
        <section class="col-lg-3 ">
            <div class=" boxloai mb-4 bg-white">
                <h3 class="p-2">Sản phẩm theo loại</h3>
                <div class="danhmuc">
                    <?php
                    $danhmuc = DB::table('category')->select('id','name')
                    ->orderByRaw('CAST(thutu AS SIGNED) ASC')
                    ->where('hidden','=','1')
                    ->get();
                    ?>
                    <ul>
                        @foreach ($danhmuc as $dm)
                        <li>
                            <a href="{{ route('cuahang', ['id' => $dm->id]) }}"><span>{{$dm->name}}</span></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            <div class="boxloai mb-4 bg-white">
                <h3 class="p-2">Lọc theo giá</h3>
                <div class="locgia">
                    <p>
                        <label for="amount">Khoảng giá:</label>
                        <form id="filterForm" action="{{ route('filter.products') }}" method="POST">
                            @csrf
                            <input type="text" id="amount" readonly style="border: 0; color: #f6931f; font-weight: bold;">
                            <input type="hidden" name="minPrice" id="minPrice">
                            <input type="hidden" name="maxPrice" id="maxPrice">
                        </p>
                        <div id="slider-range"></div>
                        <br>
                        <input type="submit" name="filter_price" value="Lọc giá" class="btn btn-default">
                        </form>
                    </div>




            </div>
        </section>
        <section class="col-lg-9">
            <div class="thanhchucnang bg-white">
                <div class="row p-3" >
                    @if(request()->is('cuahang'))
                    <div class="col-sm-7 mt-2"><h4>Cửa hàng </h4></div>
                @else
                    @if($selectedCategory)
                        <div class="col-sm-7 mt-2"><h4>{{ $selectedCategory->name }} </h4></div>

                    @endif
                @endif

                    <div class="col-sm-2 mt-2"> <label for="amount">Sắp xếp theo: </label></div>
                    <div class="col-sm-3">
                        <form action="">
                            @csrf
                            <select name="sort" id="sort" class="form-control thanhsapxep" aria-label="Default select example">
                                <option value="{{Request::url()}}?sort_by=none">--Lọc Theo--</option>
                                <option value="{{Request::url()}}?sort_by=giatangdan">--Giá tăng dần--</option>
                                <option value="{{Request::url()}}?sort_by=giagiamdan">--Giá giảm dần--</option>
                                <option value="{{Request::url()}}?sort_by=tuadenz">Lọc theo tên từ A đến Z</option>
                                <option value="{{Request::url()}}?sort_by=tuzdena">Lọc theo tên từ Z đến A</option>
                            </select>
                        </form>

                    </div>

                </div>
                <hr>
            </div>
            <div class="box  bg-white">
                <div class="row p-3 ">
                    @if(count($products) > 0)
                    @foreach ($products as $sanpham)
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 sanpham mb-2">
                        <div class="boxsanpham  p-2"><a href="{{url('/chitiet/'.$sanpham->id)}}">
                            <div class="img">
                                <img src="{{$sanpham->img}}"
                                    alt="{{$sanpham->name}}" width="200px" height="200px">
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="{{url('/chitiet/'.$sanpham->id)}}">{{$sanpham->name}}</a>
                                </h3>
                            </div>
                            <div class="row">
                            <div class="col-8 gia">
                                <span>{{number_format($sanpham->priceSale)}} đ</span><br>
                                <p><del>{{number_format($sanpham->price)}} đ</del></p>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('add_to_cart', $sanpham->id) }}" class="btn btn float-end px-2" style="background-color:#f27024; padding: 5px 10px;border-radius: 50%; color:white;"><i class="bi bi-bag-plus-fill"></i></a>
                            </div>
                        </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12 text-center mt-3">
                        <p>Danh mục hiện không có sản phẩm</p>
                    </div>
                @endif

                    {{ $products->links() }}
        </section>
    </div>
</div>

{{-- <div class="pagination">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a class="justify-content-center" href=""><i class="bi bi-chevron-right"></i></i></a>
</div> --}}
</div>
@endsection
