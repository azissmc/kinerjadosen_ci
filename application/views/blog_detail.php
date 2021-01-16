

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
      <!-- Page Heading -->
      <div class="parallax-banner">
            <!--Content before waves-->
            <div class="inner-header">
                <div class="inner-content" style="margin-top: -50px">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="section-heading">
                                    <h2 style="color: #fff; font-size:55px">Berita Detail</h2>
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
            <div class="col-lg-8">
              <div class="blog-posts">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="blog-post post-details">
                      <div class="blog-thumb">
                        <img src="<?= base_url()?>assets/gambar/<?= $berita['gambar']?>" alt="">
                      </div>
                      <div class="down-content">
                        <ul>
                          <li>Admin</li>
                          <li><?= date("F d, Y", strtotime($berita['created_date']))?></li>
                        </ul>
                        <h4><?= $berita['judul']?></h4>
                        <p class="first-text">Craft beer cloud bread photo booth you probably haven't heard of them beard la croix. Microdosing tousled twee viral thun dercats austin. Unicorn chambray tofu meditation hexagon artisan, fingerstache chillwave microdosing. Poke yuccie fingers tache hoodie tumeric wolf, roof party ennui blue bottle. Yuccie typewriter trust fund salvia chillwave 8-bit pour-over sustain able fingerstache biodiesel man bun tattooed.</p>
                        <blockquote>“Flexitarian paleo celiac VHS viral. Kale chips subway tile jianbing four banjo gentrify pook heirloom rony flexitarian fixie food truck.“</blockquote>
                        <p class="second-text">Banh mi flannel copper mug meggings, leggings tote bag kombucha cray schlitz actually succulents waistcoat yuccie. Flan nel artisan try-hard, tbh farm-to-table pickled tote chambray mumblecore semiotics green juice adaptogen.</p>
                        <p>Cold-pressed affogato pork belly lomo, leggings butcher hell of keffiyeh ethical austin disrupt. Sartorial tacos intelligentsia knausgaard, unicorn kale chips brooklyn cardigan four dollar toast microdosing bespoke. Mumblecore fanny pack tousled tumeric pop-up yuccie sustainable.</p>
                        <div class="share-tags">
                          <div class="row">
                            <div class="col-lg-6">
                              <ul class="tags">
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Web Analysis</a></li>
                              </ul>
                            </div>
                            <div class="col-lg-6">
                              <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="blog-sidebar">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="blog-widget recent-posts">
                      <div class="blog-heading">
                        <h4>Berita Populer</h4>
                      </div>
                      <ul>
                        <?php foreach($populer as $pop):?>
                        <li>
                          <a href="<?= base_url('blog-detail/'. $pop['id_berita'])?>">
                            <div class="blog-thumb">
                              <img style="width:100%;height:145px" src="<?= base_url()?>assets/gambar/<?= $pop['gambar']?>" alt="">
                            </div>
                            <div class="right-content">
                              <h6><?= $pop['judul']?></h6>
                              <span><?= date("F d, Y", strtotime($pop['created_date']))?></span>
                            </div>
                          </a>
                        </li>
                        <?php endforeach;?>
                      </ul>
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
