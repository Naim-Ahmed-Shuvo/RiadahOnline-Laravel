@extends('admin.layout.app')

@section('main')
<div class="row">
    <div class="col-lg-7 mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="header-title">Categories</h4>
                <button class="btn btn-info open-cat-modal">
                    Add +
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Name Arabic</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $index=>$item)

                            <tr>
                                <th scope="row">{{$index+1}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->name_ar}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <div class="btn btn-sm btn-info edit_cat" data-id="{{$item->id}}"><i class="fa fa-edit"></i></div>
                                    <div class="btn btn-sm btn-danger del_cat" data-id="{{$item->id}}"><i class="fa fa-trash"></i></div>
                                </td>
                            </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div>
        </div> <!-- end card -->
    </div>
    <!-- Modal -->

    <!-- Modal -->
<div class="modal fade" id="cat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cat_modal_title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="cat_form">
                @csrf
                <div class="mb-3">
                    <input type="text" hidden id="hidden-input" name="hidden_id" value="">
                    <label for="simpleinput" class="form-label">Category Name</label>
                    <input type="text" name="cat_name" id="simpleinput" required class="form-control">
                </div>
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Category Name Arabic</label>
                    <input type="text" name="cat_name_ar" required id="simpleinput" class="form-control">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary waves-effect waves-light cat_form_btn"></button>
                </div>

                {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis sequi sunt tempore temporibus facere rem voluptatibus eligendi. Omnis, temporibus saepe. --}}

            </form>
        </div>
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

        $('.open-cat-modal').click(function(){
            $('#cat_modal').modal("show");
            $('#cat_modal_title').text('Add Category');
            $('.cat_form_btn').text('Save');
        })

        // edit category
        $('.edit_cat').click(function(){
            let id = $(this).data('id');
            // alert(id)
            $.ajax({
                url: `{{url('category/${id}/edit')}}`,
                method: 'get',
                success: function(res){
                  console.log(res.category)
                  $('#cat_modal_title').text('Edit Category');
                  $('.cat_form_btn').text('Update');
                  $('#hidden-input').val(res.category.id);
                  $('#cat_modal').modal('show');
                  $('input[name="cat_name"]').val(res.category.name);
                  $('input[name="cat_name_ar"]').val(res.category.name_ar);
                },
                error: function(err){
                   console.log(err)
                }
            })

        });
        // edit category end ///

        // save category or update ///
        $('#cat_form').submit(function(e){

            e.preventDefault();
            const data = $(this).serialize();
            // console.log('submit...')

            // save
            if($('.cat_form_btn').text()=='Save'){
                console.log('saving..');
                $('.cat_form_btn').text('Saving...')
                console.log('data',data);
                $.ajax({
                   url: `{{url('category')}}`,
                   method:'post',
                   data,
                   dataType: 'json',
                   success:function(res){
                    $('#cat_form').trigger("reset");
                    $('#cat_modal').modal('hide');
                    location.reload();
                   },
                   error: function(err){
                       console.log(err)
                   }

                })
            }

            // update
            if($('.cat_form_btn').text()=='Update'){
                console.log('updating');
                console.log('data',data);
                $('.cat_form_btn').text('Updating...')
                let id = $('#hidden-input').val()
                $.ajax({
                   url: `{{url('category/${id} ')}}`,
                   method:'put',
                   data,
                   dataType: 'json',
                   success:function(res){
                    $('#cat_form').trigger("reset");
                    $('#cat_modal').modal('hide');
                    location.reload();
                   },
                   error: function(err){
                       console.log(err)
                   }

                })
            }

            // if()
        })



        // delete
        $('.del_cat').click(function(){
            let id = $(this).data("id");
            // alert(id);
            $.ajax({
                url: `{{url('category/${id}')}}`,
                type: "DELETE",
                success:function(res){
                   console.log(res);
                   location.reload()
                }
            })
        })
    })
</script>
@endpush
