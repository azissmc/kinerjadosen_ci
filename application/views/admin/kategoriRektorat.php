<style>
  .mb{
    margin-bottom : 5px;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kategori Rektorat
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Data Kategori Rektorat</li>
      </ol>
    </section>
    <br>
    <!-- Main content -->
    <section class="content">
      <a href="<?= base_url('tambah-kategori-rektorat')?>" class="btn btn-warning btn-md mb"><i class="fa fa-plus-circle"> Tambah Data</i></a>
      <?php echo $this->session->flashdata('message'); ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data-rektorat" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Kategori</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1;foreach($rektorat as $rt):?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $rt['kategori_nama']?></td>
                        <td>
                          <a href="<?= base_url('ubah-kategori-rektorat/'. $rt['id'])?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal1"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nama Kategori</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Anda yakin ingin menghapus data ini?</h3>
                </div>
                <!-- end /.modal-header -->

                <div class="modal-body">
                    <a href="<?= base_url('hapus-kategoriRt/'. $rt['id'])?>" class="btn btn--round btn-danger btn--default">Ya</a>
                    <button class="btn btn--round modal_close" data-dismiss="modal">Tidak</button>
                </div>
                <!-- end /.modal-body -->
            </div>
        </div>
    </div>
