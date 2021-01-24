
<style type="text/css">
    .slc{
        width: 100%;
        height: 60px;
        background-color: #f0f6ff;
        border: none;
        border-radius: 30px;
        outline: none;
        padding: 0px 20px;
        color: #36334c;
        font-size: 15px;
        font-weight: 400;
        -webkit-transition: all .3s;
        transition: all .3s;
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
                                    <h2 style="color: #fff">Welcome <br>belum punya akun? ayo daftar</h2>
                                </div>
                            <form action="<?= base_url('regis')?>" method="post">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" name="nim" placeholder="Masukan nim..." value="<?= set_value('nim')?>" >
                                        <?= form_error ('nim','<small class="text-danger">','</small>')?>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" name="nama" placeholder="Masukan nama..." value="<?= set_value('nama')?>">
                                        <?= form_error ('nama','<small class="text-danger">','</small>')?>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 mb-3">
                                        <input type="email" name="email" placeholder="Masukan email..." value="<?= set_value('email')?>">
                                        <?= form_error ('email','<small class="text-danger">','</small>')?>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 mb-3">
                                        <select class="slc" name="id_fakultas">
                                            <option value="">Pilih Fakultas</option>
                                            <?php foreach($fakultas as $fkt):?>
                                            <option value="<?= $fkt['id_fakultas']?>"><?= $fkt['nama']?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <?= form_error ('id_fakultas','<small class="text-danger">','</small>')?>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <select class="slc" name="id_jurusan">
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach($jurusan as $jr):?>
                                            <option value="<?= $jr['id_jurusan']?>"><?= $jr['jurusan']?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <?= form_error ('id_jurusan','<small class="text-danger">','</small>')?>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 mb-3">
                                        <input type="password" name="password" placeholder="Masukan password..." >
                                        <?= form_error ('password','<small class="text-danger">','</small>')?>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="password" name="con_pass" placeholder="Masukan konfirmasi password..." >
                                        <?= form_error ('con_pass','<small class="text-danger">','</small>')?>
                                    </div>
                                </div>
                                
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <button type="submit" style="width:95%; height:42px">Daftar</button>
                                    </div>
                                </div>
                            </form>
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
    

  </body>


</html>
 