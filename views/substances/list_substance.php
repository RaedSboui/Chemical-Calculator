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
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="text-center">Substances List</h1>
            </div>
        </div>
        <div class="text-right">
            <button type="button" data-bs-toggle="modal" data-bs-target="#add" value="Add Substance" style="border:solid #EEE685;border-radius:5px;">
            <img src="https://img.icons8.com/color/48/000000/add-to-inbox.png" style="cursor:pointer; width:30px;
            height:30px;"/>
            </button>

            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="transform:translate(10%,20%);">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add substance</h5>
                            <button style="border:none; background:white; color:#1f2532;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa">&#xf00d;</i></button>
                        </div>
                        <form id="quickForm" method="post" action="index.php" class="text-left">
                            <div class="modal-body row">
                                <div class="col">
                                    <div>
                                        <label for="name_substance">Name substance :</label>
                                        <input type="text" name="name_substance" class="form-control" id="name_substance">
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="formula_substance">Formula substance :</label>
                                        <input type="text" name="formula_substance" class="form-control" id="formula_substance">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="formula_weight">Formula weight :</label>
                                    <input type="text" name="formula_weight" class="form-control" id="formula_weight">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="hidden" name="action" value="add">
                                <input type="submit" class="btn btn-primary" value="Submit">
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
                                    <th>Substance Name</th>
                                    <th>Formula</th>
                                    <th>Formula Weight</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                             $y=0;
                                foreach($substanceListe as $obj){
                                    echo "<tr>
                                    <td>".$obj->name_substance."</td>
                                    <td>".strtoupper($obj->formula_substance)."</td>
                                    <td>".$obj->formula_weight."</td>
                                    <td>";
                                    $y=$y+1;
                                    echo "
                                   <a class='btn btn-success' type=\"button\" data-bs-toggle=\"modal\" data-bs-target='#update".$y."' onclick='window.location.href=\"index.php?id_substance=".$obj->id_substance."'><i class='fas fa-edit'></i></a>
                                   <a class='btn btn-danger' onclick=' if(confirm(\"Are you sure!\")) window.location.href=\"index.php?id_substance=".$obj->id_substance."&controller=Substance&action=delete\"'><i class='fas fa-trash-alt'></i></a>";?>
                                   <div class="modal fade" id="update<?php echo $y;  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="transform:translate(10%,20%);">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit substance</h5>
                                                    <button style="border:none; background:white; color:#1f2532;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa">&#xf00d;</i></button>
                                                </div>
                                                <form id="quickForm" method="post" action="index.php" class="text-left">
                                                    <div class="modal-body row">
                                                        <div class="col">
                                                            <div>
                                                                <label for="name_substance">Name substance :</label>
                                                                <input type="text" name="name_substance" class="form-control" id="name_substance" value="<?php echo $obj->name_substance;?>">

                                                            </div>
                                                            <div style="margin-top:1rem;">
                                                                <label for="formula_substance">Formula substance :</label>
                                                                <input type="text" name="formula_substance" class="form-control" id="formula_substance" value="<?php echo $obj->formula_substance; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formula_weight">Formula weight :</label>
                                                            <input type="text" name="formula_weight" class="form-control" id="formula_weight" value="<?php echo $obj->formula_weight; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <input type="hidden" name="id_substance" id="id_substance" value="<?php echo $obj->id_substance; ?>">
                                                        <input type="hidden" name="action" value="update">
                                                        <input type='hidden' name='controller' value='Substance'>
                                                        <input type="submit" class="btn btn-primary" value="Update">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </td>
                            </tr>
                            <?php }
                            echo "</tbody>
                            <tfoot>
                                <tr>
                                    <th>Substance Name</th>
                                    <th>Formula</th>
                                    <th>Formula Weight</th>
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



