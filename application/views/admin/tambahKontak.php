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
        Tambah Data Kontak
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Kontak</li>
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
                <form action="<?= base_url('tambah-kontak')?>" method="post">

                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" name="email" class="form-control" placeholder="Email..." required>
                        </div>
                        <?php echo form_error('email','<small class="text-danger">','</small>');?>
                    </div>
                    <br>

                    <div class="form-group">
                        <label>No Telepon</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" name="no_hp" class="form-control" placeholder="No telepon..." required>
                        </div>
                        <?php echo form_error('no_hp','<small class="text-danger">','</small>');?>
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Alamat</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <textarea name="alamat" rows="10" cols="80" placeholder="Masukan alamat disini...." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    </textarea>
                                </div>
                            
                        </div>
                        <?php echo form_error('alamat','<small class="text-danger">','</small>');?>
                    </div>
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
 
