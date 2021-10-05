<section class="content" style="transform: translate(0%,25%);">
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
                           <label for="name_substance">Name substance :</label>
                           <input type="text" name="name_substance" class="form-control" id="name_substance">
                        </div>
                        <div class="form-group">
                           <label for="formula_substance">Formula substance :</label>
                           <input type="text" name="formula_substance" class="form-control" id="formula_substance">
                        </div>
                       <!-- /.form-group -->
                    </div>
            
                    <div class="col-md-6">
                   <!-- /.form-group -->
                       <div class="form-group">
                           <label for="formula_weight">Formula weight :</label>
                           <input type="text" name="formula_weight" class="form-control" id="formula_weight">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- /.card-body -->
                <div class="card-footer text-right">
                   <input type="hidden" name="action" value="add">
                   <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</section>