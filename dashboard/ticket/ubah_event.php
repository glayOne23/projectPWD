<?php
  error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
  include "koneksi.php";
  $upd = $_GET['upd'];
  $sql = "select * from db_ticket where id_event = '$upd'";
  $query = mysqli_query($conn , $sql);
  $ambil = mysqli_fetch_array($query);
 ?>
<form action=" ticket/update_event.php" method="get">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title">Event</h4>
        <p class="card-category">Ubah atau Buat Event Baru</p>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Nama Event</label>
                <input type="hidden" name="id_event" value="<?php echo $ambil['id_event'] ?>">
                <input type="text" class="form-control" name="nama_event" value="<?php echo $ambil['nama_event'] ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Batas Peserta</label>
                <input type="text" class="form-control" name="batas_peserta" value="<?php echo $ambil['sisa_tiket'] ?>">
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-info pull-right" name="submit" value="submit">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>
</form>




<script type="text/javascript">
  document.getElementById("a_tiket").className +=" active";
</script>
