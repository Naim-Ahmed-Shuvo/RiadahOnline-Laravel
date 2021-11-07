<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="links">
                        <div class="item item-1 position-relative lang-item">
                            <a href="#">
                                <span><?php echo $locale=='ar'?  'العربية': 'English';?></span>
                                 <i class="fas fa-chevron-down"></i>
                            </a>
                            @php
                                $url = $_SERVER["REQUEST_URI"];
                                $path = parse_url($url, PHP_URL_PATH);
                                $pathWithoutSlash = substr($path, 15);
                                // echo $pathWithoutSlash;
                                $local = app()->getLocale();
                            @endphp


                            {{-- @if ($local == 'ar')
                            <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}"> @lang('homepage.english') </a>
                        @else
                            <a href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}"> @lang('homepage.arabic') </a>
                        @endif --}}
                            <ul class="position-absolute shadow-lg lang-dropdown" style="background-color: #ffffff; padding:20px;top:87%;left:2%;z-index:999999;border-radius:5px;display:none">
                                <li><a href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}" style="color: #333333;font-size:15px;">@lang('homepage.arabic')</a></li>
                                <li><a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}" style="color: #333333;font-size:15px;">@lang('homepage.english')</a></li>
                                {{-- <li><a href="{{ url($pathWithoutSlash.'?lang=ar') }}" style="color: #333333;font-size:15px;">@lang('homepage.arabic')</a></li>
                                <li><a href="{{ url($pathWithoutSlash.'?lang=en') }}" style="color: #333333;font-size:15px;">@lang('homepage.english')</a></li> --}}
                            </ul>
                        </div>
                        <div class="item item-2" id="click">

                           <a href="{{url('cart')}}">
                            <p style="position: relative">
                            <i class="fas fa-shopping-cart"></i>
                            <span style="position: absolute;
                                top: -12px;
                                left: 21px;
                                color: #fafafa;">{{session('cart') ? count(session('cart')):' '}}</span></p>
                            <span>@lang('homepage.header-top-cart') </span>
                           </a>
                        </div>
                        <div class="item item-3">
                            <a href="{{route('admin')}}">
                                <p>
                                    <i class="fas fa-user"></i>
                                </p>
                                <span style="color: #ffffff">@lang('homepage.header-top-account')</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@push('js')
<script>
    const clickMe =document.getElementById('click');
    clickMe.addEventListener('click',function(){
        console.log('hello')
        // const Http = new XMLHttpRequest();
        // const url='https://jsonplaceholder.typicode.com/posts';
        // Http.open("GET", url);
        // Http.send();

        // Http.onreadystatechange = (e) => {
        // console.log(Http.response)
        // }
    })
    // window.onload()

</script>
@endpush


