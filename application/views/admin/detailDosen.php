<style>
  .mb{
    margin-bottom: 5px;
  }
  .h3.judul{
      color:red;
  }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Data Dosen
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Detail Data Dosen</li>
      </ol>
    </section>
    <br>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
            <?php
                if($dosen['foto'] == "" || empty($dosen['foto'])){
                    $foto = 'guest.png';
                }else{
                    $foto = $dosen['foto'];
                }

                if($dosen['email'] == "" || empty($dosen['email'])){
                    $email = 'Email masih kosong';
                }else{
                    $email = $dosen['email'];
                }

                if($dosen['kuotes'] == "" || empty($dosen['kuotes'])){
                    $kuotes = 'kuotes masih kosong';
                }else{
                    $kuotes = $dosen['kuotes'];
                }
            ?>
          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>gambar/<?= $foto?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $dosen['nidn']?></h3>

              <p class="text-muted text-center"><?= $dosen['nama']?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <div class="tab-content">
              <!-- /.tab-pane -->
              <br>
              <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><strong>Email</strong></h3>

                      <div class="timeline-body">
                        <?= $email?>
                      </div>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-graduation-cap bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><strong>Password</strong></h3>

                      <div class="timeline-body">
                        <?= $dosen['password']?>
                      </div>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-comment bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><strong>Kuotes</strong></h3>

                      <div class="timeline-body">
                        <?= $kuotes?>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                </ul>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
