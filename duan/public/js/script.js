$(document).ready(function () {
    // Vendor carousel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        dots: false,
        autoplay: true,
        smartSpeed: 1000, 
        responsive: {
            0: {
                items: 4
            },
            576: {
                items: 5
            },
            768: {
                items: 6
            },
            992: {
                items: 7
            },
            1200: {
                items: 8
            }
        }
    });
    
    // quantity
    
});

$(document).ready(function(){
    $('#sort').on('change',function(){
        var url = $(this).val();
        if(url){
            window.location = url;
        }
        return false;
    });
});
