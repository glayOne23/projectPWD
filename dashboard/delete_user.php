<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";
$del = $_GET['del'];
$sql = "delete from db_user where id_user='$del' ";
$query = mysqli_query($conn,$sql);
if($query){
	?>
	<script>alert("Data Berhasil Dihapus");</script>
	<?php
	header('Location:template.php?page=users');
}
?>