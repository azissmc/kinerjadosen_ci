<style>
  .gambar{
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }
</style>

  <body>
    
    <!-- Preloader -->
    <div id="js-preloader" class="js-preloader">
      <div class="content">
        <img src="<?= base_url()?>assets/gambar/ltitle.png" alt="">
      </div>
      <div class="preloader-inner">
      </div>
    </div>

    <?php $this->load->view('components/navbar')?>
    
    
    

    <div class="main-content">
      
      <!-- Main Banner -->
      <div class="parallax-banner">
        <!--Content before waves-->
        <div class="inner-header">
          <div class="inner-content">
                <h1>Kinerja Dosen<br> Universitas Nasional PASIM</h1>
                <div class="main-decoration">
                    <img src="<?= base_url()?>assets/images/baner-main-decoration.png" alt="">
                </div>
          </div>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="../../../www.w3.org/1999/xlink.html"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(253,101,143,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(253,101,143,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(253,101,143,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
            </svg>
        </div>
        <!--Waves end-->
      </div>


      <!-- Features -->
      <section class="clients-love">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Rektorat</h2>
              </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
              <div class="owl-testimonials owl-carousel">
                <?php foreach($rektorat as $rt):?>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="image">
                      <img style="width: 75px;height:75px;border-radius:50%" src="<?= base_url()?>assets/gambar/<?= $rt['foto']?>" alt="">
                    </div>
                    <h6 class="mt-3"><?= $rt['nama_rektorat']?></h6>
                    <span><?= $rt['jabatan']?></span>
                    <p>“<?= $rt['kuotes']?>.”</p>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Good Tips -->
      <section class="good-tips">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="section-heading">
                <h1 style="color:#fff"><span style="background-color:#fd658f;padding: 8px;">Keungulan</span> Kinerja Dosen</h1>
              </div>
              <div class="tips-content">
                <ul>
                  <li>
                    <div class="icon">
                      <img src="<?= base_url()?>assets/images/features-icon-01.png" alt="">
                    </div>
                    <div class="right-content">
                      <h4><?= $info['judul_1']?></h4>
                      <p><?= $info['keterangan_1']?>.</p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="<?= base_url()?>assets/images/features-icon-02.png" alt="">
                    </div>
                    <div class="right-content">
                      <h4><?= $info['judul_2']?></h4>
                      <p><?= $info['keterangan_2']?>.</p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="<?= base_url()?>assets/images/features-icon-03.png" alt="">
                    </div>
                    <div class="right-content">
                      <h4><?= $info['judul_3']?></h4>
                      <p><?= $info['keterangan_3']?>.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="right-image">
                <img src="<?= base_url()?>assets/images/semangat.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

     <!-- Fun Facts -->
     <section class="fun-facts">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="count-area-content">
                <div class="count-digit"><?= $this->jumlahdosen?></div>
                <div class="count-title">Dosen</div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="count-area-content">
                <div class="count-digit"><?= $this->jumlahmhs?></div>
                <div class="count-title">Mahasiswa</div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Recent Cases -->
      <section class="recent-cases">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="section-heading">
                <h6>Berita</h6>
                <h2>Kemahasiswaan</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row masonry-layout filters-content normal-col-gap">
                <?php foreach($berita as $brt):?>
                <div class="col-lg-4 masonry-item">
                  <div class="case-item">
                    <a href="<?= base_url('blog-detail/'. $brt['id_berita'])?>">
                    <div class="case-thumb">
                      <img src="<?= base_url()?>assets/gambar/<?= $brt['gambar']?>" alt="">
                    </div>
                    <div class="down-content">
                      <h4><?= $brt['judul']?></h4>
                      <span>Analysis, Digital Marketing</span>
                    </div>
                    </a>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-purple-button">
                <a href="<?= base_url()?>blog">Lihat lebih banyak</a>
              </div>
            </div>
          </div>
        </div>
      </section>
     

    </div>
    

    <?php $this->load->view('components/footer')?>
    

  </body>


</html>
