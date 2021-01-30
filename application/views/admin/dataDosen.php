<style>
  .mb{
    margin-bottom: 5px;
  }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Dosen
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Data Dosen</li>
      </ol>
    </section>
    <br>
    <!-- Main content -->
    <section class="content">
      <a href="<?= base_url('tambah-dosen')?>" class="btn btn-warning btn-md mb"><i class="fa fa-plus-circle"> Tambah Data</i></a>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data-mahasiswa" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NIDN</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1;foreach($dosen as $dsn):?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $dsn['nidn']?></td>
                        <td><?= $dsn['nama']?></td>
                        <td><?= $dsn['email']?></td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-copy"></i></a>
                          <a href="#" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>NIDN</th>
                  <th>Nama</th>
                  <th>Email</th>
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

