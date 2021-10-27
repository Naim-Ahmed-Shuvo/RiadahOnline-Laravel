@extends('admin.layout.app')

@section('main')
{{-- {{$service}} --}}
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
            <form _lpchecked="1" action="{{url('service/update/'.$service->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{$service->title}}" name="title"  class="form-control"  autocomplete="off">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="title_ar"  class="form-label">Title Arabic</label>
                            <input type="text" name="title_ar" value="{{$service->title_ar}}"  class="form-control"  autocomplete="off">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="cat_id" class="form-label">Category</label>
                            <select class="form-select" id="example-select"  name="cat_id">
                                <option selected> ---Select---- </option>
                                @forelse ($categories as $item)
                                  <option value="{{$item->id}}" {{$item->id==$service->cat_id?"selected":''}}>{{$item->name}} </option>
                                @empty
                                    {{ 'no data' }}
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" value="{{$service->price}}"  class="form-control"  autocomplete="off">
                        </div>
                    </div>

                    <div class="col-8 mt-3">
                        <div class="mb-3">
                            <label for="price" class="form-label">Vendor</label>
                            <hr>
                            <input type="hidden" name="vendor_id" value="{{$vendor->id}}">
                            <div class="row">
                                <div class="col-6 my-2">
                                    <label for="v_name" class="form-label">Vendor Name</label>
                                    <input type="text" value="{{$vendor->name}}" name="v_name" class="form-control">
                                </div>
                                <div class="col-6 my-2">
                                    <label for="v_c_name" class="form-label">Vendor Company Name</label>
                                    <input type="text" name="v_c_name" value="{{$vendor->company_name}}" class="form-control">
                                </div>
                                <div class="col-6 my-2">
                                    <label for="v_email" class="form-label">Vendor Email</label>
                                    <input type="email" name="v_email" value="{{$vendor->email}}" class="form-control">
                                </div>
                                <div class="col-6 my-2">
                                    <label for="v_phone" class="form-label">Vendor Phone</label>
                                    <input type="text" name="v_phone" value="{{$vendor->phone}}" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6"> <div class="mb-3">
                        <label for="description" class="form-label">Deascription</label>
                        <textarea class="form-control" name="description"  id="example-textarea" rows="5">
                            {{$service->description}}
                        </textarea>
                    </div></div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="description_ar" class="form-label">Deascription Arabic</label>
                            <textarea class="form-control" name="description_ar"  id="example-textarea" rows="5">
                                {{$service->description_ar}}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-6"> <div class="mb-3">
                        <label for="information" class="form-label">Information</label>
                        <textarea class="form-control" name="information"  id="example-textarea" rows="5">{{$service->information}}</textarea>
                    </div></div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="information_ar" class="form-label">Information Arabic</label>
                            <textarea class="form-control" name="information_ar"  id="example-textarea" rows="5">
                                {{$service->information_ar}}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="img" class="form-label">Image</label>
                            <input type="file" name="img"  id="service_image" class="form-control">

                            @if ($service->image!==null)

                            <div class="img__holder">
                                <img src="{{url($service->image)}}" height="100" width="150px" alt="img">
                                {{-- <span id="close">x</span> --}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" name="tags" required id="tokenfield" value="{{$service->tags}}"   class="form-control">
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
            showAutocompleteOnFocus: true
        })

        //show image
        $('#service_image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                // console.log(e.target.result);
                $('.img__holder img').attr('src', e.target.result)
            }
            reader.readAsDataURL(this.files[0]);
        });
     })
 </script>
@endpush
