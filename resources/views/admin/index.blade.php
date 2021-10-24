@extends('admin.layout.app')

@section('main')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            {{-- <div>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Codefox</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div> --}}
        </div>
    </div>
</div>
<!-- end page title -->




<!-- end row -->

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="w-100">
                        <h5 class="text-muted mt-0">Active Users</h5>
                        <h2 class="mb-0">{{$users}}</h2>
                    </div>
                    <i class="mdi mdi-account text-light display-3 float-end"></i>
                </div>

                <div>
                    <a href="{{url('profile-view')}}" class="text-primary float-end"><i class="mdi mdi-arrow-right font-20"></i></a>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="w-100">
                        <h5 class="text-muted mt-0">Active Services</h5>
                        <h2 class="mb-0">{{$services}}</h2>
                    </div>
                    <i class="mdi mdi-office-building text-light display-3 float-end"></i>
                </div>

                <div>
                    <a href="{{url('service')}}" class="text-primary float-end"><i class="mdi mdi-arrow-right font-20"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="w-100">
                        <h5 class="text-muted mt-0">Active Categories</h5>
                        <h2 class="mb-0">{{$categories}}</h2>
                    </div>
                    <i class="mdi mdi-database-marker text-light display-3 float-end"></i>
                </div>

                <div>
                    <a href="{{url("category")}}" class="text-primary float-end"><i class="mdi mdi-arrow-right font-20"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">


                <h4 class="header-title mb-3">Recent Contacts</h4>

                <div class="table-responsive">
                    <table class="table table-hover table-centered mb-0">
                        <thead>
                            <tr>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company Name</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($contacts as $item)

                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone_number}}</td>
                                <td><span class="badge text-success border border-success">{{$item->company_name??''}}</span></td>
                                <td>{{$item->message}}</td>
                            </tr>
                            @empty
                              {{ "no contacts" }}
                            @endforelse

                        </tbody>
                    </table>
                </div> <!-- end table responsive-->
            </div>
        </div>
    </div>
</div>
@endsection
