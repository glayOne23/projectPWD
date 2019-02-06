<?php include "../koneksi.php";?>

<?php
  $nama_event = $_GET['nama_event'];
  $batas_peserta = $_GET['batas_peserta'];
  $submit = $_GET['submit'];
  if ($submit) {
    $sql = "insert into db_ticket(nama_event, sisa_tiket)
    values ('$nama_event','$batas_peserta') ";
    $run=mysqli_query($conn, $sql);
    if ($run) {
      ?>
      <script type="text/javascript"> alert ('Data Berhasil di masukan');
      document.location='../template.php?page=tikets';
      </script>

      <?php
    }
  }

?>
