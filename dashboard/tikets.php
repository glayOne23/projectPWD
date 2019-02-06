
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Tiket</h4>
        <p class="card-category">Daftar Event dan Tiket tersedia</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                No.
              </th>
              <th>
                Nama Event
              </th>
              <th>
                Batas Peserta
              </th>
              <th>
                Kuota Tersedia
              </th>
              <th>
                Peserta
              </th>
              <th>
                Aksi
              </th>
            </thead>
            <tbody>
                <?php
                error_reporting(E_ALL ^ E_NOTICE);
                include "koneksi.php";
                $no=1;
                $sql ="select * from db_ticket ";
                $query=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_array($query)){
                  echo "
                    <tr>

                      <td>$no</td>
                      <td>$data[nama_event]</td>
                      <td>$data[sisa_tiket]</td>
                      <td></td>
                      <td> <a href='template.php?page=pendaftar_event&upd=$data[id_event]' >Lihat Peserta</a> </td>
                  <td>
                  <a class='text-info' href='template.php?page=ubah_event&upd=$data[id_event]'><i class='material-icons' data-notify='icon'>loop</i> Ubah</a>
                  <a class='text-info' href='ticket/delete_event.php?del=$data[id_event]'><i class='material-icons' data-notify='icon'>delete</i> Hapus</a>
                </td>
                    </tr>";
                  $no++;
               }

                ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <a href="template.php?page=tambah_event"><button class="btn btn-info"><i class="material-icons" data-notify="icon">add</i>Tambah Event</button></a>
  </div>
</div>
<script type="text/javascript">
  document.getElementById("a_tiket").className +=" active";
</script>
