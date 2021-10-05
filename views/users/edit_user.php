<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update user</h3>

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
        
        <div class="card-body">
            <form id="quickForm" method="post" action="index.php">
                <div class="row">
                    <div class="col-md-6">
                       <!-- /.form-group -->
                        <div class="form-group">
                            <label for='firstName_user'>First Name : </label>
                            <input type='text' class='form-control' name='firstName_user' id='firstName_user' value='<?php echo $obj->firstName_user?>'>
                        </div>
                        <div class="form-group">
                            <label for='lastName_user'>Last Name : </label>
                            <input type='text' class='form-control' name='lastName_user' id='lastName_user' value='<?php echo$obj->lastName_user?>'>
                        </div>
                        <div class="form-group">
                            <label for='email_user'>Email : </label>
                            <input type='text' class='form-control' name='email_user' id='email_user' value='<?php echo$obj->email_user?>'>
                        </div>
                       <!-- /.form-group -->
                    </div>
              <!-- /.col -->
                    <div class="col-md-6">
                   <!-- /.form-group -->
                       <div class="form-group">
                            <label for='password_user'>Password : </label>
                            <input type='text' class='form-control' name='password_user' id='password_user' value='<?php echo$obj->password_user?>'>
                        </div>
                        <div class="form-group">
                            <label for='user_type'>User type : </label>
                            <select class='form-control' name='user_type' id='user_type'>
                                <option disabled selected value></option>
                                    <?php
                                        $x=""; $r=""; $s="";
                                        if ( $obj->user_type === "User")
                                        {
                                            $x=$x."selected";
                                        }
                                        else if($obj->user_type === "Admin")
                                        {
                                            $r=$r."selected";
                                        }
                                        else if($obj->user_type === "Super Admin")
                                        {
                                            $s=$s."selected";
                                        }
                            echo "
                                <option ".$x." value='User'>User</option>
                                <option ".$r." value='Admin'>Admin</option>
                                <option ".$s." value='Super Admin'>Super Admin</option>
                            </select>"; ?>
                        </div>
                        <div class="form-group">
                            <label for='user_photo'>Photo : </label>
                            <input type='file' class='form-control upload_box' name='user_photo' id='user_photo' value='".$obj->user_photo."'>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- /.card-body -->
                <div class="card-footer">
                    <input type="hidden" name="id_user" value=" <?php echo $obj->id_user; ?>">
                    <input type="hidden" name="action" value="update">                        
                    <input type="hidden"  name="controller" value="User">
                    <input type="submit" name="save_user" class="btn btn-primary" value="Update">
                </div>
            </form>
        </div>
    </div>
</section>