@extends('layout')
@section('tieudetrang')
    Cửa hàng
@endsection
@section('noidung')

   

<div class="container px-0 pt-3 pb-3">
    <a class="text-decoration-none text-dark" href="">
        Trang chủ
    </a> /
    <small>Cửa hàng</small>
    
    
</div>
<div class="container pt-3 pb-3 px-0">

    
    <div class="row">
        <section class="col-lg-3 ">
            <div class=" boxloai bg-white">
                <h3 class="p-2">Sản phẩm theo loại</h3>
                <div class="">
                    <?php
                    $danhmuc = DB::table('category')->select('id','name')
                    ->orderby('thutu','asc')
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

        </section>
        <section class="col-lg-9">
            <div class="thanhchucnang bg-white">
                <div class="row p-3" >
                    <div class="col-sm-3 mt-2"> <label>Sắp xếp theo: </label></div>
                    <div class="col-sm-5">
                        <form action="">
                            @csrf
                            <select name="sort" id="sort" class="form-select thanhsapxep" aria-label="Default select example">
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
                            <div class="gia">
                                <span>{{number_format($sanpham->price)}} đ</span><br>
                                <p><del>{{number_format($sanpham->priceSale)}} đ</del></p>
                            </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
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