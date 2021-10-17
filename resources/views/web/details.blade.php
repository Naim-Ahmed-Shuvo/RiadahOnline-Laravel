@extends('web.layout.app')

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
                <p>Contribute to the rehabilitation and development of the capabilities of workers in the real estate sector, the orientation of future jobs in the real estate sector, the rehabilitation, training and development of human capital, and as a liaison to build bridges between members of the training incubator platform, rehabilitation and training centers, activities related to human capital and marketing on behalf of others, and a specialized entity in the field of building partnerships between public and private sector</p>
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
                <img src="img/Rectangle 60.png" alt="img">
                <img src="img/image 5.png" alt="img">
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

                    @endforelse

                </div>

            </div>
        </div>
    </div>
</section>
<!-- service main -->
@endsection
