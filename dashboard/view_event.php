

<?php
include "koneksi.php";
$no=1;
$sql ="select * from db_ticket ";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($query)){
	echo "
		<tr>
			<td>$no</td>
			<td>$data[id_event]</td>
			<td>$data[nama_event]</td>
			<td>$data[waktu_event]</td>
			<td>$data[harga_event]</td>
			<td>$data[sisa_tiket]</td>
			<td>
			?><?php
                  <a class="text-info" href="template.php?page=ubah_tiket"><i class="material-icons" data-notify="icon">loop</i> Ubah</a>
                  |
                  <a class="text-info" href="#"><i class="material-icons" data-notify="icon">delete</i> Hapus</a>
             </td>
		</tr>";
	$no++;
}
?>