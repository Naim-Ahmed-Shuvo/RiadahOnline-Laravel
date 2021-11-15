@extends('admin.layout.app')

@section('main')
<div class="col-lg-12 mx-auto mt-4">
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
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title"  class="form-control"  autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="title_ar"  class="form-label">Title Arabic</label>
                            <input type="text" name="title_ar"  class="form-control"  autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="cat_id" class="form-label">Category</label>
                            <select class="form-select" id="example-select" name="cat_id" required>
                                <option value="0"> ---Select---- </option>
                                @forelse ($categories as $item => $id)
                                  <option value="{{$id}}">{{$item}} </option>
                                @empty
                                    {{ 'no data' }}
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price"  class="form-control"  autocomplete="off">
                        </div>
                    </div>

                    <div class="col-8 mt-3">
                        <div class="mb-3">
                            <label for="price" class="form-label">Vendor</label>
                            <hr>
                            <div class="row">
                                <div class="col-6 my-2">
                                    <label for="v_name" class="form-label">Vendor Name</label>
                                    <input type="text" name="v_name" class="form-control">
                                </div>
                                <div class="col-6 my-2">
                                    <label for="v_c_name" class="form-label">Vendor Company Name</label>
                                    <input type="text" name="v_c_name" class="form-control">
                                </div>
                                <div class="col-6 my-2">
                                    <label for="v_email" class="form-label">Vendor Email</label>
                                    <input type="email" name="v_email" class="form-control">
                                </div>
                                <div class="col-6 my-2">
                                    <label for="v_phone" class="form-label">Vendor Phone</label>
                                    <input type="text" name="v_phone" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6"> <div class="mb-3">
                        <label for="description" class="form-label">Deascription</label>
                        <textarea class="form-control" name="description" id="example-textarea" rows="5" required></textarea>
                    </div></div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="description_ar" class="form-label">Deascription Arabic</label>
                            <textarea class="form-control" name="description_ar" id="example-textarea" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="col-6"> <div class="mb-3">
                        <label for="information" class="form-label">Information</label>
                        <textarea class="form-control" name="information" id="example-textarea" rows="5"></textarea>
                    </div></div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="information_ar" class="form-label">Information Arabic</label>
                            <textarea class="form-control" name="information_ar" id="example-textarea" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="img" class="form-label">Image</label>
                            <input type="file" name="img" id="example-fileinput" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" name="tags" required id="tokenfield" class="form-control">
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
        $('#tokenfield').tokenfield({
            autocomplete: {
                source: ['Website','Design','App','Web Developemnt','Mobile Aplication','Web Design','Web Service','Programming','Service'],
                delay: 100
            },
            showAutocompleteOnFocus: true,
            required:false
            })
     })
 </script>
@endpush
