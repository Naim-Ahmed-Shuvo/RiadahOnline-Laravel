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
})

// const nav = document.querySelector("nav")

// window.addEventListener("scroll",()=>{
//     if(window.scrollY>400){
//         nav.classList.add("fixed-nav")
//     } else{
//         nav.classList.remove("fixed-nav")
//     }
// })
