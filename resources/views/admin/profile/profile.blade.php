@extends('admin.layout.app')

@section('main')
<div class="row my-5">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                {{-- <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Block</a>
                    </div>
                </div> --}}
                <div class="d-flex align-items-start">
                    <img src="{{url(Auth::user()->img)}}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                    <div class="w-100 ms-3">
                        <h4 class="my-0 text-capitalize">{{$user->name??'nai'}}</h4>
                        <p class="text-muted mb-2 font-13 text-capitalize"> <span class="ms-2">{{$user->role??'nai'}}</span></p>
                    </div>
                </div>

                <div class="mt-3">
                    <h4 class="font-13 text-uppercase">About Me :</h4>

                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{$user->name??'nai'}}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">{{$user->mobile_number??'nai'}}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{$user->email??'nai'}}</span></p>

                </div>

                {{-- <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item text-center border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item text-center border-danger text-danger"><i class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item text-center border-info text-info"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item text-center border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                    </li>
                </ul> --}}
            </div>
        </div> <!-- end card -->

    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-3 header-title">Update Profile</h4>
                @if (Session::has('message'))

                    <div class="alert alert-success bg-success text-white border-0" role="alert">
                         <strong>success</strong> {{Session::get('message')}}
                    </div>
                @endif

                <form class="form-horizontal" action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$user->id}}" name="user_id">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-4 col-xl-3 col-form-label">Name</label>
                        <div class="col-8 col-xl-9">
                            <input type="text" name="name" value="{{$user->name??''}}" class="form-control" placeholder="Name..."  autocomplete="off">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Email</label>
                        <div class="col-8 col-xl-9">
                            <input type="email" name="email" value="{{$user->email??''}}" class="form-control"  placeholder="Email....">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Phone</label>
                        <div class="col-8 col-xl-9">
                            <input type="text" name="phone" value="{{$user->mobile_number??''}}" class="form-control"  placeholder="Phone....">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Company Name</label>
                        <div class="col-8 col-xl-9">
                            <input type="text" name="company_name" value="{{$user->company_name??''}}" class="form-control"  placeholder="company name....">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword5" class="col-4 col-xl-3 col-form-label">Role</label>
                        <div class="col-8 col-xl-9">
                            <select  class="form-control"  name="role" value="{{$user->role??''}}">
                                <option selected>--Select--</option>
                                <option value="admin" {{$user->role=='admin'? 'selected':''}}>Admin</option>
                                <option value="user" {{$user->role=='user'? 'selected':''}}>User</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="example-fileinput" class="form-label">Image</label>
                        <input type="file" id="example-fileinput" name="img" class="form-control">
                    </div>

                    <div class="justify-content-end row">
                        <div class="col-8 col-xl-9">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </form>

            </div>  <!-- end card-body -->
        </div>
    </div>
</div>
@endsection
