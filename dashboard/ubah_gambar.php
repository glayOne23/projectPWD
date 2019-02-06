<?php
  include "koneksi.php"
 ?>

<div class="row">
  <?php

  $id = $_GET['id'];
  $query = mysqli_query($conn,"select * from db_gambar where id_gambar = '$id'");
  $ambil = mysqli_fetch_assoc($query);
  $path = "../";

   ?>
  <!-- Header -->
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title">Gambar</h4>
        <p class="card-category">Ubah atau Buat Gambar Baru</p>
      </div>
      <div class="card-body">
  <!--End of Header -->
        <!-- Isi -->
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <!-- id gambar -->
            <div class="col-md-4">
              <div class="form-group">
                <h4>Nama Event</h4>
                <input type="text" class="form-control" name="nama" value="<?php echo $ambil['nama_gambar']; ?>">
              </div>
            </div>
            <!-- nama gambar -->
            <div class="col-md-4">
              <div class="form-group">
                <h4>Waktu Event</h4>
                <input type="text" class="form-control" name="waktu" value="<?php echo $ambil['waktu_gambar']; ?>">
              </div>
            </div>

            <!-- id gambar -->
            <div class="col-md-4">
              <div class="form-group">
                <h4>Tempat</h4>
                <input type="text" class="form-control" name="tempat" value="<?php echo $ambil['tempat_gambar']; ?>">
              </div>
            </div>
          </div>


          <!-- jenis -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <h4>Kategori Gambar</h4>
                <div class="row">

                  <div class="col-md-6">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="event" <?php if($ambil['kategori_gambar'] == "event"){echo "checked";} ?>>Event Sekarang
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="event_lalu" <?php if($ambil['kategori_gambar'] == "event_lalu"){echo "checked";} ?>>Event Lalu
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- akhir jenis -->
            <div class="col-md-6">
              <div class="form-group">
                <h4>Gambar</h4>
              </div>
              <img src="<?php echo $path.$ambil['gambar']; ?> " id="gambar" style="max-width:120px; max-height:70px;padding-bottom:10px;">
              <input type="file" id="upload_gambar" onchange = "show_image.call(this)" name="gambar">
            </div>
          </div>

          <div class="row">
            <!-- id gambar -->
            <div class="col-md-12">
              <div class="form-group">
                <h4>Keterangan Event</h4>
                <input type="textarea" class="form-control" name="keterangan" value="<?php echo $ambil['keterangan_gambar']; ?>">
              </div>
            </div>

          </div>

          <input type="submit" class="btn btn-info pull-right" value="submit" name="submit">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>
</form>

<?php
  error_reporting(E_ALL ^ E_NOTICE);
  $nama = $_POST["nama"];
  $waktu = $_POST["waktu"];
  $tempatnya = $_POST["tempat"];
  $kategori = $_POST["kategori"];
  $gambar = $_FILES['gambar']['name'];
  $keterangan = $_POST["keterangan"];
  $tempatsql = 'images/';
  $targetFilePath = $tempatsql.$gambar;
  $targetFilePath2 = $tempatfolder.$gambar;

  if (isset($_POST["submit"])) {

    if ($targetFilePath == $tempatsql) {
      $sql = "update db_gambar set nama_gambar='$nama', waktu_gambar='$waktu', tempat_gambar='$tempatnya', kategori_gambar='$kategori', keterangan_gambar='$keterangan'  where id_gambar=$id";
    }
    elseif (isset($gambar)) {
      $sql = "update db_gambar set nama_gambar='$nama', waktu_gambar='$waktu', tempat_gambar='$tempatnya', kategori_gambar='$kategori', gambar='$targetFilePath' keterangan_gambar='$keterangan'  where id_gambar=$id";
      unlink($path.$ambil['gambar']);
      move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath2);
      $tempatfolder = '../images/';
    }
    echo "$sql";
    mysqli_query($conn, $sql) or die(mysqli_error($sql));
?>
  <script>
    window.location="template.php?page=gambars";
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
  document.getElementById("a_gambar").className +=" active";
</script>
