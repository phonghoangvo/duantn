@extends('layout')
@section('tieudetrang')
 Trang tin tức
@endsection

@section('noidung')
<style>
    .banner {
        background-image: url(/upload/bannernews.png);
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


    <section class="main pt-3 pb-5">
        <div class="container text-center banner">         
                
                <h2>BLOG</h2>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="/upload/banner2.png" class="img-fluid pb-4"  alt="">
                    <img src="/upload/banner3.png" class="img-fluid pb-4"  alt="">
                </div>
                <div class="col-9">
                    <section>
                        <div class="row">
                            <div class="col-md-12 pb-3">
                                <div class="card">
                                    <img src="{{$chitietnew->img}}" class="card-img" alt="{{$chitietnew->title}}" style="max-width: 100%; max-height:600px">
                                    <div class="card-body" style="  line-height: 1.8;">
                                        <i class="bi bi-calendar3" style="font-size: 1.5em; color: orange;"></i>
                                        <span style="font-size: 1.2em; color: orange;"> {{ $chitietnew->created_at->format('d/m/Y, H:i') }} </span> 
                                        <h5 class="card-title">{{$chitietnew->title}}</h5>
                                        <p class="text">{{$chitietnew->content}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                                                                                
                    </section>
                    
                </div>
            </div>
        </div>
    </section>
@endsection


