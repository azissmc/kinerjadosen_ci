
<style>
    .gambar{
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
</style>
    <body>
    
        <!-- Preloader -->
        <div id="js-preloader" class="js-preloader">
            <div class="content">
                <img src="<?= base_url()?>assets/gambar/ltitle.png" alt="">
            </div>
            <div class="preloader-inner"></div>
        </div>

        <?php $this->load->view('components/navbar')?>
        
        

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
                                        <h2 style="color: #fff; font-size:55px">Komentar</h2>
                                    </div>
                                </div>
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
                    <div class="blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post post-details">
                                    <div class="down-content">
                                        <img class="gambar" src="<?= base_url()?>assets/images/author-01.png" alt=""><h4><?= $postingan['nama']?></h4>
                                        <ul>
                                            <li><small><?= date("F d, Y", strtotime($postingan['tanggal']))?></small></li>
                                        </ul>
                                        <blockquote>“<?= $postingan['informasi']?>.“</blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="comments">
                                    <div class="blog-heading">
                                        <h4><?= $this->jumlahkomentar?> komentar</h4>
                                    </div>
                                        <ul>
                                            <?php foreach($komentar as $km):
                                                if($km['foto'] == "" || empty($km['foto'])){
                                                    $foto = 'comavatar.jpg';
                                                }else{
                                                    $foto = $km['foto'];
                                                }    
                                            ?>
                                            <li>
                                                <div class="comment-thumb">
                                                    <img style="width:55px;height:55px;border-radius:50%" src="<?= base_url()?>assets/gambar/<?= $foto?>" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4><?= $km['nama']?> <span>Febuary 15, 2020</span></h4>
                                                    <p><?= $km['komentar']?>.</p>
                                                </div>
                                            </li>
                                            <?php endforeach;?>
                                        </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="leave-comment">
                                    <div class="blog-heading">
                                        <h4>Beri Komentar disini</h4>
                                    </div>
                                    <form id="comment" action="#" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" id="form-submit" class="filled-button">Kirim Komentar</button>
                                            </div>
                                        </div>
                                    </form>
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
