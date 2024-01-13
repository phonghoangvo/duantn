@extends('layout')
@section('tieudetrang')
Danh sách yêu thích
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
                    <h2 class="mt-4 mb-4 text-center">Danh sách yêu thích</h2>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                  <div class="table-responsive">
                                    <table class="table table-striped mb-0 text-center">
                        <thead>
                            <tr>
                                <th scope="col" class="col-lg-1">STT</th>
                                <th scope="col" class="col-lg-1">Tên sản phẩm</th>
                                <th scope="col" class="col-lg-1">Giá sản phẩm</th>
                                <th scope="col" class="col-lg-1">Hình sản phẩm</th>
                                <th scope="col" class="col-lg-1">Ngày yêu thích</th>
                                <th scope="col" class="col-lg-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($yeuthich as $yt)
                            <tr>
                                <td class="limited-text">{{$loop->index +1}}</td>
                                <td class="limited-text">{{$yt->prod->name}}</td>
                                <td class="limited-text">{{$yt->prod->price}} / <u>{{$yt->prod->priceSale}}</u></td>
                                <td class="limited-text"><img src="{{$yt->prod->img}}" width="40px"></td>
                                <td class="limited-text">{{$yt->created_at->format('d/m/Y')}}</td>
                                <td>
                                    @if($yt->prod->yeuthich)
                                    <a title="Bỏ thích" onclick="return confirm('Bạn có muốn bỏ thích không ?')"
                                        href="{{ route('chitiet.favorite', $yt->idProduct) }}">
                                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                        <lord-icon src="https://cdn.lordicon.com/igciyimj.json" trigger="hover"
                                            style="width:30px;height:30px;padding: 5px 10px"></lord-icon>
                                    </a>
                                    @endif
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
