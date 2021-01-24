
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Admin</li>
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
                      <table id="data-admin" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($admin as $adm):?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $adm['username']?></td>
                                <td><?= $adm['password']?></td>
                                <td> 4</td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                        <tfoot>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Opsi</th>
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

  
