

@extends('web.layout.app')
@php
    $locale = app()->getLocale();
@endphp
@push('css')
<style>
    [dir="rtl"] .slick-prev {
    right: 102%;
    left: auto;
}
</style>
@endpush
@section('main')

<!-- details__redesign__hero -->
<section class="details__redesign__hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2 order-sm-2 order-md-2 order-lg-1">
                <div class="hero-text">
                    <h3 style="{{$locale == 'ar'?'text-align: right':''}}">{{$locale == 'ar'?' هذا هو المكان المناسب للعثور ما تحتاج إليه من خدمات بمختلف المجالات والانشطة':'Here is the Right Place to
                        Find Perfect Services'}}</h3>
                        <form action="{{url("servicepage")}}" method="post">
                            @csrf
                        <div class="input-search">
                           <input type="text" name="search" placeholder="{{$locale=='ar'?'البحث عن خدمات':'Find Services'}}">
                           <button type="submit" style="{{$locale=='ar'?'margin-left: 10px;
                           padding: 10px 41px;':''}}">{{$locale == 'ar'?'  بحث':'Search'}}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1 order-sm-1 order-md-1 order-lg-2">
                <div class="hero-img">
                    <img src="{{asset('/assets/web/img')}}/banner-image_choice-01.png" class="w-100" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details__redesign__hero./ -->

<!-- details__redesign__imgcard -->
<section class="details__redesign__imgcard">
    <div class="container">
        <div class="card">

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                    <div class="card__image">
                        <img src="{{url($service->image)}}" alt="img">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                  <div class="card__text p-4">
                      <h4 class="card__text__title " style="{{$locale == 'ar'?'text-align: right':''}}">{{$locale=='ar'? $service->title_ar: $service->title}}</h4>
                       <div class="card__review d-flex my-3" style="{{$locale == 'ar'?'text-align: right':''}}">
                           <p class="mr-2">@lang('details.Contact Us') </p>
                           <div class="stars mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                           </div>
                           <div class="ratings">
                               (120/5)
                           </div>
                       </div>
                       <p class="card__text__details__text">{{$locale=='ar'? $service->description_ar: $service->description}}</p>
                       @php
                           function getTagsArr($tags){
                               $tags_arr = explode(',',$tags);
                               return $tags_arr;
                           }
                       @endphp
                       <div class="reated__tags">
                           <p>@lang('details.Related Tags')</p>
                           @forelse (getTagsArr($service->tags) as $item)

                           <span>{{$item}}</span>
                           @empty
                             {{ "no tags" }}
                           @endforelse

                      </div>
                      <div class="buttons">
                          <a href="{{url("place-order/".$service->id)}}">@lang('details.Place Order')</a>
                          <a href="{{route("contact")}}" class="ml-4 {{$locale=='ar'?'mr-3':''}}">@lang('details.Contact Us')</a>
                      </div>
                      <div class="share {{$locale=='ar'?'text-right':' '}}" >
                          <span>Share:</span>
                          <span class="share__icons">
                              <a href=""><i class="fab fa-facebook-f"></i></a>
                              <a href=""><i class="fab fa-twitter"></i></a>
                              <a href=""><i class="fab fa-youtube"></i></a>
                              <a href=""><i class="fab fa-linkedin-in"></i></a>
                              <a href=""><i class="fab fa-pinterest-p"></i></a>
                          </span>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details__redesign__imgcard./ -->

<!-- details__redesign__tabs -->
<section class="details__redesign__tabs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tabs">
                        <a style=" cursor :pointer;" class="active_tab tabs">
                            <span id="tab" data-id="{{$service->id}}" data-text="Description">@lang('details.Description')</span>
                        </a>
                        <a style=" cursor :pointer;" class=" tabs">
                            <span id="tab" data-id="{{$service->id}}" data-text="Information">@lang('details.Information')</span>
                        </a>
                        <a style=" cursor :pointer;" class=" tabs">
                            <span id="tab" data-id="{{$service->id}}" data-text="Vendor">@lang('details.Vendor')</span>
                        </a>
                        <a style=" cursor :pointer;" class=" tabs">
                            <span id="tab" data-id="{{$service->id}}" data-text="Reviews">@lang('details.Reviews')</span>
                        </a>

                </div>
                <div class="tabs__details shadow">
                    <p id="tab_data">
                        {{$service->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details__redesign__tabs./ -->


<!-- service__redesign__slider -->
<section class="service__redesign__slider">
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <div class="popular__service" style="{{$locale=='ar'?'text-align: right':''}}">{{$locale=='ar'?'الخدمات المتاحة':'Available Services'}}</div>
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
@endsection

@push('js')

 <script>
     $(document).ready(function(){
        //  console.log('hello')
         $(document).on('click','#tab',function(){


             let tab = $(this).data('text').toLowerCase();
             console.log(tab);
             let service_id = $(this).data('id');


            //making active tab
             let tabs = document.getElementsByClassName('tabs');
             console.log( tabs[0]);
             for(let i=0;i<tabs.length;i++){
                tabs[i].innerText.toLowerCase() == tab ? tabs[i].classList.add('active') : tabs[i].classList.remove('active');
             }

             let local = "<?php echo app()->getLocale();?>";
             console.log("local: ",local);
             $.ajax({
                 url: `{{url('get_tabdata/${tab}/${service_id}')}}`,
                 method:'get',
                 success:function(res){
                     console.log(res.tab);
                     console.log(tab)
                     if(typeof res.tab == 'object'  && res.tab != null){
                         let {description,description_ar,information,information_ar,name,email,phone} = res.tab;

                         switch (tab) {
                             case 'description':
                                    $('#tab_data').html(`

                                        <p>Description: ${local=='ar'?description_ar:description}</p> <br>

                                    `)
                                 return;
                             case 'information':
                                    $('#tab_data').html(`

                                        <p>Information: ${local=='ar'?information_ar:information}</p> <br>

                                    `)
                                 return;
                             case 'vendor':
                                    $('#tab_data').html(`
                                        <p>verndor name: ${local=='ar'?name:name}</p> <br>
                                        <p>verndor email: ${local=='ar'?email:email}</p> <br>
                                        <p>verndor phone: ${local=='ar'?phone:phone}</p> <br>

                                    `)
                                 return;


                             default:
                                 return;
                         }
                     } else if(res.tab==null){
                       $('#tab_data').text("no data")
                     }
                      else{

                       $('#tab_data').text(res.tab)
                     }
                 }
             })
         })
     })
 </script>
@endpush



