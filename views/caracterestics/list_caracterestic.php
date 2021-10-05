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
                <h1 class="text-center">Substance Caracterestics</h1>
            </div>
        </div>
        <div class="text-right">
            <button type="button" data-bs-toggle="modal" data-bs-target="#add" value="Add Caracterestics" style="border:solid #EEE685;border-radius:5px;">
            <img src="https://img.icons8.com/color/48/000000/add-to-inbox.png" style="cursor:pointer; width:30px;
            height:30px;"/>
            </button>
            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="transform:translate(10%,20%);">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add caracterestics</h5>
                            <button style="border:none; background:white; color:#1f2532;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa">&#xf00d;</i></button>
                        </div>
                        <form id="quickForm" method="post" action="index.php" class="text-left">
                            <div class="modal-body row">
                                <div class="col">
                                    <div>
                                        <label for="id_substance">Substance :</label>
                                        <select name="id_substance" id="id_substance">
                                            <option disabled selected value>----------</option>
                                            <?php foreach ($substance as $obj) {
                                            echo "<option value='" . $obj->id_substance . "'>" . $obj->name_substance . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="T_critical">Critical Temperature :</label>
                                        <input type="text" name="T_critical" id="T_critical">
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="P_critical">Critical Presure :</label>
                                        <input type="text" name="P_critical" id="P_critical">
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="V_critical">Critical Volume :</label>
                                        <input type="text" name="V_critical" id="V_critical">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <label for="Z_critical">Critical Z :</label>
                                        <input type="text" name="Z_critical" id="Z_critical">
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="T_boiling">Boiling Temperature :</label>
                                        <input type="text" name="T_boiling" id="T_boiling">
                                    </div>
                                    <div style="margin-top:1rem;">
                                        <label for="T_melting">Melting Temperature :</label>
                                        <input type="text" name="T_melting" id="T_melting">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="hidden" name="action" value="add">
                                <input type='hidden'  name='controller' value='Caracterestic'>
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
                                <th>Substance</th>
                                <th>Critical T</th>
                                <th>Critical P</th>
                                <th>Critical V</th>
                                <th>Critical Z</th>
                                <th>Boiling T</th>
                                <th>Melting T</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $y=0;
                            
                                foreach($caracteresticListe as $obj){
                                        echo "<tr>
                                        <td>".$obj->name_substance."</td>
                                        <td>".$obj->T_critical."</td>
                                        <td>".$obj->P_critical."</td>
                                        <td>".$obj->V_critical."</td>
                                        <td>".$obj->Z_critical."</td>
                                        <td>".$obj->T_boiling."</td>
                                        <td>".$obj->T_melting."</td>
                                        <td>";
            
                                        $y=$y+1;

                                       echo  "<a class='btn btn-success' type=\"button\" data-bs-toggle=\"modal\" data-bs-target='#update".$y."' onclick='window.location.href=\"index.php?id_caracterestic=". $obj->id_caracterestic."'><i class='fas fa-edit'></i></a>
                                               <a class='btn btn-danger' onclick=' if(confirm(\"Are you sure!\")) window.location.href=\"index.php?id_caracterestic=".$obj->id_caracterestic."&controller=Caracterestic&action=delete\"'><i class='fas fa-trash-alt'></i></a>";
                                        
                                        ?>                                   
                                        <div class="modal fade" id="update<?php echo $y;  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="transform:translate(10%,20%);">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit caracterestics</h5>
                                                    <button style="border:none; background:white; color:#1f2532;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa">&#xf00d;</i></button>
                                                </div>

                                                <form id="quickForm" method="post" action="index.php" class="text-left">
                                                    <div class="modal-body row">
                                                        <div class="col">
                                                            <div>
                                                                <label for='id_substance'>Substance : </label>
                                                                <select name="id_substance" id="id_substance">
                                                                    <option disabled selected value>----------</option>
                                                                    <?php
                                                                    
                                                                        foreach ($substance as $sobj) {
                                                                            $x="";
                                                                            if ( $sobj->id_substance == $obj->id_substance){
                                                                                $x=$x."selected";
                                                                            }
                                                                            echo "
                                                                            <option ".$x." value='" . $sobj->id_substance . "'>" . $sobj->name_substance . "</option>";
                                                                                
                                                                        }

                                                                echo "
                                                                </select>
                                                            </div>

                                                            <div style=\"margin-top:1rem;\">
                                                                <label for='T_critical'>Critical Temperature : </label>
                                                                <input type='text' name='T_critical' id='T_critical' value='". $obj->T_critical."'>
                                                            </div>

                                                            <div style=\"margin-top:1rem;\">
                                                                <label for='P_critical'>Critical Presure : </label>
                                                                <input type='text' name='P_critical' id='P_critical' value='".$obj->P_critical."'>
                                                            </div>

                                                            <div style=\"margin-top:1rem;\">
                                                                <label for='V_critical'>Critical Volume : </label>
                                                                <input type='text' name='V_critical' id='V_critical' value='".$obj->V_critical."'>
                                                            </div>

                                                        </div>

                                                        <div class=\"col\">
                                                            <div>
                                                                <label for='Z_critical'>Critical Z : </label>
                                                                <input type='text' name='Z_critical' id='Z_critical' value='".$obj->Z_critical."'>
                                                            </div>

                                                            <div style=\"margin-top:1rem;\">
                                                                <label for='T_boiling'>Boiling Temperature : </label>
                                                                <input type='text' name='T_boiling' id='T_boiling' value='".$obj->T_boiling."'>
                                                            </div>

                                                            <div style=\"margin-top:1rem;\">
                                                                <label for='T_melting'>Melting Temperature : </label>
                                                                <input type='text' name='T_melting' id='T_melting' value='".$obj->T_melting."'>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                                                        <input type='hidden' name='id_caracterestic' value='". $obj->id_caracterestic."'>
                                                        <input type='hidden' name='action' value='update'>                        
                                                        <input type='hidden'  name='controller' value='Caracterestic'>
                                                        <input type='submit' class=\"btn btn-primary\" value='Update'>
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
                                <th>Substance</th>
                                <th>Critical T</th>
                                <th>Critical P</th>
                                <th>Critical V</th>
                                <th>Critical Z</th>
                                <th>Boiling T</th>
                                <th>Melting T</th>
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











