<?php
include "../koneksi.php";
$del = $_GET['del'];
$sql = "delete from db_ticket where id_event='$del' ";
$query = mysqli_query($conn,$sql);
if($query){
	?>
	<script>alert("Data Berhasil Dihapus");</script>
	<?php
	header('Location:../template.php?page=tikets');
}
?>
