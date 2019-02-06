<?php include "../koneksi.php";?>

<?php
  $upd = $_GET['id_event'];
  $nama_event = $_GET['nama_event'];
  $batas_peserta = $_GET['batas_peserta'];
  $submit = $_GET['submit'];
  if ($submit) {
    $sql = "update db_ticket set nama_event='$nama_event', sisa_tiket='$batas_peserta' where id_event='$upd' ";
    $run=mysqli_query($conn, $sql);
    if ($run) {
      ?>
      <script type="text/javascript"> alert ('Data Berhasil di update');
       document.location='../template.php?page=tikets';
      </script>

      <?php
    }
  }

?>
