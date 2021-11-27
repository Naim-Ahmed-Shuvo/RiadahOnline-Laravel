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
            <form  action="{{route('service_slider.update',['id'=>$item->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title"  class="form-control" value="{{$item->title}}"  autocomplete="off" >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title_ar"  class="form-label">Title Arabic</label>
                            <input type="text" name="title_ar"  class="form-control" value="{{$item->title_ar}}"  autocomplete="off" >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sub_title" class="form-label">Sub Title</label>
                            <input type="text" name="sub_title"  class="form-control" value="{{$item->sub_title}}"  autocomplete="off" >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sub_title_ar"  class="form-label">SUb Title Arabic</label>
                            <input type="text" name="sub_title_ar"  class="form-control" value="{{$item->sub_title_ar}}"  autocomplete="off" >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="img"  class="form-label">Image</label>
                            <input type="file" name="img"  class="form-control service_slider_img"  >
                            @if ($item->image)
                                <img id="show_here" src="{{url($item->image)}}" height="100" width="100" class="mt-4">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection

@push('js')
<script>
    $(document).ready(function(){

         //show image
         $('.service_slider_img').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                // console.log(e.target.result);
                $('#show_here').attr('src', e.target.result)
            }
            reader.readAsDataURL(this.files[0]);
        });
    })
</script>
@endpush



