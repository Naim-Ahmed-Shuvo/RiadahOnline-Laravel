<div class="header-main shadow">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="header-logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('/assets/web') }}/img/header-logo.png" alt="header-logo">
                    </a>
                </div>
            </div>
            <div class="col-7">
                <div class="header-links">
                    <span><a href="{{url('/')}}">@lang('homepage.header-link-home')</a></span>
                    <span><a href="{{route('about')}}">@lang('homepage.header-link-about') </a></span>
                    <span><a href="{{route('pertners')}}">@lang('homepage.header-link-partners')</a></span>
                    <span><a href="{{url('servicepage')}}">@lang('homepage.header-link-services')</a></span>
                    <span><a href="{{route('contact')}}">@lang('homepage.header-link-contact')</a></span>
                </div>
                <div class="mobile-menu-bar">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>

        {{-- mobile-menu --}}
        <div class="row mobile-menu">
            <div class="col-12">
                <div class="mobile-menu-header-links">
                    <span><a href="index.html">@lang('homepage.header-link-home')</a></span>
                    <span><a href="about.html">@lang('homepage.header-link-about')</a></span>
                    <span><a href="detailspage.html">@lang('homepage.header-link-partners')</a></span>
                    <span><a href="servicemain.html">@lang('homepage.header-link-services')</a></span>
                    <span><a href="contact.html">@lang('homepage.header-link-contact')</a></span>
                    <hr>
                    <div class="mobile-menu-item mobile-menu-item-arabic item-1 mobile-menu-lang-click cursor-pointer">
                        <p>
                            @php
                              echo  $locale == 'ar'?'العربية':'English';
                            @endphp
                        </p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mobile-menu-lang-dropdown">
                        <a href="{{url('?lang=ar')}}">@lang('homepage.arabic')</a>
                        <a href="{{url('?lang=en')}}">@lang('homepage.english')</a>
                    </div>
                    <div class="mobile-menu-item item-2 mobile-menu-item-arabic">

                        <p>@lang('homepage.header-top-cart')</p>
                        <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                    <div class="mobile-menu-item item-3 mobile-menu-item-arabic">
                        <p>@lang('homepage.header-top-account')</p>
                        <a href=""><i class="fas fa-user"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
