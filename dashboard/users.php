<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Semua Pendaftar</h4>
        <p class="card-category">Pendaftar yang sudah diterima</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                No
              </th>
              <th>
                Username
              </th>
              <th>
                Nama Pendaftar
              </th>
              <th>
                Jenis Kelamin
              </th>
              <th>
                Alamat
              </th>
              <th>
                Event yang diikuti
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
                $sql ="select * from db_user where status = 'user' ";
                $query=mysqli_query($conn,$sql);
                while($data=mysqli_fetch_array($query)){
                  echo "
                    <tr>
                      <td> $no </td>
                      <td>$data[id_user]</td>
                      <td>$data[nama_user]</td>
                      <td>$data[jk_user]</td>
                      <td>$data[alamat_user]</td>
                      <td>"
                      ?>
                      <?php
                      $sql2 ="select * from db_user_has_ticket where id_user = '$data[id_user]' ";
                      $query2=mysqli_query($conn,$sql2) or die(mysqli_error($sql2));;
                      while($data2=mysqli_fetch_array($query2)){
                        $sql3 ="select * from db_ticket where id_event = '$data2[id_event]' ";
                        $query3=mysqli_query($conn,$sql3) or die(mysqli_error($sql3));;
                        while($data3=mysqli_fetch_assoc($query3)){
                        echo "$data3[nama_event],  ";
                        }
                      }
                      ?>
                    <?php
                  echo "
                  </td>
                  <td>
                  <a class='text-info' href='delete_user.php?del=$data[id_user]'><i class='material-icons' data-notify='icon'>delete</i> Hapus</a>
                </td>
                    </tr>";
                  $no++;
                }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  document.getElementById("a_user").className +=" active";
</script>
