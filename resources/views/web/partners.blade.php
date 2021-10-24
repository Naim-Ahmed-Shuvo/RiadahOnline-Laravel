@extends('web.layout.app')

@section('main')
  <!-- section1 -->
  <section class="partner-section-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="partner-sec1-header">
                    <h4>Business Partner</h4>
                    <div class="line-div"></div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="partner-card ">
                    <div class="partner-card-img" style="top: -9%;left:6%">
                        <img src="{{asset('assets/web')}}/img/riadah-incubator.png" class="w-100" alt="img">
                    </div>
                    <div class="partner-card-text">
                        <h4> @lang('partnerspage.Riadah Incubators') </h4>
                        <p>@lang('partnerspage.Riadah-Incubators-text')</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="partner-card ">
                    <div class="partner-card-img">
                        <img src="{{asset('assets/web')}}/img/economic-incubator.png" class="w-100" alt="img">
                    </div>
                    <div class="partner-card-text">
                        <h4> @lang('partnerspage.Economic Incubator') </h4>
                        <p>@lang('partnerspage.Economic-Incubator-text')</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="partner-card ">
                    <div class="partner-card-img">
                        <img src="{{asset('assets/web')}}/img/dis-leader.png" alt="img">
                    </div>
                    <div class="partner-card-text">
                        <h4> @lang('partnerspage.Discovering Leadership') </h4>
                        <p>@lang('partnerspage.Discovering-Leadership-text')</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="partner-card ">
                    <div class="partner-card-img">
                        <img src="{{asset('assets/web')}}/img/event-incubator.png" alt="img">
                    </div>
                    <div class="partner-card-text">
                        <h4> @lang('partnerspage.Event Incubators') </h4>
                        <p>@lang('partnerspage.Event-Incubators-text')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row 2nd-row my-5">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="partner-card ">
                    <div class="partner-card-img">
                        <img src="{{asset('assets/web')}}/img/job-incubator.png" alt="img">
                    </div>
                    <div class="partner-card-text">
                        <h4>@lang('partnerspage.Job Incubators') </h4>
                        <p>@lang('partnerspage.Job-Incubators-text') </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="partner-card ">
                    <div class="partner-card-img">
                        <img src="{{asset('assets/web')}}/img/marketing logo-01 1.png" alt="img">
                    </div>
                    <div class="partner-card-text">
                        <h4> @lang('partnerspage.Marketing Incubators') </h4>
                        <p>@lang('partnerspage.Marketing-Incubators-text')</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="partner-card ">
                    <div class="partner-card-img" style="top: -17%;left:-6%;">
                        <img src="{{asset('assets/web')}}/img/tec-incubator.png" alt="img">
                    </div>
                    <div class="partner-card-text">
                        <h4>@lang('partnerspage.Technical Incubator') </h4>
                        <p>@lang('partnerspage.Technical-Incubator-text')</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="partner-card ">
                    <div class="partner-card-img" style="top: 11%;left:18%;">
                        <img src="{{asset('assets/web')}}/img/data-incubator.png" alt="img">
                    </div>
                    <div class="partner-card-text">
                        <h4> @lang('partnerspage.Data Incubator') </h4>
                        <p>@lang('partnerspage.Data-Incubator-text')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section1./ -->\

<!-- section2 -->
<section class="partner-sec-2">
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-1') </p>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-2') </p>
               </div>
            </div>
        </div>
        <div class="row my-5">

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-3') </p>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-4')</p>
               </div>
            </div>
        </div>
        <div class="row my-5">

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-5') </p>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-6') </p>
               </div>
            </div>
        </div>
        <div class="row my-5">

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-7') </p>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-8') </p>
               </div>
            </div>
        </div>
        <div class="row my-5">

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-9') </p>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-10') </p>
               </div>
            </div>
        </div>
        <div class="row my-5">

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-11')</p>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-12')</p>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-5">
               <div class="partner-sec-2-col-content">
                   <i class="far fa-check-circle"></i>
                   <p> @lang('partnerspage.text-13')</p>
               </div>
            </div>
        </div>

    </div>
</section>
<!-- section2./ -->
@endsection
