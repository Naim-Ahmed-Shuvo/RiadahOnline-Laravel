{{-- @extends('web.layout.app')

@section('main')
@php
    $locale = app()->getLocale();
@endphp
  <!-- form -->
  <section class="service-main-form">
    <div class="container">
        <div class="row">
            <div class="col">
               <div class="div">

                <form action="{{url("servicepage")}}" method="post">
                    @csrf
                    <div>
                        <input type="text" name="search" placeholder="@lang('servicepage.Find-the-service-you-need')....">
                        <button>@lang('servicepage.Search')</button>
                    </div>
                </form>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- form./ -->

<!-- serivcemain -->
<section class="service-main mt-4">
   <div class="container">
       <div class="row">
           <div class="col-12 col-lg-4">
               <div class="service-menus">
                  @forelse ($categories as $item)

                  <a href="{{url('/servicepage')}}/{{$item->id}}"><p>{{ $locale=='ar'?$item->name_ar:$item->name}}</p></a>
                  @empty
                    {{ "no data" }}
                  @endforelse

               </div>

               <div class="div-img">
                <img src="{{asset('assets/web/{{asset('/assets/web/img')}}/Rectangle 60.png')}}" alt="img">
                <img src="{{asset('assets/web/{{asset('/assets/web/img')}}/image 5.png')}}" alt="img">
            </div>
           </div>

           <div class="col-12 col-lg-8 mt-sm-4">
               <div class="row">
                   @forelse ($services as $item)

                   <div class="col-12 col-md-6 col-lg-4 mb-5">
                       <div class="service-card ">
                           <img src="{{url($item->image)}}" alt="img" class="w-100">
                           <h3 style="<?php echo $locale=='ar'? 'text-align: right':'' ?>">{{$locale=='ar'?$item->title_ar:$item->title}}</h3>
                           <p style="<?php echo $locale=='ar'? 'text-align: right':'' ?>">{{$locale=='ar'?$item->description_ar:$item->description}}</a></p>
                       </div>
                   </div>
                   @empty
                     {{ "no data" }}
                   @endforelse
               </div>

           </div>
       </div>
   </div>
</section>
<!-- service main -->
@endsection --}}


@extends('web.layout.app')

@section('main')
<!-- service__main__hero -->
<section class="service__main__hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="hero-text">
                    <h3>Here is the Right Place to
                        Find Perfect Services</h3>
                        <form action="{{url("servicepage")}}" method="post">
                            @csrf
                        <div class="input-search">
                           <input type="text" name="search" placeholder="Find Services">
                           <button type="submit">Search</button>
                        </div>
                    </form>
                    <p class="popular__tags">Popular search: App Development;  Website Development; Graphics Design; Icon</p>
                </div>
            </div>
            <div class="col-6">
                <div class="hero-img">
                    <img src="{{asset('/assets/web/img')}}/banner-image_choice-01.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service__main__hero./ -->

<!-- service__redesign__slider -->
<section class="service__redesign__slider">
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <div class="popular__service">Populer Services</div>
            </div>
        </div>
        <div class="row slider__container">
            <div class="col-3">
                <a href="#" class="image__holder">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" class="w-100" alt="img">
                    <div class="img__overlay">
                        <h4>App Development</h4>
                        <h6>Make your own app</h6>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="image__holder">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" class="w-100" alt="img">
                    <div class="img__overlay">
                        <h4>App Development</h4>
                        <h6>Make your own app</h6>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="image__holder">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" class="w-100" alt="img">
                    <div class="img__overlay">
                        <h4>App Development</h4>
                        <h6>Make your own app</h6>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="image__holder">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" class="w-100" alt="img">
                    <div class="img__overlay">
                        <h4>App Development</h4>
                        <h6>Make your own app</h6>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="image__holder">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" class="w-100" alt="img">
                    <div class="img__overlay">
                        <h4>App Development</h4>
                        <h6>Make your own app</h6>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="image__holder">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" class="w-100" alt="img">
                    <div class="img__overlay">
                        <h4>App Development</h4>
                        <h6>Make your own app</h6>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="image__holder">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" class="w-100" alt="img">
                    <div class="img__overlay">
                        <h4>App Development</h4>
                        <h6>Make your own app</h6>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="#" class="image__holder">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" class="w-100" alt="img">
                    <div class="img__overlay">
                        <h4>App Development</h4>
                        <h6>Make your own app</h6>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>
<!-- slider./ -->
@php
    function getDotStr($str){
        return strlen($str)<100? $str: substr($str,0,100).'...';
    }
@endphp
<!-- service__redesign__main -->
<section class="service__redesign__main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <div class="category__links">
                    <a href="#">
                        <p>Search Category</p>
                    </a>
                    <form action="{{url('/servicepage')}}" method="post">
                        @csrf
                        <div class="category__search">
                            <input type="text" name="cat_search">
                            <button style="outline: none;border:none;background:transparent;" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                   </form>
                    @forelse ($categories as $item)

                        <a href="{{url('/servicepage')}}/{{$item->id}}">
                            <p>{{$item->name}}</p>
                            @php
                               echo $item->id== $cat_id? '<i class="fas fa-chevron-right"></i>':'';
                            @endphp
                        </a>
                    @empty
                        {{ "no category" }}
                    @endforelse

                </div>
            </div>
            <div class="col-12 col-sm-1 col-md-12 col-lg-9">
                <div class="row">

                    @forelse ($services as $item)

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 cards">
                            <a href="{{route('service.details',['id'=>$item->id])}}">
                                <img src="{{url($item->image)}}" class="w-100" height="212" alt="img">
                                <h4>{{$item->title}}</h4>
                                <p>{{getDotStr($item->description)}}</p>
                                <a  href="{{url('place-order/'.$item->id)}}" class="place__order__btn">Place Order</a>
                            </a>
                        </div>
                    @empty
                       {{ "no services are available in this category" }}
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</section>
<!-- service__redesign__main./ -->
@endsection
