<style>
.upload_box{
    font-size: 16px;
    background: #698B22;
    border-radius: 50px;
    box-shadow: 5px 5px 10px black;
    width: 350px;
    height: 43px;
    outline: none;
    color: #000;
}
::-webkit-file-upload-button{
    height: 30px;
    color: white;
    background: #206a5d;
    border: none;
    border-radius: 50px;
    box-shadow: 1px 0 1px #6b4559;
    outline: none;
}

::-webkit-file-upload-button:hover{
    background: #438a5e;
}
</style>

<section class="content" style="transform: translate(0%,1%);">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add User</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
        </div>
         <!-- /.card-header -->

        <!-- /.card-body -->
        <div class="card-body">
            <form id="quickForm" method="post" action="index.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                       <!-- /.form-group -->
                        <div class="form-group">
                            <label for="firstName_user">First Name :</label>
                            <input type="text" class="form-control" name="firstName_user" id="firstName_user" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName_user">Last Name :</label>
                            <input type="text" class="form-control" name="lastName_user" id="lastName_user" required>
                        </div>
                        <div class="form-group">
                            <label for="email_user">Email :</label>
                            <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Choose file" required>
                        </div>
                       <!-- /.form-group -->
                    </div>
                    <div class="col-md-6">
                   <!-- /.form-group -->
                       <div class="form-group">
                            <label for="password_user">Password :</label>
                            <input type="text" class="form-control" name="password_user" id="password_user" required>
                        </div>
                        <div class="form-group">
                            <label for="user_type">User type :</label>
                            <select class="form-control" name="user_type" id="user_type">
                                <option disabled selected value>         </option>
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                                <option value="Super Admin">Super Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="user_photo">Photo :</label>
                            <input type="file"  class="form-control upload_box" name="user_photo" id="user_photo" />
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-right">
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="controller" value="User"></td>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</section>