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
                                        <img src="<?= base_url()?>assets/images/logo1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="section-heading">
                                    <h2 style="color: #fff">Lupa Password ?</h2>
                                </div>
                            <?php echo $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('lupa-password')?>" method="POST">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 mb-3">
                                        <input type="text" name="email" placeholder="Masukan email..." value="<?= set_value('email')?>" required>
                                        <?= form_error ('email','<small class="text-danger">','</small>')?>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <button style="width:95%; height:42px" type="submit">Reset Password</button>
                                    </div>
                                </div>
                            </form>
                            <p>
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
    

    <?php $this->load->view('components/footer')?>
    <script>
        function berhasil(){
            swal.fire("Berhasil", "Silahkan Login", "success");
        }
    </script>    

  </body>


</html>
 