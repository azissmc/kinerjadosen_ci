<style>
      .tx{
        color:white;
      }
      .image{
    min-height: 200px;
    width: 50%;
    margin: auto;
    object-fit: cover;
    padding: 20px;
    margin-top: 20px;
}.image img{
    width: 100%;
}.tombol{
    margin-top: 20px;
    padding: 20px;
    text-align: center;
}button{
    padding: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    background: unset;
    border-radius: 4px;
    border: 1px solid #dedede;
    cursor: pointer;
}.btn-success{
    background: green;
    color: white;
}.btn-danger{
    background: red;
    color: white;
}.btn-primary{
    background: blue;
    color: white;
}p{
    color: grey;
    font-size: 12px;
    text-align: center;

}.head{
    background: #00f;
    padding: 20px;
    border-bottom: 1px solid #c8c8c8;
    
}.head h2{
    margin: 0px;
    font-weight: 300;
}.fot{
    padding: 10px;
    border-top: 1px solid #c8c8c8;
    font-size: 12px;
}.kata{
    padding-top: 20px;
    padding-left: 20px;
}.kata p{
    color: black;
    font-size: 15px;
    text-align: left;
}
    </style>

    <div class="main-content">
        <div class="parallax-banner">
            <!--Content before waves-->
            
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
              <div class="blog-posts">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <?php 
                        if($dsn['foto'] == "" || empty($dsn['foto'])){
                            $foto = 'guest.png';
                        }else{
                            $foto = $dsn['foto'];
                        }
                    ?>
                    <div class="leave-comment" style="background:url('<?= base_url('assets/images/free-quote.jpg')?>')">
                        <?= form_open_multipart('ubah-foto2')?>
                          <div>
                              <h2 style="color: #ffff;">Upload Gambar ukuran 1x1</h2>  
                          </div>  
                          <div class="kata">
                              <p class="tx">Gambar yang dipilih nantinya akan muncul dibawah ini.</p>
                          </div>
                          <div class="image">
                              <img style="width:285px;height:280px" src="<?= base_url()?>gambar/<?= $foto?>" id="preview">
                          </div>
                          <p class="tx">Klik tombol pilih file untuk memilih file dari komputer anda.</p>
                          <div>
                                <input type="hidden" name="gambar_lama" value="<?= $foto?>"> 
                                <input style="margin-top: 2px" type="file" name="foto" id="foto" onchange="tampilkanPreview(this,'preview')">
                          </div>
                          <div class="fot">
                              <button type="submit" class="btn btn-primary btn-shadow-lg btn-ellipse">Simpan</button>
                              <a href="<?= base_url('profildsn')?>" class="tx">Kembali</a>
                          </div>
                        <?= form_close();?>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </section>
      

    </div>
    <script type="text/javascript">
        function tampilkanPreview(foto,idpreview)
        {
            var gb = foto.files;
            for (var i = 0; i < gb.length; i++)
            {
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview=document.getElementById(idpreview);
                var reader = new FileReader();
                if (gbPreview.type.match(imageType))
                {
                //jika tipe data sesuai
                preview.file = gbPreview;
                reader.onload = (function(element)
                {
                    return function(e)
                    {
                    element.src = e.target.result;
                    };
                })(preview);
                //membaca data URL gambar
                reader.readAsDataURL(gbPreview);
                }
                else
                {
                    //jika tipe data tidak sesuai
                    alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
                }
            }
        }
    </script>
    

  </body>

</html>
