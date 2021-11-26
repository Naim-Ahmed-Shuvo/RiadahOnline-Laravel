@extends('admin.layout.app')

@section('main')
<div class="row mt-5 ">
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Service Sliders</h4>
                <a href="{{route('service_slider.create')}}" class="btn btn-sm btn-info">Add +</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Title</th>
                        <th scope="col">Title Ar</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       <tr>
                           <td></td>
                       </tr>
                    </tbody>
                  </table>



            </div>
        </div>
    </div>
</div>
@endsection
