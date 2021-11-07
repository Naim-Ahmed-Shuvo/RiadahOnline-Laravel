@extends('web.layout.app')

@section('main')



<!-- hero -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @forelse ($sliders as $key=>$item)

        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <img class="d-block w-100"
                src="{{url($item->image)}}"
                alt="First slide">
        </div>
        @empty
           {{ 'no slider' }}
        @endforelse
        {{-- <div class="carousel-item">
            <img class="d-block w-100" src="https://www.wallpapertip.com/wmimgs/230-2305920_digital-print-wallpaper.jpg"
                alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://cdn.techjuice.pk/wp-content/uploads/2016/07/20.png"
                alt="Third slide">
        </div> --}}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- hero./ -->

<!-- form -->
<section class="form">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="div">
                    <form action="{{url("/submit")}}" method="post">
                        @csrf
                        <h5>@lang('homepage.Find-the-service-you-need')</h5>
                        <div>
                            <input type="text" value="{{$search??''}}" name="search" placeholder="....@lang('homepage.Search-Here')">
                            <button>@lang('homepage.Search')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@php
$locale = app()->getLocale();
@endphp

<!-- form./ -->

<!-- testimonial -->
<section class="testimonial">
    <div class="container container-fluid">
        <div class="row">
            @forelse ($services as $index=>$item)

            <div class="col-sm-12 col-12 col-md-6 col-lg-3  my-5">
                <div class="cardd">
                    <a href="{{url("/service-details/")}}/{{$item->id}}">
                        <img src="{{$item->image}}" class="img-fluid" alt="">
                        <div class="card-text shadow ">
                            <div class="card-text-top">
                                <span style="color: #333333">0{{$index+1}}</span>
                                <div class="line"></div>
                            </div>
                            <h3 style="text-align: <?php echo ($locale=='ar') ?  'start':'';?>">{{$locale =='ar'?$item->title_ar:$item->title}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            @empty
              {{ 'no data' }}
            @endforelse

        </div>
    </div>
</section>
<!-- testimonial./ -->

<!-- about -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 col-sm-12 col-md-12">
                <div class="about-img">
                    <img src="{{ asset('assets/web') }}/img/about-img.png" class="w-100" alt="about-img">
                </div>
            </div>
            <div class="col-lg-7 col-12 col-sm-12 col-md-12">
                <div class="about-text" style="text-align: <?php echo ($locale=='ar') ?  'start':'';?>">
                    <h1>@lang('homepage.Who-are-we')</h1>
                    <p>@lang('homepage.who-text')
                    </p>
                    <a href="{{route("about")}}">
                        <button>@lang('homepage.who-Read-more')</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about./ -->

<!-- busines partner -->
<section class="partner">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info shadow">
                    <div class="info-tem">
                        <a href="3"><i class="fas fa-leaf"></i></a>
                        <p>@lang('homepage.partner-text-1')</p>
                    </div>
                    <div class="info-tem">
                        <a href="3"><i class="fas fa-leaf"></i></a>
                        <p>@lang('homepage.partner-text-2')</p>
                    </div>
                    <div class="info-tem">
                        <a href="3"><i class="fas fa-leaf"></i></a>
                        <p>@lang('homepage.partner-text-3')</p>
                    </div>
                    <div class="info-tem">
                        <a href="3"><i class="fas fa-leaf"></i></a>
                        <p>@lang('homepage.partner-text-4')</p>
                    </div>
                    <div class="info-tem">
                        <a href="3"><i class="fas fa-leaf"></i></a>
                        <p>@lang('homepage.partner-text-5')</p>
                    </div>
                    <div class="info-tem">
                        <a href="3"><i class="fas fa-leaf"></i></a>
                        <p>@lang('homepage.partner-text-6')</p>
                    </div>

                </div>
                <div class="partner-main">

                    <div class="div-image">
                        <div class="image-overlay">
                            <h4>@lang('homepage.Our-Business-Partners') </h4>

                            <button>@lang('homepage.partner-read-more')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- busines partner./ -->

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
                    <img src="{{ asset('assets/web') }}/img/investment-incubator.png" alt="img" style="top: -30%;
                    left: -19%;
                    width: 350px;">
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
                    <img src="{{ asset('assets/web') }}/img/media-incubator.png" alt="img" style="top: -30%;
                    left: -19%;
                    width: 350px;">
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
                    <img src="{{ asset('assets/web') }}/img/data-incubator.png" class="w-100" alt="img">
                    <h3>@lang('homepage.Data-Incubator')</h3>
                    <p>@lang('homepage.Data-Incubator-text')</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4 my-sm-3 my-md-1 my-lg-0">
                <div class="project-card">
                    <img src="{{ asset('assets/web') }}/img/training-incubator.png" alt="img" style="top: -30%;
                    left: -19%;
                    width: 350px;">
                    <h3>@lang('homepage.Training-Incubator')</h3>
                    <p>@lang('homepage.Training-Incubator-text')</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 my-4">
                <div class="project-card" style="margin-top: -23px;">
                    <img src="{{ asset('assets/web') }}/img/tec-incubator.png" alt="img">
                    <h3>@lang('homepage.Technical-Incubator')</h3>
                    <p>@lang('homepage.Technical-Incubator-text')</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="project-btn text-center">
                    <a href="{{url("servicepage")}}">
                        <button class="shadow">@lang('homepage.View-all')</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- projects./ -->

<!-- queries -->
<section class="query">
    <div class="query-row-1">
        <div class="container">
            <div class="row">
                <div class="query-header">
                    <h4>@lang('homepage.Need-any-Queries?')</h4>
                    <p>@lang('homepage.Need-any-Queries?-p') </p>
                </div>
                <div class="query-form">
                    <form action="{{route('submit.form')}}" method="post">
                        @csrf
                        <div class="inputs">
                            <input type="text" placeholder="@lang('homepage.Name')" name="name">
                            <input type="text" placeholder="@lang('homepage.Company-name')" name="company_name">
                        </div>
                        <div class="inputs">
                            <input type="text" placeholder="@lang('homepage.Email')" name="email">
                            <input type="text" placeholder="@lang('homepage.Mobile')" name="phone_number">
                        </div>
                        <div class="inputs">
                            <textarea name="message" id="" cols="30" rows="5" placeholder="@lang('homepage.Message')"></textarea>
                        </div>
                        <button type="submit">@lang('homepage.Send-Message')</button>
                   </form>
                </div>
            </div>

        </div>
    </div>
    <div class="row query-row-2">
        <div></div>
    </div>
</section>
<!-- queries./ -->


@endsection
