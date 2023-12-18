<section>
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container px-0">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="/img/logo.jpg" alt="" style="width: 180px; height:80px">
            </a>
            <!-- Toggle Btn -->
            <button class="navbar-toggler shadow-none border-" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- SideBar -->
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <!-- SideBar Header -->
                <div class="offcanvas-header text-dark border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Fighting Together</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- SideBar Body -->
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                    <ul class="navbar-nav justify-content-center align-items-center flex-grow-1">
                        <div class="input-group w-50 mx-5">
                                                     
                            
                            <form action="{{route('timkiem')}}" method="GET">
                                <div class="row">
                                    <div class="col-md-10">
                                    <input type="text" name="timkiem" class="form-control" placeholder="Tìm kiếm sản phẩm" aria-label="Tìm kiếm sản phẩm" aria-describedby="button-addon2">
                                    </div>
                                    <div class="col-md-2">
                                    <button class="btn btn-primary border-0" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/cuahang">Cửa hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/lienhe">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/gioithieu">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/news">Tin tức</a>
                        </li>
                        <li class="nav-item d-flex">
                            <a class="nav-link text-primary" href="{{ url("/giohang") }}">
                                <button class="btn ">
                                    <i class="bi bi-cart-check-fill"></i>
                                    {{ count((array) session('cart')) }}
                                </button>
                            </a>
                        </li>
                    </ul>
                    <!-- Login/Logout -->
                    @if(Auth::check())
                        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                            <div class="dropdown">
                                <div class="d-flex align-items-center" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ Auth::user()->avatar }}" alt="User Avatar" class="avatar" width="25px"> 
                                    <span style="margin-left: 5px;">{{ Auth::user()->name }}</span>
                                </div>
                        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="#">Chỉnh sửa thông tin</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <!-- Thêm mục "Trang quản trị" nếu idGroup là 1 -->
                                        @if(Auth::user()->id_group == 1)
                                            <a class="dropdown-item" href="{{ route('admin') }}">Trang quản trị</a>
                                            <li><hr class="dropdown-divider"></li>
                                        @endif
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                            <a href="/login" class="text-dark text-decoration-none px-3 py-1 rounded-4" style="background-color: antiquewhite;">Đăng nhập</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</section>