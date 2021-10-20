<div class="modal fade bd-example-modal-lg slidermodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="slidermodal-title"></h5>
            <button type="button" class="close closeslidermodel" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-header" id="msg-slider">
            
        </div>
        <div id="mesg"></div>
        <div class="modal-body">
            <form class="form-horizontal" id="sliderform" enctype="multipart/form-data">
                @csrf
                <input type="hidden"  name="slider_id">

                <div class="mb-3">
                    <label for="example-fileinput" class="form-label">Slider Image</label>
                    <input type="file" id="sliderimg" name="img" class="form-control">
                    <div class="sliderimg-holder d-none">
                        <img  alt="img" id="sliderimgholder" height="100" width="150">
                    </div>
                </div>

                <div class="justify-content-end row">
                    <div class="col-8 col-xl-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light" id="slidersave"></button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
