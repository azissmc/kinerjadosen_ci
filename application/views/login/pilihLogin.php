

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
          
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="left-image">
                                    <div class="main-decoration">
                                        <img src="<?= base_url()?>assets/images/free-quote-left-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="section-heading">
                                    <h2 style="color: #fff">Login Sebagai</h2>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="contact-us">
                                            <h2>Dosen</h2>
                                            <div class="main-white-button mb-3 mt-2">
                                                <a href="<?= base_url()?>login-dosen">Pilih</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="contact-us">
                                            <h2>Mahasiswa</h2>
                                            <div class="main-white-button mt-2">
                                                <a href="<?= base_url()?>login-mahasiswa">Pilih</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    </div>
    

    <section class="footer-content mt-5">
      <div class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Kemahasiswaan</h4>
              </div>
              <p class="about-oxana">Shaman synth retro slow-carb. Vape taxidermy twee, put a bird on it fran xezen celiac unicorn gerstache coloring book.</p>
            </div>
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Useful Links</h4>
              </div>
              <ul class="useful-links">
                <li><a href="#">About Oxana</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
              <ul class="useful-links">
                <li><a href="#">Recent Posts</a></li>
                <li><a href="#">Case Studies</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">FAQ’s</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Get In Touch!</h4>
              </div>
              <ul class="more-info">
                <li>Email: <a href="#">contact@oxana.com</a></li>
                <li>Phone: <a href="#">+1 547 6877 534</a></li>
                <li>Address: <a href="#">342 Better Street Peculiar, KS 64078</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Find Us</h4>
              </div>
              <p>Shaman synth retro slow-carb. Vape taxidermy twee, put a bird.</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-12">
              <div class="sub-footer">
                <p>Copyright © <?= date('Y')?> <a href="<?= base_url('admin.kinerjadosen')?>">Kemahasiswaan Universitas Nasional PASIM</a>. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   

    <!-- Go To Top -->
    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


    <!-- Scripts -->
    <script src="<?= base_url()?>assets/scripts/vendors/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/jquery.hoverIntent.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/jquery.easing.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/wow.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/parallax.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/isotope.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/packery-mode.pkgd.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/owl-carousel.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/jquery.appear.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/jquery.countTo.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/slide-nav.min.js"></script>
    <script src="<?= base_url()?>assets/scripts/vendors/accordions.js"></script>
    <script src="<?= base_url()?>assets/scripts/main1.js"></script>

    <!-- sweetalert -->
    <script type="text/javascript" src="<?= base_url()?>assets/scripts/vendors/sweetalert.min.js"></script>
    

  </body>


</html>
 