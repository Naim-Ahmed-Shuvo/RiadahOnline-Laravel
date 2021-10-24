@extends('web.layout.app')

@section('main')
 <!-- contact top -->
 <section class="contact-top">
    <div class="container">
        <div class="row">
            <div class="col">
               <div class="contact-top-header">
                   <h4>@lang('contactpage.Contact Us')</h4>
                   <div></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="contact-info">
                    <h4>@lang('contactpage.Call Us')</h4>
                     <div class="empty-div"></div>
                     <p>@lang('contactpage.call-us-text')</p>
                     <span><b>Mobile:</b>  @lang('contactpage.mobile')</span>
                     <span><b>Email:</b> @lang('contactpage.email')</span>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="contact-info">
                    <h4>@lang('contactpage.Our Office')</h4>
                     <div class="empty-div"></div>
                     <p>@lang('contactpage.office address')</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact top./ -->

<!-- contact form -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contact-form-title">
                    <p>@lang('contactpage.contact-form-top-text')</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-main">
                    <form action="{{route('submit.form')}}" method="post">
                        @csrf
                    <div class="inputs">
                        <div class="text-input">
                            <p>@lang('contactpage.Name')</p>
                            <input type="text" name="name">
                        </div>
                        <div class="text-input">
                            <p>@lang('contactpage.Email Address')</p>
                            <input type="text" name="email">
                        </div>
                    </div>
                    <div class="inputs">
                        <div class="text-input">
                            <p> @lang('contactpage.Your Phone')</p>
                            <input type="text" name="phone_number">
                        </div>
                        <div class="text-input">
                            <p>@lang('contactpage.Your city')</p>
                            <input type="text" name="city">
                        </div>
                    </div>
                    <div class="inputs">
                        <div class="text-input">
                           <textarea  id="" cols="30" rows="5" name="message" placeholder="What do you need ?"></textarea>
                        </div>
                    </div>
                    <div class="inputs">
                        <div class="text-input">
                           <button type="submit">@lang('contactpage.Send Message')</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form./ -->


<!-- ////////////.................................////////////////// -->


<!-- contact-map -->
<section class="contact-map">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="map">
                    <h5>Google Map</h5>
                    <img src="{{asset('public/assets/web')}}/img/Rectangle 67.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-map./ -->
@endsection
