<?php
  include "koneksi.php"
 ?>
<form action="template.php?page=tambah_gambar" method="post" enctype="multipart/form-data">
<div class="row">
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
          <div class="row">
            <!-- id gambar -->
            <div class="col-md-4">
              <div class="form-group">
                <h4>Nama Event</h4>
                <input type="text" class="form-control" name="nama">
              </div>
            </div>
            <!-- nama gambar -->
            <div class="col-md-4">
              <div class="form-group">
                <h4>Waktu Event</h4>
                <input type="text" class="form-control" name="waktu">
              </div>
            </div>

            <!-- id gambar -->
            <div class="col-md-4">
              <div class="form-group">
                <h4>Tempat</h4>
                <input type="text" class="form-control" name="tempat">
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
                        <input class="form-check-input" type="radio" name="kategori" value="event">Event Sekarang
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="kategori" value="event_lalu">Event Lalu
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
              <img src="" id="gambar" style="max-width:120px; max-height:70px;padding-bottom:10px;">
              <input type="file" id="upload_gambar" onchange = "show_image.call(this)" name="gambar">
            </div>
          </div>

          <div class="row">
            <!-- id gambar -->
            <div class="col-md-12">
              <div class="form-group">
                <h4>Keterangan Event</h4>
                <input type="textarea" class="form-control" name="keterangan">
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
  $tempatfolder = '../images/';
  $targetFilePath = $tempatsql.$gambar;
  $targetFilePath2 = $tempatfolder.$gambar;

  if (isset($_POST["submit"])) {
    $sql = "insert into db_gambar(nama_gambar, waktu_gambar, tempat_gambar, kategori_gambar, gambar, keterangan_gambar)
            values ('$nama','$waktu','$tempatnya','$kategori', '$targetFilePath', '$keterangan')";
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath2);
    mysqli_query($conn, $sql) or die(mysqli_error($sql));
?>
  <script>
    // md.showNotification('top','center');
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
