

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
            <input type="search" value="" placeholder="Type to search...">
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
                                    <h2 style="color: #fff; font-size:55px">Kontak</h2>
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

      
      <!-- Contact Info -->
      <section class="contact-info">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="info-item">
                <div class="icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <h4>Email Address</h4>
                <p><a href="#">contact@oxana.com</a><br><a href="#">info@oxana.com</a></p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <div class="icon">
                  <i class="fa fa-phone"></i>
                </div>
                <h4>Phone Number</h4>
                <p><a href="#">+1 547 6877 534</a><br><a href="#">001 547 6877 534</a></p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <div class="icon">
                  <i class="fa fa-map-marker"></i>
                </div>
                <h4>Street Address</h4>
                <p><a href="#">342 Better Street<br>Peculiar, KS 64078</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Contact Us -->
      <section class="contact-us">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="inner-content">
                <div class="block-heading">
                  <h4>Say Hello To Us!</h4>
                </div>
                <form id="message" action="<?= base_url('kontak/kirim')?>" method="post">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name">
                      <?= form_error ('name','<small class="text-danger">','</small>')?>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address">
                      <?= form_error ('email','<small class="text-danger">','</small>')?>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                      <?= form_error ('subject','<small class="text-danger">','</small>')?>
                    </div>
                    <div class="col-lg-12">
                      <textarea name="message" rows="6" class="form-control" id="your-message" placeholder="Your Message"></textarea>
                      <?= form_error ('message','<small class="text-danger">','</small>')?>
                    </div>
                    <div class="col-lg-12">
                      <button type="submit" id="form-submit" class="filled-button">Send Message Now</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>


    </div>
    
    <?php $this->load->view('components/footer')?>
    

  </body>


</html>
