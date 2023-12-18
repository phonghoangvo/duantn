<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tieudetrang')</title>
    <!-- Css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/lienhe.css">
    <link rel="stylesheet" href="/css/gioithieu.css">
  
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Grey+Qo&display=swap">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.theme.default.min.css">
</head>
<body>
    @include('navbar')
   
    <main>
       
       @yield('noidung')
       
        
    </main>


    <!-- Footer Start -->
    <footer>
        @include('footer')
    </footer>
    <!-- Footer End -->

    <!-- Back-to-top -->
    <button onclick="topFunction()" id="back-top" title="Tải lên">
        <i class="bi bi-arrow-up" style="font-size: 22px;"></i>
    </button>




    <!-- javascript -->
    <script src="/assets/vendors/jquery.min.js"></script>
    <script src="/assets/owlcarousel/owl.carousel.js"></script>

    <script src="/js/script.min.js"></script>
    <script src="/js/script.js"></script>
    
    <script>
        let mybutton = document.getElementById("back-top");
        
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        $("#oderForm").submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: '{{ route("quatrinhtt") }}',
            type: 'POST',
            data: $(this).serialize(), // Sử dụng serialize() thay vì serializeArray()
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log(response);
                var errors = response.errors;
                if (errors.hoTen) {
                    $("#hoTen").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.hoTen);
                } else {
                    $("#hoTen").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html('');
                }

                if (errors.email) {
                    $("#email").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.email);
                } else {
                    $("#email").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html('');
                }
                if (errors.soDienThoai) {
                    $("#soDienThoai").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.soDienThoai);
                } else {
                    $("#soDienThoai").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html('');
                }
                if (errors.diaChi) {
                    $("#diaChi").addClass('is-invalid')
                        .siblings("p")
                        .addClass('invalid-feedback')
                        .html(errors.diaChi);
                } else {
                    $("#diaChi").removeClass('is-invalid')
                        .siblings("p")
                        .removeClass('invalid-feedback')
                        .html('');
                }
            }
        });
    });



    //phuongthucthanhtoan
    $("#thanhtoan1").click(function(){
            if($(this).is(":checked")==true){
                $("#card-thanhtoan-form").addClass('d-none');
            }
        });
        $("#thanhtoan2").click(function(){
            if($(this).is(":checked")==true){
                $("#card-thanhtoan-form").removeClass('d-none');
            }
        })
        </script>
</body>
</html>