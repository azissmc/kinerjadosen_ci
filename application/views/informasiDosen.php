<style>
    .gambar{
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
</style>
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
                                    <h2 style="color: #fff; font-size:55px">Informasi</h2>
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
                <div class="blog-sidebar">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-sm-6 col-xs-6">
                            <div class="blog-widget search">
                                <form>
                                    <a href="<?= base_url('tambah-informasi')?>">
                                        <input type="search" value="" placeholder="Buat Informasi disini.">
                                        <button class="primary-button"><i class="fa fa-paper-plane-o"></i></button>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-posts">
                    <div class="row">
                        <?php foreach($informasi as $inf):
                            if($inf['foto'] == "" || empty($inf['foto'])){
                                $foto = 'guest.png';
                              }else{
                                  $foto = $inf['foto'];
                              }
                        ?>
                        
                        <div class="col-lg-12">
                            <div class="blog-post post-details">
                                <div class="down-content">
                                    <img style="width:55px;height:55px;border-radius:50%" src="<?= base_url()?>gambar/<?= $foto?>" alt=""><h4><?= $inf['nama']?></h4>
                                    <ul>
                                        <li><small><?= date("F d, Y", strtotime($inf['tanggal']))?></small></li>
                                    </ul>
                                    <blockquote>“<?= $inf['informasi']?>.“</blockquote>
                                    <div class="share-tags">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul class="tags">
                                                    <li><a href="<?= base_url('komentar/').$inf['id_informasi']?>">Komentar <sup><?php echo $this->db->get_where('komentar',array('id_informasi'=>$inf['id_informasi']))->num_rows(); ?></sup></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <div class="col-lg-12">
                            <div class="blog-post post-details">
                                <div class="down-content">
                                    <img class="gambar" src="<?= base_url()?>assets/images/author-01.png" alt=""><h4>Kemahasiswaan Universitas Nasional PASIM</h4>
                                    <ul>
                                        <li><small>Febuary 15, 2020</small></li>
                                    </ul>
                                    <blockquote>“Selamat Datang di Informasi Kemahasiswaan Universitas Nasional PASIM.“</blockquote>
                                    <div class="share-tags">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul class="tags">
                                                    <li><a href="javascript:void(0);">Komentar <sup>0</sup></a></li>
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
        </section>
    </div>
    
    <?php $this->load->view('components/footer')?>
    

</body>

</html>
