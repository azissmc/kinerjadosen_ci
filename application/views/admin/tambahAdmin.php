<style>
    .tp{
        border-top-color: red;
    }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Admin</li>
      </ol>
    </section>
    <br>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Input addon -->
          <div class="box box-danger">
              <br>
            <div class="box-body">
                <form action="<?= base_url('tambah-admin')?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="Username..." value="<?= set_value('username')?>">
                        </div>
                            <?php echo form_error('username','<small class="text-danger">','</small>');?>
                    </div>
                    <br>
    
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="text" name="password" class="form-control" placeholder="Password...">
                        </div>
                            <?php echo form_error('password','<small class="text-danger">','</small>');?>
                    </div>
                    <br>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-defaul pull-right">Cancel</button>
                        <button type="submit" class="btn btn-info pull-left">Simpan</button>
                    </div>
                </form>
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
