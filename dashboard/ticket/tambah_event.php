
<form action="ticket/insert_event.php" method="get">
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
                <input type="text" class="form-control" name="nama_event">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Batas Peserta</label>
                <input type="text" class="form-control" name="batas_peserta">
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
  </div>
</div>
</form>


<script type="text/javascript">
  document.getElementById("a_tiket").className +=" active";
</script>
