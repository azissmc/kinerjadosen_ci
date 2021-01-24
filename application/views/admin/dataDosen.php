
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Dosen
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Dosen</li>
      </ol>
    </section>
    <br><br>
    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                      
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="data-dosen" class="table table-bordered table-striped table-responsive
                      ">
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
                                <td><?= $no++;?></td>
                                <td><?= $dsn['nidn'];?></td>
                                <td><?= $dsn['nama'];?></td>
                                <td><?= $dsn['email'];?></td>
                                <td>4</td>
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
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  
