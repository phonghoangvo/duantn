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
    <link rel="stylesheet" href="/css/yeuthich.css">

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Grey+Qo&display=swap">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <!-- Update version -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>
<body>
    @include('navbar')

    <main>
       @yield('noidung')
    </main>

    <footer>
        @include('footer')
    </footer>

    <button onclick="topFunction()" id="back-top" title="Tải lên">
        <i class="bi bi-arrow-up" style="font-size: 22px;"></i>
    </button>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!-- Update version -->

    <!-- Các script khác -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="/assets/owlcarousel/owl.carousel.js"></script>
    <script src="/js/script.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/chitiet.js"></script>

    <script>
        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });

        let mybutton = document.getElementById("back-top");

        window.onscroll = function() {
            scrollFunction()
        };

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

        // function muaNgay(productId) {
        //     axios.post('{{ route('add_to_cart', ['id' => ':productId']) }}'.replace(':productId', productId), {
        //             product_id: productId
        //         }, {
        //             headers: {
        //                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        //             }
        //         })
        //         .then(response => {
        //             alert('Sản phẩm đã được thêm vào giỏ hàng.');
        //             setTimeout(() => {
        //                 window.location.href = "{{ route('thanhtoan') }}";
        //             }, 1000);
        //         })
        //         .catch(error => {
        //             console.error('Lỗi khi thêm vào giỏ hàng: ', error);
        //         });
        // }

        $(".cart_update").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "PUT",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".cart-remove").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Bạn có muốn xóa sản phẩm khỏi giỏ hàng không?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });

        $("#oderForm").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ route("quatrinhtt") }}',
                type: 'POST',
                data: $(this).serialize(),
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

        // phuongthucthanhtoan
        $("#thanhtoan1").click(function() {
            if ($(this).is(":checked") == true) {
                $("#card-thanhtoan-form").addClass('d-none');
            }
        });
        $("#thanhtoan2").click(function() {
            if ($(this).is(":checked") == true) {
                $("#card-thanhtoan-form").removeClass('d-none');
            }
        })
    </script>
</body>
</html>
