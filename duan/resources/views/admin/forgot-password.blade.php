<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quên Mật Khẩu</title>

    <!-- Custom fonts for this template-->
    <link href="/ad/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/ad/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Bạn Quên Mật Khẩu?</h1>
                                        <p class="mb-4">Đừng lo, chúng tôi sẽ gửi cho bạn liên kết đặt lại mật khẩu qua email
                                            mà bạn đã đăng ký. Vui lòng nhập email của bạn vào bên dưới!</p>
                                    </div>
                                        @if (session('thongbao'))
                                            <div class="alert alert-success">
                                                {{ session('thongbao') }}
                                            </div>
                                        @endif
                                    <form class="user" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Đặt Lại Mật Khẩu
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/register">Đăng ký tài khoản mới!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="/login">Bạn đã có tài khoản rồi? Đăng nhập!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/ad/vendor/jquery/jquery.min.js"></script>
    <script src="/ad/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/ad/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/ad/js/sb-admin-2.min.js"></script>

</body>
</html>