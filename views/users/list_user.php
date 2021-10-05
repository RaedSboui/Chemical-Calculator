<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<?php 
if(isset($_SESSION['message'])):?>
<div class="text-center alert alert-<?=$_SESSION['msg_type']?>" style="margin-top: 1rem;">
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);

    ?>
</div>
<?php endif ?>

<style>
.upload_box{
    font-size: 16px;
    background: #698B22;
    border-radius: 50px;
    box-shadow: 5px 5px 10px black;
    width: 200px;
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

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="text-center">Users</h1>
            </div>
        </div>
        <div class="text-right">
            <button type="button" data-bs-toggle="modal" data-bs-target="#add" value="Add Caracterestics" style="border:solid #EEE685;border-radius:5px;">
            <img src="https://img.icons8.com/dusk/64/000000/add-user-male.png" style="cursor:pointer; width:30px;
            height:30px;"/>
            </button>
            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="transform:translate(10%,20%);">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                            <button style="border:none; background:white; color:#1f2532;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa">&#xf00d;</i></button>
                        </div>
                        <form id="quickForm" method="post" action="index.php" class="text-left" enctype="multipart/form-data">
                            <div class="modal-body row">
                                <div class="col">
                                    <div>
                                        <label for="firstName_user">First Name :</label>
                                        <input type="text" class="form-control" name="firstName_user" id="firstName_user" required>
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="lastName_user">Last Name :</label>
                                        <input type="text" class="form-control" name="lastName_user" id="lastName_user" required>
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="email_user">Email :</label>
                                        <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Choose file" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <label for="password_user">Password :</label>
                                        <input type="text" class="form-control" name="password_user" id="password_user" required>
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="user_type">User type :</label>
                                        <select class="form-control" name="user_type" id="user_type">
                                            <option disabled selected value>         </option>
                                            <option value="User">User</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Super Admin">Super Admin</option>
                                        </select>
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="user_photo">Photo :</label>
                                        <input type="file"  class="form-control upload_box" name="user_photo" id="user_photo" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="controller" value="User">
                                <input type="submit" name="save_user"  class="btn btn-primary" value="Submit">        
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name T</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>User type</th>
                                <th>Photo</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $y=0;
                            
                                foreach($users as $obj){
                                        echo "<tr>
                                        <td>".$obj->firstName_user."</td>
                                        <td>".$obj->lastName_user."</td>
                                        <td>".$obj->email_user."</td>
                                        <td></td>
                                        <td>".$obj->user_type."</td>
                                        <td>".$obj->user_photo."</td>
                                        <td>";
            
                                        $y=$y+1;

                                       echo  "
                                       
                                               <a class='btn btn-success' type=\"button\" data-bs-toggle=\"modal\" data-bs-target='#update".$y."' onclick='window.location.href=\"index.php?id_user=". $obj->id_user."'><i class='fas fa-edit'></i></a>
                                               
                                               <a class='btn btn-danger' onclick=' if(confirm(\"Are you sure!\")) window.location.href=\"index.php?id_user=".$obj->id_user."&user_type=".$obj->user_type."&controller=User&action=delete\"'><i class='fas fa-trash-alt'></i></a>";
                                        
                                ?>                                   
                                        <div class="modal fade" id="update<?php echo $y;  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="transform:translate(10%,20%);">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                                                    <button style="border:none; background:white; color:#1f2532;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa">&#xf00d;</i></button>
                                                </div>

                                                <form id="quickForm" method="post" action="index.php" class="text-left" enctype="multipart/form-data">
                                                    <div class="modal-body row">
                                                        <div class="col">
                                                            <div>
                                                                <?php
                                                                echo "
                                                                <label for='firstName_user'>First Name : </label>
                                                                <input type='text' class='form-control' name='firstName_user' id='firstName_user' value='". $obj->firstName_user."'>         
                                                            </div>

                                                            <div style=\"margin-top:1rem;\">
                                                                <label for='lastName_user'>Last Name : </label>
                                                                <input type='text' class='form-control' name='lastName_user' id='lastName_user' value='". $obj->lastName_user."'>
                                                            </div>

                                                            <div style=\"margin-top:1rem;\">
                                                                <label for='email_user'>Email : </label>
                                                                <input type='text' class='form-control' name='email_user' id='email_user' value='".$obj->email_user."'>
                                                            </div>
                                                        </div>

                                                        <div class=\"col\">
                                                            <div>
                                                                <label for='password_user'>Password : </label>
                                                                <input type='text' class='form-control' name='password_user' id='password_user' value='".$obj->password_user."'>
                                                            </div>

                                                            <div style=\"margin-top:1rem;\">
                                                                <label for='user_type'>User type : </label>
                                                                <select class='form-control' name='user_type' id='user_type'>
                                                                    <option disabled selected value></option>";
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
                                                                </select>
                                                            </div>

                                                            <div style=\"margin-top:1rem;\">
                                                                <label for='user_photo'>Photo : </label>
                                                                <input type='file' class='form-control upload_box' name='user_photo' id='user_photo' value='".$obj->user_photo."'>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                                                        <input type='hidden' name='id_user' value='". $obj->id_user."'>
                                                        <input type='hidden' name='action' value='update'>                        
                                                        <input type='hidden'  name='controller' value='User'>
                                                        <input type='submit' name='save_user' class=\"btn btn-primary\" value='Update'>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>    
                               </td>";
                                }
                                echo"                              
                            </tr>
                          </tbody>
                            <tfoot>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name T</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>User type</th>
                                <th>Photo</th>
                                <th>action</th>
                            </tr>
                            </tfoot>
                        </table>";                    
                        
                           ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>












