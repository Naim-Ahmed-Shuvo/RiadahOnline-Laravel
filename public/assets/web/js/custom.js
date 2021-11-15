$(document).ready(function(){
    console.log("ready");
    $(".fa-bars").on("click",function(){
        $(".mobile-menu").toggle();
        // console.log($('#mobile-menu'));
    })

    // scroll up btn show
    $(window).on("scroll",()=>{
        if(this.pageYOffset>400){
            $(".scroll-up-btn").css("display","flex")
        } else{
            $(".scroll-up-btn").css("display","none")
        }
    })

    $(".scroll-up-btn").on("click",()=>{
        console.log("clicked")
        $("html, body").animate({
            scrollTop: 0
        },2000)
    })

    // var h = ()
    $(".mdc-btn").on("click",function(){
        $("html, body").animate({
            scrollTop: $(document).height()
        },2000)
    })

    // lang drop-down
    $('.lang-item').on('click',function(){
        $('.lang-dropdown').toggle('slow')
    })
    $('.mobile-menu-lang-click').click(function(){
        $(".mobile-menu-lang-dropdown").toggle();
    })

     //slick-slider
    //  $('.slider__container').slick({
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 2000,
    //     arrows: true,
    //     responsive: [
    //         {
    //           breakpoint: 811,
    //           settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 1,
    //             infinite: true,
    //             arrows:false
    //           }
    //         },
    //         {
    //           breakpoint: 415,
    //           settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 1,
    //             arrows:false
    //           }
    //         },
    //         {
    //           breakpoint: 413,
    //           settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 1,
    //             arrows:false
    //           }
    //         }
    //         // You can unslick at a given breakpoint now by adding:
    //         // settings: "unslick"
    //         // instead of a settings object
    //       ]
    // });

    $('.details__redesign__slider__container').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
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
    })
})

// const nav = document.querySelector("nav")

// window.addEventListener("scroll",()=>{
//     if(window.scrollY>400){
//         nav.classList.add("fixed-nav")
//     } else{
//         nav.classList.remove("fixed-nav")
//     }
// })
