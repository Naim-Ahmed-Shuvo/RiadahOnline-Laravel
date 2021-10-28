@php
$locale = app()->getLocale();
@endphp


<!DOCTYPE html>
@if ($locale == 'ar')
<html lang="ar" dir="rtl">
@else
<html lang="en">
@endif

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title ?? '' }} Riadah Online</title>

    @include('web.inc.styles')

</head>

<body>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('web.inc.header')
    <!-- headermain -->
@include('web.inc.header-main')
<!-- headermain./ -->

    @yield('main')

    <!-- footer-top -->
@include('web.inc.footer-top')
<!-- footer-top./ -->

    @include('web.inc.footer')

    @include('web.inc.scripts')

    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            setTimeout(function(){
                $(".alert-success").fadeOut('slow');
            },4000)
        })
    </script>
</body>

</html>
