<section class="content" style="transform: translate(0%,1%);">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Substance</h3>

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
            <form id="quickForm" method="post" action="index.php">
                <div class="row">
                    <div class="col-md-6">
                       <!-- /.form-group -->
                        <div class="form-group">
                            <label for="id_substance">Substance :</label>
                            <select name="id_substance" class="form-control" id="id_substance">

                                <?php foreach ($substance as $obj) {
                                    echo "<option value='" . $obj->id_substance . "'>" . $obj->name_substance . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="T_critical">Critical Temperature :</label>
                            <input type="text" class="form-control" name="T_critical" id="T_critical">
                        </div>
                        <div class="form-group">
                            <label for="P_critical">Critical Presure :</label>
                            <input type="text" class="form-control" name="P_critical" id="P_critical">
                        </div>
                        <div class="form-group">
                            <label for="V_critical">Critical Volume :</label>
                            <input type="text" class="form-control" name="V_critical" id="V_critical">
                        </div>

                       <!-- /.form-group -->
                    </div>
                    <div class="col-md-6">
                   <!-- /.form-group -->
                       <div class="form-group">
                            <label for="Z_critical">Critical Z :</label>
                            <input type="text" class="form-control" name="Z_critical" id="Z_critical">
                        </div>
                        <div class="form-group">
                            <label for="T_boiling">Boiling Temperature :</label>
                            <input type="text" class="form-control" name="T_boiling" id="T_boiling">
                        </div>
                        <div class="form-group">
                            <label for="T_melting">Melting Temperature :</label>
                            <input type="text" class="form-control" name="T_melting" id="T_melting">
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-right">
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="controller" value="Caracterestic"></td>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</section>