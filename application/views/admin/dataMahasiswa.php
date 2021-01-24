
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mahasiswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Data Mahasiswa</li>
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
                      <table id="data-mahasiswa" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($mahasiswa as $mhs):?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $mhs['nim']?></td>
                                    <td><?= $mhs['nama']?></td>
                                    <td><?= $mhs['email']?></td>
                                    <td>4</td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NIM</th>
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
  
