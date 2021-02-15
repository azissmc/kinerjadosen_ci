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
        Tambah Data Rektorat
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Rektorat</li>
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
                <?= form_open_multipart('tambah-rektorat')?>

                    <div class="form-group">
                        <label>Nama</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="nama_rektorat" class="form-control" placeholder="Nama..." value="<?= set_value('nama_rektorat')?>" required>
                        </div>
                        <?php echo form_error('nama_rektorat','<small class="text-danger">','</small>');?>
                    </div>
                    <br>
    
                    <div class="form-group">
                        <label>Jabatan</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                            <select name="jabatan" class="form-control" value="<?= set_value('jabatan')?>">
                                <option value="">-Pilih-</option>

                                <?php foreach($rektorat as $rt):?>
                                <option value="<?= $rt['kategori_nama']?>"><?= $rt['kategori_nama']?></option>    
                                <?php endforeach;?>
                            </select>
                        </div>
                        <?php echo form_error('jabatan','<small class="text-danger">','</small>');?>
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Sebagai Dosen</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                            <select name="dosen" class="form-control" value="<?= set_value('dosen')?>">
                                <option value="">-Pilih-</option>

                                <?php foreach($jurusan as $jr):?>
                                <option value="<?= $jr['jurusan']?>"><?= $jr['jurusan']?></option>
                                <?php endforeach;?>
  
                            </select>
                        </div>
                        <?php echo form_error('dosen','<small class="text-danger">','</small>');?>
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Kuotes</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                            
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <textarea name="kuotes" rows="10" cols="80" placeholder="Masukan kuotes disini...." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    </textarea>
                                </div>
                            
                        </div>
                        <?php echo form_error('kuotes','<small class="text-danger">','</small>');?>
                    </div>
                    <div class="form-group">
                      <label>Foto (1x1)</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-camera-retro"></i></span>
                        <input type="file" name="foto" onchange="tampilkanPreview(this,'preview')">
                      </div>
                      <br>
                      <img style="width: 170px;height:170px" src="<?= base_url()?>gambar-konten/no-image.png" id="preview">
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
 
