@extends('layout')
@section('tieudetrang')
    Cửa hàng - Kết quả lọc
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
                    <h3 class="p-2">Tác giả</h3>
                    <?php
                        $tacgia = DB::table('tacgia')
                        ->select('id','name')
                        ->get();
                        ?>
                    <div class="danhmuc">
                        @foreach ($tacgia as $tg)
                            <label><input type="checkbox" name="tacgia" value="tacgia{{$tg->id}}"> {{$tg->name}}</label>
    
                         @endforeach
                    </div>
                </div>
            
                <div class="boxloai mb-4 bg-white">
                    <h3 class="p-2">Nhà xuất bản</h3>
                    <?php
                    $nhaxuatban = DB::table('nhaxuatban')
                    ->select('id','name')
                    ->get();
                    ?>
                     <form id="filterForm" action="{{ route('filter.products') }}" method="POST">
                        @csrf
                        <div class="danhmuc">
                            @foreach ($nhaxuatban as $nxb)
                                <label>
                                    <input type="checkbox" class="nhaxuatban-checkbox" name="nhaxuatban[]" value="{{ $nxb->id }}">
                                    {{ $nxb->name }}
                                </label>
                            @endforeach
                        </div>
                    </form>
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
                        
                        <div class="col-sm-7 mt-2"><h4>Kết quả lọc theo giá </h4></div>
                    
                        
                    
                    
                        <div class="col-sm-2 mt-2"> <label for="amount">Sắp xếp theo: </label></div>
                        <div class="col-sm-3">
                            <form action="">
                                @csrf
                                <select name="sort" id="sort" class="form-control thanhsapxep" aria-label="Default select example">
                                    <option value="">--Lọc Theo--</option>
                                    <option value="">--Giá tăng dần--</option>
                                    <option value="">--Giá giảm dần--</option>
                                    <option value="">Lọc theo tên từ A đến Z</option>
                                    <option value="">Lọc theo tên từ Z đến A</option>
                                </select>
                            </form>
                            
                        </div>
                        
                    </div>
                    <hr>
                </div>
                <div class="box  bg-white">
                    <div class="row p-3">
                        <!-- Hiển thị sản phẩm đã lọc -->
                        @if(count($filteredProducts) > 0)
                        @foreach ($filteredProducts as $sanpham)
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
                                <p>Không có sản phẩm nào thỏa mãn điều kiện lọc.</p>
                            </div>
                        @endif
                        {{ $filteredProducts->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
