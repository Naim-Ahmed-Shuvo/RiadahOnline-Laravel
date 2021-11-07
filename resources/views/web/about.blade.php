@extends('web.layout.app')

@section('main')
<!-- about -->
<section class="about about-page-about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="about-head">

                    <h4>@lang('aboutpage.About-Us')</h4>
                    <div class="empty-div"></div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-5 col-sm-12 col-12 col-md-12">
                <div class="about-img">
                    <img src="{{asset('assets/web')}}/img/Rectangle 62.png" alt="about-img">
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 col-12 col-md-12">
                <div class="about-text">
                    <h1>@lang('aboutpage.About Riadah Online')</h1>
                    <p>
                        @lang('aboutpage.about-text')
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- about./ -->

<!-- about-mission -->
<section class="about-mission">
   <div class="container">
       <div class="row">
           <div class="col-12 col-sm-12 col-md-12 col-lg-6 my-2">
               <div class="about-mission-content">
                   <img src="{{asset('assets/web')}}/img/Rectangle 64.png" alt="img">
                   <div class="text-content">
                       <h4>@lang('aboutpage.Our-vision')</h4>
                       <p>@lang('aboutpage.our-vision-text')</p>
                   </div>
               </div>
           </div>
           <div class="col-12 col-sm-12 col-md-12 col-lg-6 my-2">
               <div class="about-mission-content">
                   <img src="{{asset('assets/web')}}/img/Rectangle 65.png" alt="img">
                   <div class="text-content">
                       <h4>@lang('aboutpage.Our-message')</h4>
                       <p>@lang('aboutpage.our-message-text')</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- about-mission./ -->

<!-- main-partner -->
<section class="main-partner">
   <div class="container">
       <div class="row">
           <div class="col">
               <div class="about-head">
                   <h4>@lang('aboutpage.Main-Partners')</h4>
                   <div class="empty-div"></div>
               </div>
           </div>
       </div>
       <div class="row mt-5">
           <div class="col-12 col-sm-12 col-md-6 ">
               <div class="col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('aboutpage.main-partner-text-1') </p>
               </div>
           </div>
           <div class="col-12 col-sm-12 col-md-6">
               <div class="col-content">
                   <i class="far fa-check-circle"></i>
                   <p>@lang('aboutpage.main-partner-text-2')</p>
               </div>
           </div>
           <div class="col-12 col-sm-12 col-md-6">
               <div class="col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('aboutpage.main-partner-text-3') </p>
               </div>
           </div>
           <div class="col-12 col-sm-12 col-md-6">
               <div class="col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('aboutpage.main-partner-text-4') </p>
               </div>
           </div>
           <div class="col-12 col-sm-12 col-md-6">
               <div class="col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('aboutpage.main-partner-text-5') </p>
               </div>
           </div>
           <div class="col-12 col-sm-12 col-md-6">
               <div class="col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('aboutpage.main-partner-text-6') </p>
               </div>
           </div>
           <div class="col-12 col-sm-12 col-md-6">
               <div class="col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('aboutpage.main-partner-text-7') </p>
               </div>
           </div>
           <div class="col-12 col-sm-12 col-md-6">
               <div class="col-content">
                   <i class="far fa-check-circle"></i>
                   <p>@lang('aboutpage.main-partner-text-8') </p>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- main-partner./ -->

<!-- investment-projects -->
<!-- projects -->
<section class="projects indexpage-projects">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="project-header">
                    <h5>@lang('homepage.Strategic-Partners-and-Investment-Projects')</h5>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4 my-sm-3 my-md-1 my-lg-0">
                <div class="project-card">
                    <img src="{{ asset('assets/web') }}/img/investment-incubator.png" alt="img" class="w-100">
                    <h3>@lang('homepage.Investment-Incubator')</h3>
                    <p>@lang('homepage.Investment-Incubator-text')</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4 my-sm-3 my-md-1 my-lg-0">
                <div class="project-card">
                    <img src="{{ asset('assets/web') }}/img/relation-incubator.png" class="w-100" alt="img">
                    <h3>@lang('homepage.Relationship-Incubator')</h3>
                    <p>@lang('homepage.Relationship-Incubator-text')</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4 my-sm-3 my-md-1 my-lg-0">
                <div class="project-card">
                    <img src="{{ asset('assets/web') }}/img/media-incubator.png" alt="img" class="w-100">
                    <h3>@lang('homepage.Media-Incubator')</h3>
                    <p>@lang('homepage.Media-Incubator-text')</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4 my-sm-3 my-md-1 my-lg-0">
                <div class="project-card">
                    <img src="{{ asset('assets/web') }}/img/design-incubator.png" alt="img">
                    <h3>@lang('homepage.Design-Incubator')</h3>
                    <p>@lang('homepage.Design-Incubator-text')</p>
                </div>
            </div>

        </div>
        <div class="row ">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4 my-sm-3 my-md-1 my-lg-0">
                <div class="project-card">
                    <img src="{{ asset('assets/web') }}/img/mosanf-transparent-logo.png" alt="img" class="w-100">
                    <h3>@lang('homepage.Mosanf')</h3>
                    <p>@lang('homepage.Mosanf-text')</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4 my-sm-3 my-md-1 my-lg-0">
                <div class="project-card">
                    <img src="{{ asset('assets/web') }}/img/data-incubator.png" alt="img" class="w-100">
                    <h3>@lang('homepage.Data-Incubator')</h3>
                    <p>@lang('homepage.Data-Incubator-text')</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4 my-sm-3 my-md-1 my-lg-0">
                <div class="project-card">
                    <img src="{{ asset('assets/web') }}/img/training-incubator.png" alt="img" class="w-100">
                    <h3>@lang('homepage.Training-Incubator')</h3>
                    <p>@lang('homepage.Training-Incubator-text')</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4">
                <div class="project-card">
                    <img src="{{ asset('assets/web') }}/img/tec-incubator.png" alt="img" class="w-100">
                    <h3>@lang('homepage.Technical-Incubator')</h3>
                    <p>@lang('homepage.Technical-Incubator-text')</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="project-btn text-center">
                    <a href="{{url('/servicepage')}}">
                        <button class="shadow">@lang('homepage.View-all')</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- projects./ -->
<!-- investment-projects./ -->
@endsection
