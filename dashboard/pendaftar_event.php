<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Pendaftar
          <?php
            $a = "select db_ticket.nama_event from db_ticket where id_event = '$_GET[upd]' ";
            $b = mysqli_query($conn,$a) or die(mysqli_error($a));
            $c = mysqli_fetch_assoc($b);
            echo "$c[nama_event]";
          ?>
        </h4>
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
              <!-- <th>
                Event yang diikuti
              </th> -->

            </thead>
            <tbody>
                <?php
                $id = $_GET['upd'];
                error_reporting(E_ALL ^ E_NOTICE);
                include "koneksi.php";
                $no=1;
                $sql2 ="select * from db_user_has_ticket where id_event = '$id' ";
                $query2=mysqli_query($conn,$sql2) or die(mysqli_error($sql2));
                while($data2=mysqli_fetch_array($query2)){
                  $sql3 ="select * from db_user where id_user = '$data2[id_user]' ";
                  $query3=mysqli_query($conn,$sql3) or die(mysqli_error($sql3));
                  while($data3=mysqli_fetch_assoc($query3)){
                    echo "
                      <tr>
                        <td> $no </td>
                        <td> $data3[id_user] </td>
                        <td> $data3[nama_user] </td>
                        <td> $data3[jk_user] </td>
                        <td> $data3[alamat_user] </td>
                      </tr>
                    ";
                  }
                  $no++;
                }
                // $awal = "update db_ticket set jumlah_pendaftar = $no where id_event = '$id' ";
                // $start = mysqli_query($conn,$awal);

                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  document.getElementById("a_tiket").className +=" active";
</script>
