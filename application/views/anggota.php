

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
      
      <!-- Page Heading -->
        <div class="parallax-banner">
            <!--Content before waves-->
            <div class="inner-header">
                <div class="inner-content" style="margin-top: -50px">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="section-heading">
                                    <h2 style="color: #fff; font-size:55px">Anggota</h2>
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

      
      <!-- Recent Cases -->
      <section class="blog-page">
        <div class="container">
          <div class="row">
              <div class="blog-posts">
                  <div class="col-lg-12">
                    <div class="comments">
                      <div class="blog-heading">
                        <h4><?= $this->jumlahanggota?> Anggota</h4>
                      </div>
                      <ul>
                        <?php foreach($data as $dt):
                          if($dt['foto'] == "" || empty($dt['foto'])){
                            $foto = 'comavatar.jpg';
                          }else{
                            $foto = $dt['foto'];
                          } 
                        ?>
                        <li>
                          <div class="comment-thumb">
                            <img style="width:55px;height:55px;border-radius:8px" src="<?= base_url()?>assets/gambar/<?= $foto?>" alt="">
                          </div>
                          <div class="right-content">
                            <h4><?= $dt['nama']?> <span><?= $dt['hak_akses']?></span></h4>
                          </div>
                        </li>
                        <?php endforeach;?>
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