{{-- @extends('web.layout.app')

@section('main')
@php
    $locale = app()->getLocale()
@endphp
<!-- form -->
<section class="details-form">
    <div class="container">
        <div class="row">
            <div class="col">
               <div class="div">


                    <div>
                        <input type="text" placeholder="<?php echo $locale=='ar'?'البحث عن':'Find serice...'?>" style="padding-right: <?php echo $locale=='ar'? '30px':''?>">
                        <button style="margin-left: <?php echo $locale=='ar'? '8px':''?>">{{$locale=="ar"?'بحث':'Search'}}</button>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- form./ -->


<!-- main section 1 -->
<section class="main-sec-1">
   <div class="container">
    <div class="row">
        <div class="col-12 col-lg-5">
            <div class="sec-img">
                <img src="{{url($service->image??'')}}" alt="">
            </div>
        </div>
        <div class="col-12 col-lg-7">
            <div class="sec-main-text-content">
                <h5 style="text-align: <?php echo $locale=='ar'?'right':'' ?>">{{$locale=="ar"?$service->title_ar:$service->title}}</h5>
                <p>{{$locale=="ar"?$service->description_ar:$service->description}}</p>
                <p class="category"><b>Category</b>: {{$locale == "ar"? $category->name_ar??'':$category->name??''}}</p>
                <div class="buttons">
                    <button>Visit Website</button>
                    <button>Request to Services</button>
                </div>
            </div>
        </div>
    </div>
   </div>
</section>
<!-- section1 -->

<!-- main2 -->
<section class="main2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabs">
                    <span class="active">Vendor Info</span>
                    <span>Store Policy</span>
                    <span>Inquiries</span>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="content">
                    <p><b>Vendor Name</b>: Mohammed Hossain</p>
                    <p><b>Store Name</b>: Al-sari Group</p>
                    <p><b>Address</b>: Riadah, Saudi Arab</p>
                    <p><b>Reviews</b>: 35</p>
                    <p><b>Categories</b>: Property Manegement</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main2./ -->

 <!-- serivcemain -->
<section class="service-main mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="service-menus">
                    @forelse ($categories as $item)
                    <a href="{{url('service-details')}}/{{$id}}/{{$item->id}}">

                        <p class="<?php echo $item->id==$cat_id? 'active':'' ?>">
                            {{$locale=="ar"?$item->name_ar:$item->name}}
                            @php
                             echo  $item->id==$cat_id?   '<i class="fas fa-angle-right"></i>':''
                            @endphp
                        </p>
                    </a>
                    @empty
                      {{ "no data" }}
                    @endforelse
                </div>

                <div class="div-img">
                <img src="{{asset('assets/web/{{asset('/assets/web/img')}}/Rectangle 60.png')}}" alt="img">
                <img src="{{asset('assets/web/{{asset('/assets/web/img')}}/image 5.png')}}" alt="img">
            </div>
            </div>
            <div class="col-12 col-lg-8 my-md-4">
                <div class="row">
                    @forelse ($services as $item)

                    <div class="col-12 col-lg-4 mb-3 col-md-6 mb-4">
                        <a href="{{url('service-details')}}/{{$item->id}}" style="text-decoration: none;">
                            <div class="service-card ">
                                <img src="{{url($item->image)}}" class="w-100" alt="img">
                                <h3 style="text-align: <?php echo $locale=='ar'?'right':'' ?>">{{$locale=='ar'?$item->title_ar:$item->title}}</h3>
                                <p style="color: #333333">{{$locale=='ar'?$item->description_ar:$item->description}}</p>
                            </div>
                        </a>
                    </div>
                    @empty
                      {{'no service found in this category'}}
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
<!-- details__redesign__hero -->
<section class="details__redesign__hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-2 order-sm-2 order-md-2 order-lg-1">
                <div class="hero-text">
                    <h3 class="">Here is the Right Place to
                        Find Perfect Services</h3>
                    <div class="input-search">
                        <input type="text" placeholder="Find Services">
                         <button>Search</button>
                    </div>
                    <p class="popular__tags">Popular search: App Development;  Website Development; Graphics Design; Icon</p>
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
                        <img src="{{asset('/assets/web/img')}}/Rectangle 27.png" alt="img">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                  <div class="card__text p-4">
                      <h4 class="card__text__title">Business Colsulting for
                        growing</h4>
                       <div class="card__review d-flex my-3">
                           <p class="mr-2">Customer Reviews: </p>
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
                       <p class="card__text__details__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                       <div class="reated__tags">
                           <p>Related Tags:</p>
                           <span>Website</span>
                           <span>Website</span>
                           <span>Website</span>
                           <span>Website</span>
                           <span>Website</span>
                           <span>Website</span>
                           <span>Website</span>
                      </div>
                      <div class="buttons">
                          <a href="#">Place Order</a>
                          <a href="#" class="ml-4">Contact us</a>
                      </div>
                      <div class="share">
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
                    <a href="#" class="active">
                        <span>Description</span>
                    </a>
                    <a href="#">
                        <span>Information</span>
                    </a>
                    <a href="#">
                        <span>Vendor</span>
                    </a>
                    <a href="#">
                        <span>Reviews</span>
                    </a>
                </div>
                <div class="tabs__details shadow">
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                           <br><br>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details__redesign__tabs./ -->

<!-- details__redesign__slider -->
<section class="details__redesign__slider">
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <div class="popular__service">Populer Services</div>
            </div>
        </div>
        <div class="row details__redesign__slider__container">
            <div class="col-3">
                <a href="#">
                    <img src="{{asset('/assets/web/img')}}/pexels-canva-studio-3194518.jpg" alt="img">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="{{asset('/assets/web/img')}}/pexels-designecologist-1779487.jpg" alt="img">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-39284.jpg" alt="img">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" alt="img">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" alt="img">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" alt="img">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" alt="img">
                </a>
            </div>
            <div class="col-3">
                <a href="#">
                    <img src="{{asset('/assets/web/img')}}/pexels-pixabay-461064.jpg" alt="img">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- details__redesign__slider./ -->
@endsection
