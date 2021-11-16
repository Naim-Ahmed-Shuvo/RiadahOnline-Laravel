@extends('web.layout.app')

@php
    $locale = app()->getLocale();
@endphp
@section('main')
<section class="shoppage__main">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="contact__form shadow">
                    <h4 class="text-center contact__form__title">@lang('shop_page.Shop Page')</h4>
                    <form action="{{route('store.order')}}" method="POST" class="{{$locale=='ar'?'text-right':''}}">
                        @csrf
                         <div class="inputs">
                             <label for="name">@lang('shop_page.Name')</label>
                             <input type="text" name="name" placeholder="@lang('shop_page.Name').." required>
                         </div>
                         <div class="inputs">
                             <label for="email">@lang('shop_page.Email')</label>
                             <input type="email" name="email" placeholder="@lang('shop_page.Email').." required>
                         </div>
                         <div class="inputs">
                             <label for="contact">@lang('shop_page.Contact No.')</label>
                             <input type="text" name="contact" placeholder="@lang('shop_page.Contact No.').." required>
                         </div>
                         <div class="inputs">
                             <label for="budget">@lang('shop_page.Budget')</label>
                             <input type="text" name="budget" placeholder="@lang('shop_page.Budget').." required>
                         </div>
                         <div class="inputs">
                             <label for="description">@lang('shop_page.Description of Project')</label>
                             <textarea type="text" name="description" placeholder="@lang('shop_page.Description of Project').." rows="5" required></textarea>
                         </div>
                         <div class="inputs">
                             <button type="submit" name="submit">@lang('shop_page.Send Request')</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
