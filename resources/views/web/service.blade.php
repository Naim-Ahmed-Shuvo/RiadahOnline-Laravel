@extends('web.layout.app')

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
                <img src="img/Rectangle 60.png" alt="img">
                <img src="img/image 5.png" alt="img">
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
@endsection
