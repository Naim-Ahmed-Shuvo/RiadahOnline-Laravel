@extends('admin.layout.app')

@section('main')
<div class="col-lg-7 mx-auto mt-4">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">

                <h4>Create Service Slider</h4>
                <a href="{{route('service_slider')}}" class="btn btn-sm btn-info">View All</a>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div class="card-body">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div style="color: red;">{{$error}}</div>
            @endforeach
        @endif
            <form  action="{{route('service_slider.edit')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <input type="file" name="image">

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
