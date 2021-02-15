

  <body>
    
    <!-- Preloader -->
    <div id="js-preloader" class="js-preloader">
      <div class="content">
        <img src="<?= base_url()?>assets/gambar/ltitle.png" alt="">
      </div>
      <div class="preloader-inner">
      </div>
    </div>

    
    
    

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
                                        <div class="fixed-header-logo">
                                            <a style="width:15px" href="<?= base_url()?>home"><img src="<?= base_url()?>assets/gambar/logofooter.png" alt=""></a>
                                        </div>
                                        <img src="<?= base_url()?>assets/images/free-quote-left-image.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="section-heading">
                                    <h2 style="color: #fff">Login Admin</h2>
                                </div>
                            <?php echo $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('login-admin')?>" method="POST">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 mb-3">
                                        <input type="text" name="username" placeholder="Masukan username..." value="<?= set_value('username')?>" required>
                                        <?= form_error ('username','<small class="text-danger">','</small>')?>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <input type="password" name="password" placeholder="Masukan password..." required>
                                    </div>
                                    <?= form_error ('password','<small class="text-danger">','</small>')?>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <button style="width:95%; height:42px" type="submit">Masuk</button>
                                    </div>
                                </div>
                            </form>
                            <p>
                                <span style="color: #fff">Lupa <a href="#" style="color:black">password </a>?</span>
                                <span class="ml-3" style="color: #fff">Belum punya <a href="<?= base_url()?>Regis" style="color:black">akun</a>?</span>
                            </p>
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
    <script>
        function berhasil(){
            swal.fire("Berhasil", "Silahkan Login", "success");
        }
    </script>    

  </body>


</html>
 