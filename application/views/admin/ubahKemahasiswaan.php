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
        Ubah Data Kemahasiswaan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ubah Data Kemahasiswaan</li>
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
                <?= form_open_multipart('ubah-kemahasiswaan/'.$kms['id_kemahasiswaan'])?>

                    <div class="form-group">
                        <label>Nama</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="nama" class="form-control" placeholder="Nama..." value="<?= $kms['nama']?>" required>
                        </div>
                        <?php echo form_error('nama','<small class="text-danger">','</small>');?>
                    </div>
                    <br>

                    <div class="form-group">
                        <label>No Whatsapp</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" name="no_wa" class="form-control" placeholder="no whatsapp..." value="<?= $kms['no_wa']?>" required>
                        </div>
                        <?php echo form_error('no_wa','<small class="text-danger">','</small>');?>
                    </div>
                    <br>

                    <div class="form-group">
                      <label>Foto (1x1)</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-camera-retro"></i></span>
                        <input type="hidden" name="gambar_lama" value="<?= $kms['foto']?>">
                        <input type="file" name="foto" onchange="tampilkanPreview(this,'preview')">
                      </div>
                      <br>
                      <img style="width: 170px;height:170px" src="<?= base_url()?>gambar/<?= $kms['foto']?>" id="preview">
                    </div>
                    <div class="box-footer">
                        <a href="<?= base_url('kemahasiswaan')?>" class="btn btn-default pull-right">Kembali</a>
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
 
