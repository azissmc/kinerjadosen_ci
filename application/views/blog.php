

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
      <!-- Page Heading -->
      <div class="parallax-banner">
            <!--Content before waves-->
            <div class="inner-header">
                <div class="inner-content" style="margin-top: -50px">
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col-lg-6 align-self-center">
                                <div class="section-heading">
                                    <h2 style="color: #fff; font-size:55px">Berita</h2>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-6 align-self-center">
                                <div class="left-image">
                                    <div class="main-decoration">
                                        <img style="width: 290px" src="<?= base_url()?>assets/images/semangat.png" alt="">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>    
                </div>
            </div>
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
        </div>
     

      <!-- Recent Cases -->
      <section class="recent-cases">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="section-heading">
                <h6>Berita</h6>
                <h2>Kemahasiswaan Universitas Nasional PASIM</h2>
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
                      <h5><?= $brt['judul']?></h5>
                      <span>kemahasiswaan</span>
                    </div>
                    </a>
                  </div>
                </div>
              <?php endforeach;?>
              </div>
            </div>
          </div>
        </div>
      </section>

        <section class="blog-page">
            <div class="container">
                <div class="blog-posts">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="blog-pagination">
                            <ul>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>     

    </div>
    

    <?php $this->load->view('components/footer')?>
    

  </body>


</html>
