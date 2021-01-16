

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
    
    <!-- Search -->
    <div id="search">
      <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Type to search..." required="">
            <button type="submit" class="primary-button"><i class="fa fa-search"></i></button>
        </form>
    </div>
    

    <div class="main-content">
      
        <!-- Main Banner -->
        <div class="parallax-banner">
            <!--Content before waves-->
            <div class="inner-header">
                <div class="inner-content" style="margin-top: -50px">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="section-heading">
                                    <h2 style="color: #fff; font-size:55px">About</h2>
                                </div>
                            </div>
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
      
      <!-- About Tips -->
      <section class="about-tips">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="section-heading">
                <h2><?= $about1['judul']?></h2>
              </div>
              <p><?= $about1['keterangan']?>.</p>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="video-thumb">
                <img src="<?= base_url()?>assets/gambar/<?= $about1['gambar']?>" alt="">
                <br><br><br>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Our Team -->
      <section class="our-team">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Kemahasiswaan</h2>
              </div>
            </div>
            <?php foreach($about as $ab):?>
            <div class="col-lg-3">
              <div class="team-item">
                <div class="team-thumb">
                  <div class="hover-effect">
                    <ul>
                      <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                  </div>
                  <img src="<?= base_url()?>assets/gambar/<?= $ab['foto']?>" alt="">
                </div>
                <div class="down-content">
                  <h4><?= $ab['nama']?></h4>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>

    </div>
    
    <?php $this->load->view('components/footer')?>
    

  </body>


</html>
