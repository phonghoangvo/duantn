@extends('layout')
@section('tieudetrang')
 Trang tin tức
@endsection

@section('noidung')
<style>
    .banner {
        background-image: url(upload/bannernews.png);
        background-size: cover;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .banner h2 {
    font-family: 'Grey Qo', sans-serif;
    font-size: 36px; 
    font-weight: 400; 
    }
    .card-text {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    -webkit-line-clamp: 3;
    
}



</style>

<div class="container px-0 pt-3 pb-3">
    <a class="thanhphantrang text-decoration-none" href="/">
   Trang chủ
 </a>/
     <small>Tin tức</small>
 </div>
    <section class="main pt-3 pb-5">
        <div class="container text-center banner">         
                
                <h2>BLOG</h2>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="upload/banner2.png" class="img-fluid pb-4"  alt="">
                    <img src="upload/banner3.png" class="img-fluid pb-4"  alt="">
                    
                </div>
                <div class="col-9">
                    
                    <section>
                        <div class="row">
                         @foreach ($news as $tintuc)
                         @if ($tintuc->hidden == 1)
                         <div class="col-md-6 pb-3 text-center">
                            <div class="card">
                                <a href="{{ route('chitietnew', ['id' => $tintuc->id]) }}"><img src="{{ $tintuc->img}}" class="card-img-top"  alt="{{$tintuc->title}}" style="max-width: 100%; height: 300px;"></a>
                                <div class="card-body">
                                   <a href="{{ route('chitietnew', ['id' => $tintuc->id]) }}" style="text-decoration: none; color:#333;"> <h5 class="card-title">{{$tintuc->title}}</h5></a>
                                    <p class="card-text">{{$tintuc->summary}}</p>
                                    <div class="text-center">
                                        <a style="color: white; width: 200px; background-color: #f27024;" href="{{ route('chitietnew', ['id' => $tintuc->id]) }}" class="btn btn d-inline-block">Xem thêm</a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                         @endif
                        @endforeach        
                        
                        
                            <div class="pagination">
                                {{ $news->links() }}
                            </div>
                    </section>
                    
                </div>
            </div>
        </div>
    </section>
@endsection


