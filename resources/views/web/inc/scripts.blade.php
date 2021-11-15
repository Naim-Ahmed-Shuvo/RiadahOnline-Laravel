<script src="{{ asset('assets/web') }}/js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('assets/web') }}/js/popper.min.js"></script>
<script src="{{ asset('assets/web') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/web') }}/js/slick.min.js"></script>
<script src="{{ asset('assets/web') }}/js/custom.js"></script>
<script>
    $('.slider__container').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        rtl: {{$locale=='en'?'false':'true'}},
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [
            {
              breakpoint: 811,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                arrows:false
              }
            },
            {
              breakpoint: 415,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
              }
            },
            {
              breakpoint: 413,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
</script>
