@extends('admin.layout.app')

@section('main')
<div class="col-lg-6 mx-auto mt-4">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">

                <h4>Create Service</h4>
                <a href="{{url('service')}}" class="btn btn-sm btn-info">View All</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div class="card-body">
            <form _lpchecked="1" action="{{url('service')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Title</label>
                    <input type="text" name="title" id="simpleinput" class="form-control" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="simpleinput"  class="form-label">Title Arabic</label>
                    <input type="text" name="title_ar" id="simpleinput" class="form-control" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Category</label>
                    <select class="form-select" id="example-select" name="cat_id">
                        <option selected> ---Select---- </option>
                        @forelse ($categories as $item => $id)
                          <option value="{{$id}}">{{$item}} </option>
                        @empty
                            {{ 'no data' }}
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Image</label>
                    <input type="file" name="img" id="example-fileinput" class="form-control">
                </div>




                <div class="mb-3">
                    <label for="example-textarea" class="form-label">Deascription</label>
                    <textarea class="form-control" name="description" id="example-textarea" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="example-textarea" class="form-label">Deascription Arabic</label>
                    <textarea class="form-control" name="description_ar" id="example-textarea" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
