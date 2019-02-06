<div class="row">
  <?php
  $query = mysqli_query($conn,"select * from db_user where status='admin'");
  $ambil = mysqli_fetch_assoc($query);
   ?>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title">Ubah Admin</h4>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Username</label>
                <input type="hidden" class="form-control" name=username value="<?php echo $ambil['id_user']; ?>">
                <input type="text" class="form-control" name=username1 value="<?php echo $ambil['id_user']; ?>" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Password</label>
                <input type="text" class="form-control" name=password value="<?php echo $ambil['password']; ?>">
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-info pull-right" value="Ubah" name="submit">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
  error_reporting(E_ALL ^ E_NOTICE);
  $username = $_POST["username"];
  $password = $_POST["password"];

  if (isset($_POST["submit"])) {
    $sql = "update db_user set password='$password' where id_user='$username'";
    mysqli_query($conn, $sql) or die(mysqli_error($sql));
?>
  <script>
    window.location="template.php?page=admin";
    alert("data berhasil diubah");
  </script>
<?php
  }
?>

<script type="text/javascript">
  document.getElementById("a_admin").className +=" active";
</script>
