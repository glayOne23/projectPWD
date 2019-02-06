<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Gambar</h4>
        <p class="card-category">Resource gambar untuk web</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                No
              </th>
              <th>
                Judul
              </th>
              <th>
                Kategori
              </th>
              <th>
                Gambar
              </th>
              <th>
                Tempat
              </th>
              <th>
                Aksi
              </th>
            </thead>
            <tbody>
              <?php
                $no_urut = 0;
                $query = "select * from db_gambar";
								$hasil = mysqli_query($conn, $query);

									if ( mysqli_num_rows($hasil) > 0){
										while ($data = mysqli_fetch_assoc($hasil)) {
											$no_urut++;
											echo
											"
											<tr>
				  	   					<td>".$no_urut."</td>
                        <td>".$data['nama_gambar']. "</td>
  									    <td>".$data['kategori_gambar']."</td>
                        <td><img src='../".$data['gambar']."' alt='' style='max-width:120px; max-height:70px;'> </td>
                        <td>".$data['tempat_gambar']."</td>
                        <td>
                        <a class='text-info' href='template.php?page=ubah_gambar&id=".$data['id_gambar']."'><i class='material-icons' data-notify='icon'>loop</i> Ubah</a>
                        <a class='text-info' href='hapus_gambar.php?id=" .$data['id_gambar']."'><i class='material-icons' data-notify='icon'>delete</i> Hapus</a>
                        </td>
					  						</tr>";
										}
								  }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <a href="template.php?page=tambah_gambar"><button class="btn btn-info"><i class="material-icons" data-notify="icon">add</i>Tambah Gambar</button></a>
  </div>
</div>
<script type="text/javascript">
  document.getElementById("a_gambar").className +=" active";
</script>
