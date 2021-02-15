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
        Ubah Data About
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ubah Data About</li>
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
                <?= form_open_multipart('ubah-about/'.$about['id_inbout'])?>

                    <div class="form-group">
                        <label>Judul</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="judul" class="form-control" placeholder="Nama..." value="<?= $about['judul']?>" required>
                        </div>
                        <?php echo form_error('judul','<small class="text-danger">','</small>');?>
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                            
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <textarea name="keterangan" rows="10" cols="80" placeholder="Masukan keterangan disini...." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $about['keterangan']?>
                                    </textarea>
                                </div>
                            
                        </div>
                        <?php echo form_error('keterangan','<small class="text-danger">','</small>');?>
                    </div>
                    <div class="form-group">
                      <label>Gambar (1x1)</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-camera-retro"></i></span>
                        <input type="hidden" name="gambar_lama" value="<?= $about['gambar']?>">
                        <input type="file" name="foto" onchange="tampilkanPreview(this,'preview')">
                      </div>
                      <br>
                      <img style="width: 170px;height:170px" src="<?= base_url()?>gambar/<?= $about['gambar']?>" id="preview">
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-defaul pull-right">Cancel</button>
                        <button type="submit" class="btn btn-info pull-left">Simpan</button>
                    </div>
                <?= form_close();?>
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
 
