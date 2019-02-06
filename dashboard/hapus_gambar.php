<?php
  include "koneksi.php";

  $tempatfolder = '../';
  $id_gambar = $_GET['id'];
  $query = mysqli_query($conn,"select * from db_gambar where id_gambar = '$id_gambar'");
      			$ambil = mysqli_fetch_assoc($query);
      			unlink($tempatfolder.$ambil['gambar']);
            mysqli_query($conn,"delete from db_gambar where id_gambar = '$id_gambar' ");
?>
<script>
  window.location="template.php?page=gambars";
  alert("data berhasil dihapus");
</script>
