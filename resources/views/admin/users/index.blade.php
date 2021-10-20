@extends('admin.layout.app')

@section('main')
<div class="row my-5">
    <div class="col-9 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="header-title">All Users</h4>
                    <p class="sub-header font-13">
                        <a  class="btn btn-info btn-sm adduser">Add <i class="fas fa-plus"></i></a>
                    </p>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $key=>$item)

                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>
                                    <img src="{{url($item->img)}}" alt="img" height="80" width="100">
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->mobile_number}}</td>
                                <td>{{$item->role}}</td>
                                <td>
                                    <span class="badge badge-success text-success">Active</span>
                                </td>
                                <td>
                                    <a  class="btn btn-info btn-sm edituser" data-id="{{$item->id}}"><i class="fas fa-edit"></i></a>
                                    <a  class="btn btn-danger btn-sm deluser" data-id="{{$item->id}}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div>
        </div>
        @include('admin.modals.usermodal')
    </div>
</div>
@endsection

@push('js')
 <script>
     $(document).ready(function(){

        //hide modal
         $(".closeusermodal").click(function(){
            $('.usermodal').modal('hide');
         })

         //show image
         $('#userimg').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                // console.log(e.target.result);
                $('#userimgholder').attr('src', e.target.result)
            }
            reader.readAsDataURL(this.files[0]);
        });

        $(".adduser").click(function(){
            $('.usermodal').modal('show');
            $('.usermodal-title').html('Add User');
            $('#usersavebtn').text('Save');
        })

         //edit
         $('.edituser').click(function(){
             const id = $(this).data('id')
            //  alert(id);
             $.ajax({
                 url: `{{url('/getuserbyid/${id}')}}`,
                 method: 'get',
                 success:function(res){
                     console.log(res)
                     $('.usermodal').modal('show');
                     $('.usermodal-title').html('Edit User');
                     $('.usermodal input[name="name"]').val(res.name);
                     $('.usermodal input[name="email"]').val(res.email);
                     $('.usermodal input[name="phone"]').val(res.mobile_number);
                     $('.usermodal input[name="company_name"]').val(res.company_name);
                     $('.usermodal select[name="role"]').val(res.role);
                     $('#userimgholder').attr('src',res.img);
                     $('#usersavebtn').text('Update');
                 },
                 error:function(err){
                     console.log(err)
                 }
             })
         });

         //save
         $('#userform').submit(function(e){
             e.preventDefault();

             //store
             if($('#usersavebtn').text() === 'Save'){
                $('#usersavebtn').text('Saving..');
                let formData = new FormData(this);
                $.ajax({
                    data: formData,
                    url: "{{ url('storeuser') }}",
                    type: "POST",
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function(res){
                    //   $('#mesg').html('<p class="text-success">'+res.msg+'</p>');
                      console.log(res);
                      if(res.success){
                        $('#userform').trigger("reset");
                        $('#mesg').html('<p class="text-success">'+res.success+'</p>')
                        setTimeout(() => {
                            $('.usermodal').modal('hide');
                            location.reload();
                        }, 2000);
                      }
                    },

                });

             }

            //update
             if($('#usersavebtn').text() === 'Update'){
                $('#usersavebtn').text('Sending..');
                var id = $('.edituser').data('id');
                console.log(id)
                // alert(id);
                let formData = new FormData(this);
                $.ajax({
                    data: formData,
                    url: "{{ url('updateuser') }}"+ '/'+ id ,
                    type: "POST",
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function(res){
                    //   $('#mesg').html('<p class="text-success">'+res.msg+'</p>');
                      console.log(res);
                      if(res.success){
                        $('#userform').trigger("reset");
                        $('#mesg').html('<p class="text-success">'+res.success+'</p>')
                        setTimeout(() => {
                            $('.usermodal').modal('hide');
                            location.reload();
                        }, 2000);
                      }
                    },

                });
            }

         });

        //  delete
        $('.deluser').click(function(){
            let id = $(this).data('id');
            console.log(id)

            $.ajax({
                url: `{{url('/deleteuser/${id}')}}`,
                method:'post',
                success:function(res){
                     console.log(res)
                     location.reload()
                }
            })

        })


     })
 </script>
@endpush
