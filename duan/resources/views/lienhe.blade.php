@extends('layout')

@section('tieudetrang')
    Trang liên hệ
@endsection

@section('noidung')
    <main>
        <div class="container px-0 pt-3 pb-3">
            <a class="text-decoration-none text-dark" href="">
                Trang chủ
            </a> /
            <small>Liên hệ</small>
        </div>
        <div class="container pb-3 pt-3 px-0">
            <h2 class="text-center mb-5">Liên hệ với chúng tôi</h2>
            <div class="row">
                <div class="col-md-3 mb-3"> 
                    <div class="text-center">
                        <div class="icon">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/oaflahpk.json" trigger="hover"
                                colors="primary:#4bb3fd" state="hover-spin" style="width:60px;height:60px">
                            </lord-icon>
                        </div>
                        <div class="text">
                            <b>Địa chỉ:</b>Tân Chánh Hiệp - Công viên phần mềm Quang Trung
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-center">
                        <div class="icon">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/tftaqjwp.json" trigger="morph"
                                colors="primary:#3080e8" state="morph-phone-ring-signal-finish"
                                style="width:60px;height:60px">
                            </lord-icon>
                        </div>
                        <div class="text">
                            <b>Số điện thoại:</b> 012345678</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-center">
                        <div class="icon">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/ehfubvwr.json" trigger="hover"
                                colors="primary:#3080e8" state="intro" style="width:60px;height:60px">
                            </lord-icon>
                        </div>
                        <div class="text">
                            <b>Email:</b> fightingtogether@gmail.com
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="text-center">
                        <div class="icon">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/oqhlhtfq.json" trigger="hover"
                                colors="primary:#4bb3fd,secondary:#ebe6ef" state="hover-2"
                                style="width:60px;height:60px">
                            </lord-icon>
                        </div>
                        <div class="text">
                            <b>Website:</b> fightingtogetherBook
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <iframe class="w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4436614899205!2d106.62525347488366!3d10.8538210892997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2sQuang%20Trung%20Software%20City!5e0!3m2!1sen!2s!4v1694710912578!5m2!1sen!2s"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <form method="post" action="{{route('sendemail')}}" class="loginform">
                            @csrf
                            @if(Session::has('error'))
                            <div class="alert alert-danger">
                                {{Session::get('error')}}
                            </div>
                            @endif
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                            @endif
                            <div class="mb-0 p-3">
                                <label for="Name"><b>Họ và tên</b></label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Họ và tên">
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-0 p-3">
                                <label for="Email"><b>Email</b></label>
                                <input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="Email">
                                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-0 p-3">
                                <label for="Name"><b>Chủ đề</b></label>
                                <input type="text" class="form-control" value="{{old('chude')}}" name="chude" placeholder="Chủ đề">
                                @error('chude') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-0 p-3">
                                <label for="Name"><b>Nội dung</b></label>
                                <textarea name="message" class="form-control"  id="message" cols="5" rows="5">{{old('message')}}</textarea>
                                @error('message') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-0 p-3">
                                <button class="btn btn-primary" type="submit">Gửi lời nhắn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="/js/script.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
@endsection
