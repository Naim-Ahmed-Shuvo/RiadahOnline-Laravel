@extends('web.layout.app')


 @section('main')
 {{-- @dd(Cart::total()) --}}
 <section class="cart__main pb-5">
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <div class="cart__breadcumb">
                    <p>Home > consulting services > Business Colsulting for growing</p>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12">
                <div class="cart__title__shop">
                    <h4>Shop Page</h4>
                </div>
            </div>
        </div>
        @php
            echo Cart::content();
        @endphp
        <div class="row">
            <div class="col-12">
                <div class="cart_table">
                    <table class="table table-responsive{-sm|-md}">
                        <thead>
                            <tr>
                                <th scope="col">Service Name</th>
                                <th scope="col">Number of Order</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Project Price</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse (Cart::content() as $cart)

                            <tr>
                              <td scope="row">
                                  <div class="service__name__card d-flex">
                                      <div class="card__img">
                                          <img src="{{asset('/assets/web/img')}}/Rectangle 27.png" alt="img" height="131">
                                      </div>
                                     <div class="card__infotext">
                                        <h4>{{$cart->name}}</h4>
                                         <p class="card__infotext__category">Category: <span>{{$cat_name}}</span></p>
                                         <div class="service__type">
                                             <p>Service type:</p>
                                             <div class="buttons">
                                                 <a href="#">Project</a>
                                                 <a href="#" class="active">Hourly</a>
                                             </div>
                                         </div>
                                     </div>
                                  </div>
                              </td>
                              <td>
                                  <div class="cart__inc_dec d-flex">
                                      <p>{{$cart->qty}}</p>
                                      <a href="{{url("increase_qty/".$cart->rowId)}}"><i class="fas fa-plus"></i></a>
                                      <a href="{{url("decrease_qty/".$cart->rowId)}}"><i class="fas fa-minus"></i></a>
                                  </div>
                              </td>
                              <td>
                                <p style="margin-top: 30px !important; color: #555555; font-weight: 600;font-family: 'Poppins',sans-serif; text-align: center;">25 days</p>
                              </td>
                              <td>
                                  <p style="margin-top: 30px !important; color: #555555; font-weight: 600;font-family: 'Poppins',sans-serif; text-align: center;">${{Cart::subtotal()}}</p>
                              </td>
                            </tr>
                            @empty

                            @endforelse
                          </tbody>
                    </table>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <div class="calucalte__total">
                    <p>Sub-Total  <span class="price1"> = ${{Cart::subtotal()}}</span></p>
                    <p>VAT <span class="price2"> =$ {{Cart::tax()}}</span></p>
                    <hr class="total__devider__line">
                    <p class="mb-5">Total <span class="price3"> =$ {{Cart::total()}}</span></p>

                    <a href="#">Back to Home</a>
                    <a href="#">Continue >></a>
                </div>
            </div>
        </div>
    </div>
</section>
 @endsection
