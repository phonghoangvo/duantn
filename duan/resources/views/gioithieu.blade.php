    @extends('layout')
    @section('tieudetrang')
        Trang giới thiệu
    @endsection

    @section('noidung')
    
    <div class="container px-0 pt-3 pb-3">
        <a class="text-decoration-none text-dark" href="">
            Trang chủ
        </a> /
        <small>Giới thiệu</small>
    </div>
        <section class="introduce pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 left p-4">
                        <img src="/upload/bannergioithieu.jpg" class="img-fluid" alt="">
                        <div class="col-xl-6 d-none d-xl-block">
                        <img class="img2 " src="/upload/anhnengioithieu.jpg" class="img-fluid" alt="">
                        <h2 class="text">350+<br></h2>
                        <h4 class="text2">Happy Cilent<br></h4>
                    </div>
                    </div>
                    <div class="col-lg-6 right p-4">
                        <h3>About Us</h3>
                        <h4 class="content1">Chúng Tôi Là Một Đội Ngũ Lập Trình
                            Của Trường Cao Đẳng FPT POLYTECHNIC</h4>
                        <h4 class="content2">Là một ngôi trường với nhiều giảng viên giỏi và đạo tạo
                            nhiều sinh viên xuất sắc bậc nhất Sài Gòn.</h4>

                        <div class="row contentintro p-4">
                            <div class="col-xl-6 p-2">
                                <i class="fas fa-star mx-2"></i>Chúng tôi có đủ khả năng
                            </div>
                            <div class="col-xl-6 p-2">
                                <i class="fas fa-star mx-2"></i>Thiết bị công nghệ hiện đại
                            </div>
                            <div class="col-xl-6 p-2">
                                <i class="fas fa-star mx-2"></i>Sáng tạo và năng động
                            </div>
                            <div class="col-xl-6 p-2">
                                <i class="fas fa-star mx-2"></i>Mày mò và không ngừng học hỏi
                            </div>
                            <div class="row button">
                                <div class="col-xl-6"></div>
                                <div class="col-md-12 col-xl-6"><Button>Liên hệ cho chúng tôi</Button></div>
                            </div>
                        </div>
                        <!-- <div class="row orange">
                            <div class="col-md-6">
                                <img src="img/anhnengioithieu.jpg" alt="">
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div> -->
                    </div>

                    
                </div>

                <div class="row bg-dark mt-5 pb-4">
                    <div class="col-4 text-center" style="color: white;">
                        <i class="bi bi-calendar-check" style="font-size: 3em;"></i>
                        <h3>4+ Năm</h3>
                        <h6>Hơn 4 năm kinh nghiệm</h6>
                    </div>
                    <div class="col-4 text-center" style="color: white;">
                        <i class="bi bi-people"  style="font-size: 3em;"></i>
                        <h3>6+ Nhân viên</h3>
                        <h6>Đội ngũ hơn 6 nhân viên</h6>
                    </div>
                    <div class="col-4 text-center"style="color: white;">
                        <i class="bi bi-patch-check" style="font-size: 3em;"></></i>
                        <h3>11+ Chứng nhận </h3>
                        <h6>Hơn 11 huân chương và chứng nhận</h6>
                    </div>
                </div>
            
            </div>
            
        </section>

        <section>
            <div class="container">
                <div class="row text-center">
                    <!-- Hiển thị 6 box trên màn hình lớn hơn small -->
                    <div class="col-lg-2 d-none d-lg-block">
                        <img src="upload/bannergioithieu.jpg" alt="" class="img-fluid" width="200px" height="200px">
                        <p>Khải</p>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <img src="upload/bannergioithieu.jpg" alt="" class="img-fluid" width="200px" height="200px">
                        <p>Khải</p>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <img src="upload/bannergioithieu.jpg" alt="" class="img-fluid" width="200px" height="200px">
                        <p>Khải</p>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <img src="upload/bannergioithieu.jpg" alt="" class="img-fluid" width="200px" height="200px">
                        <p>Khải</p>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <img src="upload/bannergioithieu.jpg" alt="" class="img-fluid" width="200px" height="200px">
                        <p>Khải</p>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <img src="upload/bannergioithieu.jpg" alt="" class="img-fluid" width="200px" height="200px">
                        <p>Khải</p>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        
    </html>
    @endsection 