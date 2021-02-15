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
        Detail Data Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Detail Data Berita</li>
      </ol>
    </section>
    <br>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
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
                      <h3 class="timeline-header"><strong>Judul</strong></h3>

                      <div class="timeline-body">
                        <?= $brt['judul']?>
                      </div>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-comment bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><strong>Keterangan</strong></h3>

                      <div class="timeline-body">
                      <?= $brt['keterangan']?>
                      </div>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-comment bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><strong>View</strong></h3>

                      <div class="timeline-body">
                      <?= $brt['view']?>
                      </div>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-comment bg-blue"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><strong>Gambar</strong></h3>

                      <div class="timeline-body">
                        <img style="width:350px;height:300px" src="<?= base_url('gambar/'.$brt['gambar'])?>" alt="">
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
