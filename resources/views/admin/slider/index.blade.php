@extends('admin.layout.app')

@section('main')
<div class="row my-5">
    <div class="col-5 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title">Sliders</h5>
                <button class="card-title btn btn-sm btn-info addsliderbtn">Add <i class="fas fa-plus"></i></button>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    <tbody class="slider__tbody">
                        <p class="text-center d-none sliderload">loading...</p>
                      {{-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>
                            <button class="btn btn-sm btn-info" data-id=""><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger" data-id=""><i class="fas fa-trash-alt"></i></button>
                        </td>
                      </tr> --}}
                    </tbody>
                  </table>
            </div>

            @include('admin.modals.slidermodal')
        </div>
    </div>
</div>
@endsection

@push('js')
  <script>
      $(document).ready(function(){


          fetchSlider();

          //fetch sliders
          function fetchSlider(){
              let loading = true;
            //   if(loading){
            //             $('.slider__tbody').append('<p class="text-center">Loading..</p>')
            //           }
              $.ajax({
                  url: `{{url('fetchslider')}}`,
                  method: 'get',
                  beforeSend: function(){
                       $('.sliderload').removeClass('d-none')
                    },
                  success:function(res){
                      console.log(res)
                      $('.sliderload').addClass('d-none')
                      $.each(res , function( index, value ) {
                            console.log( index , ": " , value );
                            $('.slider__tbody').append(`
                                    <tr>
                                        <th scope="row">${index+1}</th>
                                        <td>
                                           <img src='${value.image}' height="80" width="100" alt='img'>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-info editslider" data-id="${value.id}"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-danger delslider" data-id="${value.id}"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>

                            `)

                        })
                  }
              })
          }

          $(".closeslidermodel").click(function(){
            $('.slidermodal').modal('hide');
          })

          $('#sliderimg').change(function(){
              $('.sliderimg-holder').removeClass("d-none");
                 let reader = new FileReader();
                reader.onload = (e)=> {
                    $('#sliderimgholder').attr('src',e.target.result)
                }

                reader.readAsDataURL(this.files[0]);
          })

          $('.addsliderbtn').click(function(){
              $('.slidermodal').modal('show');
              $('#slidersave').text("Save");
          })

          //save
          $('#sliderform').submit(function(e){
              e.preventDefault();


              //save
              if($('#slidersave').text()=="Save"){
                  console.log('saving');
                  let formData = new FormData(this);
                  $.ajax({
                      url: `{{url('saveslider')}}`,
                      method:'post',
                      data:formData,
                      cache:false,
                        contentType: false,
                        processData: false,
                      success:function(res){
                          console.log(res)
                          if(res.success){
                              $('#msg-slider').append(`<div class="alert alert-success" role="alert">
                                            <i class="mdi mdi-check-all me-2"></i> ${res.success}
                                        </div>`);

                               $('#sliderform').trigger("reset")
                               $('.slidermodal').modal('hide')
                               location.reload()
                          }
                      }
                  })
              }

              if($('#slidersave').text()=="Update"){
                  let formData= new FormData(this);
                  $.ajax({
                      url:`{{url('updateslider')}}`,
                      method:'post',
                      data: formData,
                      contentType: false,
                      processData: false,
                      success:function(res){
                          console.log(res)
                          $("#sliderform").trigger('reset')
                          $('.slidermodal').modal('hide');
                        //   fetchSlider()
                          location.reload()
                      }
                  })
              }
          })


        //edit
        $(document).on('click','.editslider',function(){
            let id = $(this).data('id');
            $.ajax({
                url:`{{url('edit-slider/${id}')}}`,
                method:'get',
                success:function(res){
                    console.log(res)
                    $('.slidermodal').modal('show');
                    $('#slidersave').text("Update");
                    $('input[name="slider_id"]').val(res.id);
                    $('.sliderimg-holder').removeClass("d-none");
                    $('#sliderimgholder').attr('src',res.image)
                }
            })
        })

        //delete
        $(document).on('click','.delslider',function(){
            let id = $(this).data('id');
            $.ajax({
                url: `{{url('deleteSlider/${id}')}}`,
                method: 'post',
                success: function(res){
                    if(res.success) location.reload();
                }
            })
        })
      })
  </script>
@endpush
