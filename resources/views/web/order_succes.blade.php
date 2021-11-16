@extends('web.layout.app')

@section('main')
<section class="shoppage__main">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="contact__form shadow" style="padding: 100px 20px; text-align:center;">

                    <h4 class="mb-2">@lang('success_page.Congratulations') !!</h4>
                    <p class="text-center">@lang('success_page.Order placed successfully')</p>
                    <a href="{{url('servicepage')}}" class="btn btn-large btn-info">@lang('success_page.Back to buy service')</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
