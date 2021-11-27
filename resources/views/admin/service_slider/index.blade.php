@extends('admin.layout.app')

@section('main')
<div class="row mt-5 ">
    <div class="col-10 mx-auto">
        <div class="card">
            @if (session()->has('success'))
              <div class="alert alert-success" role="alert">
                {{session()->get("success")}}
              </div>
            @endif
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
                        <th scope="col">Sub Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $idx=>$item)

                        <tr>
                            <td>{{$idx+1}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->sub_title}}</td>
                            <td>
                                <img src="{{url($item->image)}}" height="80" width="100" alt="img">
                            </td>
                            <td>
                                <a href="{{route('service_slider.edit',['id'=>$item->id])}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                <a href="{{route('service_slider.delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                  </table>



            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(ducument).ready(function(){
        setTimeout(function() {
            $('.alert-success').fadeOut('fast');
        }, 30000);
    })
</script>
@endpush
