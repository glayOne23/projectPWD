<?php
  include "koneksi.php"
 ?>
<form action="template.php?page=tambah_blog" method="post" enctype="multipart/form-data">
<div class="row">
  <!-- Header -->
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title">Blog</h4>
        <p class="card-category">Ubah atau Buat Blog Baru</p>
      </div>
      <div class="card-body">
  <!--End of Header -->
        <!-- Isi -->
          <div class="row">
            <!-- id gambar -->
            <div class="col-md-12">
              <div class="form-group">
                <h4>Judul Blog</h4>
                <input type="text" class="form-control" name="judul">
              </div>
            </div>
          </div>
          <!-- jenis -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <h4>Jenis Blog</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="teknologi">Teknologi
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="event">Event
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                     <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="budaya">Budaya
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="sosial">Sosial
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                     </div>
                     <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="ekonomi">Ekonomi
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                     </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="seni">Seni
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" value="music">Music
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                   </div>
                   <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" value="makanan">Makanan
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                   </div>
                   <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" value="lain-lain">Lain-Lain
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                   </div>
                </div>
               </div>
              </div>
            </div>
          </div>
            <!-- akhir jenis -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <h4>Gambar Blog</h4>
              </div>
              <img src="" id="gambar" style="max-width:120px; max-height:70px;padding-bottom:10px;">
              <input type="file" id="upload_gambar" onchange = "show_image.call(this)" name="gambar_blog">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h4 style="padding-top:30px;">Isi Blog</h4>
              <textarea id="mytextarea" style="height:400px;" name="isi"></textarea>
            </div>
          </div>
          <input type="submit" class="btn btn-info pull-right" value="submit" name="submit">
          <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
</form>

<?php
  error_reporting(E_ALL ^ E_NOTICE);
  $judul = $_POST["judul"];
  $isi = $_POST["isi"];
  $kategori = $_POST["kategori"];
  $gambar_blog = $_FILES['gambar_blog']['name'];
  $tempat = 'assets/img/';
  $targetFilePath = $tempat.$gambar_blog;

  if (isset($_POST["submit"])) {
    $sql = "insert into db_blog(judul_blog, isi_blog, id_kategori, gambar_blog) values ('$judul', '$isi','$kategori', '$targetFilePath')";
    move_uploaded_file($_FILES["gambar_blog"]["tmp_name"], $targetFilePath);
    mysqli_query($conn, $sql) or die(mysqli_error($sql));
?>
  <script>
    // md.showNotification('top','center');
    window.location="template.php?page=blogs";
    alert("data berhasil diupload");
  </script>
<?php
  }
?>


<script type="text/javascript">
  function show_image(){
    if (this.files && this.files[0]){
      var obj = new FileReader();
      obj.onload = function(data){
        var image = document.getElementById('gambar');
        image.src = data.target.result;
        image.style.display = "block";
      }
      obj.readAsDataURL(this.files[0]);
    }
  }
</script>

<script type="text/javascript">
  document.getElementById("a_blog").className +=" active";
</script>
