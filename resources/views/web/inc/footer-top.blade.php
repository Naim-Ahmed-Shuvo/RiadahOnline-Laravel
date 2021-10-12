<section class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6 col-sm-6">
                <div class="contain contain1">
                    <h1>RIADAHONLINE</h1>
                    <p>@lang('homepage.footer-text')</p>
                    <h6>@lang('homepage.Contact Us')</h6>
                    <div class="empty-div"></div>
                    <div class="icon-links">
                        <i class="fas fa-phone-alt"></i>
                        <p> @lang('homepage.footer-Phone')</p>
                    </div>
                    <div class="icon-links">
                        <i class="far fa-envelope"></i>
                        <p> @lang('homepage.footer-email')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 col-sm-6">
                <div class="contain contain-2">
                    <h5>@lang('homepage.Important-Links')</h5>
                    <div class="empty-div"></div>
                    @php
                     $locale = app()->getLocale();
                    @endphp
                    {{-- footer links --}}
                    @if ($locale=='en')
                    <div class="icon-links">
                        <i class="fas fa-angle-right"></i>
                        <p>  Who we are</p>
                    </div>
                    <div class="icon-links">
                        <i class="fas fa-angle-right"></i>
                        <p> Business Policy</p>
                    </div>
                    <div class="icon-links">
                        <i class="fas fa-angle-right"></i>
                        <p> Service offer</p>
                    </div>
                    <div class="icon-links">
                        <i class="fas fa-angle-right"></i>
                        <p> Blog </p>
                    </div>
                    <div class="icon-links">
                        <i class="fas fa-angle-right"></i>
                        <p>  My Request</p>
                    </div>
                    <div class="icon-links">
                        <i class="fas fa-angle-right"></i>
                        <p> Vendor Registration</p>
                    </div>
                    <div class="icon-links">
                        <i class="fas fa-angle-right"></i>
                        <p> Contact Info</p>
                    </div>
                    @endif


                    @if ($locale=='ar')

                    <div class="icon-links">

                        <p> @lang('homepage.Who we are')</p>
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="icon-links">

                        <p> @lang('homepage.Business Policy')</p>
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="icon-links">

                        <p> @lang('homepage.Our Services')</p>
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="icon-links">

                        <p> @lang('homepage.Blogs') </p>
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="icon-links">

                        <p> @lang('homepage.Registration')</p>
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="icon-links">

                        <p> @lang('homepage.Contact Us')</p>
                        <i class="fas fa-angle-left"></i>
                    </div>

                    @endif
                </div>
            </div>
            <div class="col-md-4 col-6 col-sm-6">
                <div class="contain contain-3">
                    <h5>@lang('homepage.Contact Details')</h5>
                    <div class="empty-div"></div>
                    <p>@lang('homepage.Address-Riadah-Incubators-Startup')</p>
                    <p>@lang('homepage.footer-address')</p>

                    <div class="empty-div"></div>
                    <div class="icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
