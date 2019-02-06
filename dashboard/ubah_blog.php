<?php
  include "koneksi.php"
 ?>
<div class="row">
  <?php
    // error_reporting(E_ALL ^ E_NOTICE);
    $id_blog = $_GET['id'];
    $query = mysqli_query($conn,"select * from db_blog where id_blog = '$id_blog'");
    $ambil = mysqli_fetch_assoc($query);
   ?>

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
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <!-- id gambar -->
            <div class="col-md-12">
              <div class="form-group">
                <h4>Judul Blog</h4>
                <input type="text" class="form-control" name="judul" value="<?php echo $ambil['judul_blog']; ?>">
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
                        <input class="form-check-input" type="radio" name="kategori" value="teknologi" <?php if($ambil['id_kategori'] == "teknologi"){echo "checked";} ?> >Teknologi
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="event" <?php if($ambil['id_kategori'] == "event"){echo "checked";} ?> >Event
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                     <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="budaya" <?php if($ambil['id_kategori'] == "budaya"){echo "checked";} ?> >Budaya
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="sosial" <?php if($ambil['id_kategori'] == "sosial"){echo "checked";} ?> >Sosial
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                     </div>
                     <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="ekonomi" <?php if($ambil['id_kategori'] == "ekonomi"){echo "checked";} ?> >Ekonomi
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                     </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="seni" <?php if($ambil['id_kategori'] == "seni"){echo "checked";} ?>>Seni
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" value="music" <?php if($ambil['id_kategori'] == "music"){echo "checked";} ?>>Music
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                   </div>
                   <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" value="makanan" <?php if($ambil['id_kategori'] == "makanan"){echo "checked";} ?>>Makanan
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                   </div>
                   <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" value="lain-lain" <?php if($ambil['id_kategori'] == "lain-lain"){echo "checked";} ?>>Lain-Lain
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
              <img src="<?php echo $ambil['gambar_blog']; ?>" alt="" id="gambar" style="max-width:120px; max-height:70px;padding-bottom:10px;">
              <input type="file" id="upload_gambar" onchange = "show_image.call(this)" name="gambar">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h4 style="padding-top:30px;">Isi Blog</h4>
              <textarea id="mytextarea" style="height:400px;" name="isi"><?php echo $ambil['isi_blog']; ?></textarea>
            </div>
          </div>
          <input type="submit" class="btn btn-info pull-right" value="submit" name="submit">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
  error_reporting(E_ALL ^ E_NOTICE);
  $judul = $_POST["judul"];
  $isi = $_POST["isi"];
  $kategori = $_POST["kategori"];
  $gambar_blog = $_FILES['gambar']['name'];
  $tempat = 'assets/img/';
  $targetFilePath = $tempat.$gambar_blog;

  if (isset($_POST["submit"])) {

    if ($targetFilePath == $tempat) {
      $sql = "update db_blog set judul_blog='$judul', isi_blog='$isi', id_kategori='$kategori' where id_blog=$id_blog";
    }
    elseif (isset($gambar_blog)) {
      $sql = "update db_blog set judul_blog='$judul', isi_blog='$isi', id_kategori='$kategori', gambar_blog='$targetFilePath' where id_blog=$id_blog";
      unlink($ambil['gambar_blog']);
      move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath);
    }

    mysqli_query($conn, $sql) or die(mysqli_error($sql));
?>
  <script>
    // md.showNotification('top','center');
    window.location="template.php?page=blogs";
    alert("data berhasil diubah");
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
