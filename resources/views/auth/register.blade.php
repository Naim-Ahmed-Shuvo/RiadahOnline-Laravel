{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- User Type -->
            <div class="mt-4">
                <x-label for="user_type" :value="__('User Type')" />

                <select name="user_type" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200">
                    <option  selected>Select</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('web.layout.app')

@section('main')

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-8">
                <div class="card shadow-none">

                    <div class="card-body p-3">

                        <div class="text-center w-75 m-auto">
                            <div class="auth-logo">
                                <a href="index-2.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/web')}}/img/header-logo.png" alt="" height="70">
                                    </span>
                                </a>

                                {{-- <a href="index-2.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="22">
                                    </span>
                                </a> --}}
                            </div>
                            <p class="text-muted mb-4 mt-3">Don't have an account? Create your account, it takes less than a minute</p>
                        </div>

                        <form method="POST" action="{{ url('/register') }}">
                            @csrf
                           <div class="row">
                               <div class="col-6">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <input class="form-control" type="text" id="fullname" placeholder="Enter your name" name="name" required>
                                    </div>
                               </div>
                               <div class="col-6">
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" required placeholder="Enter your email">
                                    </div>
                               </div>

                               <div class="col-6">
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Role</label>
                                        <select name="role" class="w-100 form-control rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200">
                                            <option  selected>Select</option>
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                               </div>
                           </div>


                           <div class="mb-3">
                                <label for="password" class="form-label">Mobile Number</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="phone" placeholder="phone...." class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye show-pass"><i class="fas fa-eye"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label"> Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password_reset" name="password" class="form-control" name="password_confirmation" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye show-pass"><i class="fas fa-eye"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signup" name="trems_condition">
                                    <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <div class="text-center d-grid">
                                <button class="btn btn-success" type="submit" style="background: #6B438A; outline: none; border: 1px solid #6B438A;"> Sign Up </button>
                            </div>

                        </form>

                        {{-- <div class="text-center">
                            <h5 class="mt-3 text-muted">Sign up using</h5>
                            <ul class="social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                </li>
                            </ul>
                        </div> --}}

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Already have account?  <a href="{{route('login')}}" class="link-dark text-decoration-underline ms-1"><b>Sign In</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
@endsection

@push('js')
<script>
    $(document).ready(function(){
        console.log("register")
        let inputPass = $('#password');
        inputPass.change(function(){
            console.log("changing")
        })

        let inputPassReset = $('#password_reset');

             $('.show-pass').click(function(){
                 console.log("hello")
                 $('#password').attr('type')=='password'? $('#password').attr('type','text'): $('#password').attr('type','password');
                 $('#password_reset').attr('type')=='password'? $('#password_reset').attr('type','text'): $('#password_reset').attr('type','password');
             });

    })
</script>
@endpush


