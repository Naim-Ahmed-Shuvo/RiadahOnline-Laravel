<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/codefox/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 17:02:31 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Register & Signup | Codefox - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/assets/admin')}}/images/favicon.ico">

		<!-- App css -->
		<link href="{{asset('public/assets/admin')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="{{asset('public/assets/admin')}}/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="{{asset('public/assets/admin')}}/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="{{asset('public/assets/admin')}}/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="{{asset('public/assets/admin')}}/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg">

        @yield('content')
        <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script> &copy; <a href="{{url('/')}}" class="link-dark text-decoration-underline"></a>Riadah Online</a>
        </footer>

         <!-- Vendor js -->
         <script src="{{asset('public/assets/admin')}}/js/vendor.min.js"></script>

         <!-- App js -->
         <script src="{{asset('public/assets/admin')}}/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/codefox/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 17:02:31 GMT -->
</html>

