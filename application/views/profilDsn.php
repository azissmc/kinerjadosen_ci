<style>
      .tx{
        color:white;
      }
    </style>

    <div class="main-content">
      
      <!-- Page Heading -->
      <!-- Page Heading -->
        <div class="parallax-banner">
            <!--Content before waves-->
            <div class="inner-header">
                <div class="inner-content" style="margin-top: -50px">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="section-heading">
                                    <h2 style="color: #fff; font-size:55px">Profil</h2>
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
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(253,101,143,0.7)" />
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
          <div class="col-lg-4">
              <div class="blog-sidebar">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="blog-widget about-me" style="background:url('<?= base_url('assets/images/free-quote.jpg')?>')">
                      <div class="about-thumb">
                        <?php 
                          if($dsn['foto'] == "" || empty($dsn['foto'])){
                            $foto = 'guest.png';
                          }else{
                            $foto = $dsn['foto'];
                          }
                        ?>
                        <img style="width: 150px;height:150px; border-radius:50%" src="<?= base_url()?>gambar/<?= $foto?>" alt="">
                      </div>
                      <h4 class="tx"><?= $dsn['nama']?></h4>
                      
                      <ul>
                        <li class="menu-item free-quote">
                            <div class="main-pink-button">
                                <a href="<?= base_url('ubah-fotodsn')?>">Ubah Foto</a>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="blog-widget categories" style="background:url('<?= base_url('assets/images/free-quote.jpg')?>')">
                      <div class="blog-heading">
                        <h4>Categories</h4>
                      </div>
                      <ul>
                        <li class="tx"><a href="#">Web Analysis<span>(2)</span></a></li>
                        <li><a href="#">Digital Marketing<span>(5)</span></a></li>
                        <li><a href="#">Creative Agencies<span>(4)</span></a></li>
                        <li><a href="#">Branding Design<span>(8)</span></a></li>
                        <li><a href="#">Graphic Design<span>(9)</span></a></li>
                        <li><a href="#">Web Re-Design<span>(11)</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="blog-posts">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="leave-comment" style="background:url('<?= base_url('assets/images/free-quote.jpg')?>')">
                      <div class="blog-heading">
                        <h4 class="tx">Biodata</h4>
                      </div>
                      <form action="<?= base_url('Profil/ubahDsn/'. $dsn['id_user'])?>" method="post">
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12">
                            <h6 class="tx">NIDN/ NIK</h6>
                            <input name="nidn" type="text" class="form-control" id="nidn" placeholder=" nidn" value="<?= $dsn['nidn']?>" required="" readonly>
                          </div>
                          <div class="col-lg-6 col-md-12 col-sm-12">
                            <h6 class="tx">Nama</h6>
                            <input name="nama" type="text" class="form-control" id="nama" placeholder="nama" value="<?= $dsn['nama']?>" required="">
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <h6 class="tx">Email</h6>
                            <input name="email" type="email" class="form-control" id="email" placeholder="email" value="<?= $dsn['email']?>" required="">
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <h6 class="tx">Kuotes</h6>
                            <textarea name="kuotes" required><?= $dsn['kuotes']?></textarea>
                          </div>
                          <div class="col-lg-12">
                            <button type="submit" class="filled-button">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
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
