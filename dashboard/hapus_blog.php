<?php
  include "koneksi.php";

  $id_blog = $_GET['id'];
  $query = mysqli_query($conn,"select * from db_blog where id_blog = '$id_blog'");
      			$ambil = mysqli_fetch_assoc($query);
      			unlink($ambil['gambar_blog']);
            mysqli_query($conn,"delete from db_blog where id_blog = '$id_blog' ");
?>
<script>
  window.location="template.php?page=blogs";
  alert("data berhasil dihapus");
</script>
