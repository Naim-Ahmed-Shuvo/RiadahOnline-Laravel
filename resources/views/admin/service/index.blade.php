@extends('admin.layout.app')

@section('main')
<div class="row mt-5 ">
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Services</h4>
                <a href="{{url('service/create')}}" class="btn btn-sm btn-info">Add +</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Title Ar</th>
                        <th scope="col">Description</th>
                        <th scope="col">Description Ar</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            function makeDotAtLast($str){
                                $dotStr = substr($str,0,40).'...';
                                return $dotStr;
                            }
                        @endphp
                        @forelse ($services as $index=>$item)
                        <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>
                                <img src="{{asset($item->image)}}" alt="img" height="100" width="130">
                            </td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->title_ar}}</td>
                            <td>{{makeDotAtLast($item->description)}}</td>
                            <td>{{makeDotAtLast($item->description_ar)}}</td>
                            <td>
                                <a class="btn btn-sm btn-info editservice" data-id="{{$item->id}}"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger delservice" data-id="{{$item->id}}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @empty
                           {{ 'no data' }}
                        @endforelse

                    </tbody>
                  </table>

                 <!-- Modal -->
                    <div class="modal servicemodal bd-example-modal-lg fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                            </div>
                            <div class="modal-body">
                                <form _lpchecked="1" id="serviceform" enctype="multipart/form-data">
                                    {{-- @csrf --}}
                                    <div class="row">
                                        <input type="text" hidden id="hidden_id" name="hidden_id">
                                        <div class="mb-3 col-6">
                                            <label for="simpleinput" class="form-label">Title</label>
                                            <input type="text" name="title" id="simpleinput" class="form-control">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="simpleinput"  class="form-label">Title Arabic</label>
                                            <input type="text" name="title_ar" id="simpleinput" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        @php
                                            $categories = DB::table('categories')->pluck('id','name');
                                        @endphp
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




                                    <div class="row">
                                        <div class="mb-3 col-6">
                                            <label for="example-textarea" class="form-label">Deascription</label>
                                            <textarea class="form-control" name="description" id="example-textarea" rows="5"></textarea>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="example-textarea" class="form-label">Deascription Arabic</label>
                                            <textarea class="form-control" name="description_ar" id="example-textarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates sapiente eum possimus, eius dicta veniam dolorem quis cum ut ex rem natus, et quam esse maxime voluptatibus perferendis corrupti? --}}
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
 <script>
     $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // dotstr
        let des = $('#des').innerHTML;
        let des_ar = $('#des').val()

        console.log(des);

        //edit
          $('.editservice').click(function(){
              let id = $(this).data("id");

              $.ajax({
                  url: `{{url('service/${id}/edit' )}}`,
                  method: 'get',
                  success:function(res){
                      console.log(res);
                     $('.servicemodal').modal('show');
                     $('input[name="title"]').val(res.title);
                     $('input[name="title_ar"]').val(res.title_ar);
                     $('#hidden_id').val(res.id);
                     $('textarea[name="description"]').val(res.description);
                     $('textarea[name="description_ar"]').val(res.description_ar);
                     $('select[name="cat_id"]').val(res.cat_id);
                  }
              })
          })

        //update
        $("#serviceform").submit(function(e){
            e.preventDefault()
            var formData = new FormData(this);
            let id = $('#hidden_id').val();
            for (var pair of formData.entries()) {
                console.log(pair[0]+ ', ' + pair[1]);
            }

            $.ajax({
                url: `{{url('service/update/${id}') }}`,
                type: 'post',
                data: formData,
                // cache:false,
                contentType: false,
                processData: false,
                success:function(res){
                    console.log(res)
                    $("#serviceform").trigger('reset');
                    $('.servicemodal').modal('hide');
                    location.reload();
                }
            })
        })

        // delete
        $('.delservice').click(function(){
            let id = $(this).data('id');

            $.ajax({
                url: `{{url('service/delete/${id}')}}`,
                method: 'delete',
                success: function(res){
                    console.log(res);
                    location.reload();
                }
            })
        })
     })
 </script>
@endpush
