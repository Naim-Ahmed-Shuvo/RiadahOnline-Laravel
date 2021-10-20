<div class="modal fade bd-example-modal-lg usermodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="usermodal-title"></h5>
            <button type="button" class="close closeusermodal" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div id="mesg"></div>
        <div class="modal-body">
            <form class="form-horizontal" id="userform" enctype="multipart/form-data">
                @csrf
                <input type="hidden"  name="user_id">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-4 col-xl-3 col-form-label">Name</label>
                    <div class="col-8 col-xl-9">
                        <input type="text" name="name"  class="form-control" placeholder="Name..."  autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Email</label>
                    <div class="col-8 col-xl-9">
                        <input type="email" name="email"  class="form-control"  placeholder="Email....">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Phone</label>
                    <div class="col-8 col-xl-9">
                        <input type="text" name="phone"  class="form-control"  placeholder="Phone....">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Company Name</label>
                    <div class="col-8 col-xl-9">
                        <input type="text" name="company_name"  class="form-control"  placeholder="company name....">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword5" class="col-4 col-xl-3 col-form-label">Role</label>
                    <div class="col-8 col-xl-9">
                        <select  class="form-control" name="role">
                            <option selected>--Select--</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Password</label>
                    <div class="col-8 col-xl-9">
                        <input type="text" name="password"  class="form-control"  placeholder="company name....">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="example-fileinput" class="form-label">Image</label>
                    <input type="file" id="userimg" name="img" class="form-control">
                    <div class="img-holder">
                        <img src="" alt="img" id="userimgholder" height="100" width="150">
                    </div>
                </div>

                <div class="justify-content-end row">
                    <div class="col-8 col-xl-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light" id="usersavebtn"></button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
