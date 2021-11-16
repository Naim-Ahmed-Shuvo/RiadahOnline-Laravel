@extends('web.layout.app')


@section('main')
{{-- @dd(Cart::total()) --}}
<section class="cart__main pb-5">
    <div class="container">

        <div class="row my-5">
            <div class="col-12">
                <div class="cart__title__shop">
                    <h4>Shop Page</h4>
                </div>
            </div>
        </div>
        @php
        $total=0;
        @endphp
        <div class="row">
            <div class="col-12">
                <div class="cart_table">
                    <table class="table table-responsive{-sm|-md}">
                        <thead>
                            <tr>
                                <th scope="col">@lang('cart.Service Name')</th>
                                <th scope="col">@lang('cart.Number of Orders')</th>
                                <th scope="col">@lang('cart.Duration')</th>
                                <th scope="col">@lang('cart.Project Price')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (session('cart'))
                            {{-- @dd(session('cart')) --}}

                            @forelse (session('cart') as $idx=> $cart)
                            <?php $total += intval($cart['price']) * $cart['quantity'] ?>

                            <tr>
                                <td scope="row">
                                    <div class="service__name__card d-flex">
                                        <div class="card__img">
                                            <img src="{{url($cart['photo'])}}" alt="img" height="131">
                                        </div>
                                        <div class="card__infotext">
                                            <h4>{{$cart['name']}}</h4>
                                            <p class="card__infotext__category">Category: <span>{{$cat_name??''}}</span>
                                            </p>
                                            <div class="service__type">
                                                <p>@lang('cart.Service Type')</p>
                                                <div class="buttons">
                                                    <a href="#">@lang('cart.Project')</a>
                                                    <a href="#" class="active">@lang('cart.Hourly')</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cart__inc_dec d-flex">
                                        <p>{{$cart['quantity']}}</p>
                                        <a class="inc_qty" data-id="{{$idx}}" style="cursor: pointer"><i
                                                class="fas fa-plus"></i></a>
                                        <a class="dec_qty" data-id="{{$idx}}" style="cursor: pointer"><i
                                                class="fas fa-minus"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <p
                                        style="margin-top: 30px !important; color: #555555; font-weight: 600;font-family: 'Poppins',sans-serif; text-align: center;">
                                        25 days</p>
                                </td>
                                <td>
                                    <p
                                        style="margin-top: 30px !important; color: #555555; font-weight: 600;font-family: 'Poppins',sans-serif; text-align: center;">
                                        {{$cart['price']}}</p>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            @php
            $locale = app()->getLocale();
            @endphp
            <div class="col-12 d-flex {{$locale=='ar'?'justify-content-start':'justify-content-end'}}">
                <div class="calucalte__total">
                    <p>@lang('cart.Sub- Total') <span class="price1"> = ${{$total}}</span></p>
                    <p>@lang('cart.VAT') <span class="price2"> = $5</span></p>
                    <hr class="total__devider__line">
                    <p class="mb-5">@lang('cart.Total') <span class="price3"> =${{$total+5}}</span></p>


                    @if ($locale=='ar')
                    <div class="d-flex">
                        <a href="{{route('home')}}" style="">@lang('cart.Back to Home')</a>
                        <a href="{{route('shop.page')}}" class="mr-3"> @lang('cart.Continue') >> </a>
                    </div>
                    @else
                    <a href="{{route('home')}}" style="">@lang('cart.Back to Home')</a>
                    <a href="{{route('shop.page')}}"> @lang('cart.Continue') >></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script>
    $(document).ready(function(){

        //
        $(".inc_qty").click(function(){
            // alert($(this).data('id'));
            let id = $(this).data('id');
            $.ajax({
                url:`{{url('increase_qty/${id}')}}`,
                method:'post',
                success:function(res){
                    location.reload()
                }

            })
        })

        //
        $(".dec_qty").click(function(){
            // alert($(this).data('id'));
            let id = $(this).data('id');
            $.ajax({
                url:`{{url('decrease_qty/${id}')}}`,
                method:'post',
                success:function(res){
                    location.reload()
                }

            })
        })
    })
</script>
@endpush
