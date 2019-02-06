<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Daftar</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="contact-page">
    <?php
      include "login.php";
      include "header.php";
     ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">
                        <h2 class="entry-title">Daftar</h2>

                        <ul class="breadcrumbs flex align-items-center">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a href="daftar.php">Daftar</a></li>
                        </ul><!-- .breadcrumbs -->
                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->



    <div class="container">
      <form class="" action="daftar.php" method="post">
        <div class="main-content">

            <div class="get-in-touch">
                <div class="entry-header">
                    <div class="entry-title">
                        <br>
                        <h2>Daftarkan Dirimu</h2>
                    </div><!-- entry-title -->
                </div><!-- entry-header -->

                <div class="entry-content">
                    <p>Isi data diri sesuai kriteriamu dan nikmati event yang ada. Keep charming, stay focus, and enjoy the event. Welcome to SOLOFEST 2018</p>
                </div><!-- entry-content -->

                <div class="contact-form">
                    <div class="row" style="color:gray;">
                        <div class="col-12 col-md-6">
                            <p>Nama Lengkap</p>
                            <input type="text" name="nama">
                        </div><!-- col-4 -->

                        <div class="col-12 col-md-6">
                            <p>Username</p>
                            <input type="text" name="username">
                        </div><!-- col-6 -->

                        <div class="col-12 col-md-6">
                            <p>Password</p>
                            <input type="password" name="password">
                        </div><!-- col-4 -->

                        <div class="col-12 col-md-6">
                            <p>Retype Password</p>
                            <input type="password" name="password2">
                        </div><!-- col-4 -->

                        <div class="col-12" style="padding-bottom:20px; color:gray;">
                            <p>Jenis Kelamin</p>
                            <input type="radio" name="jenis_kelamin" value="laki-laki"> <i style="padding-right:20px;font-style:normal;">Laki-laki </i>
                            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
                        </div>

                        <div class="col-12">
                            <p>Email</p>
                            <input type="email" name="alamat">
                        </div>

                        <div class="col-12" style="padding-bottom:20px; color:gray;">
                            <p>Event yang ingin diikuti</p>
                            <?php
                                include "koneksi.php";
                                error_reporting(E_ALL ^ E_NOTICE);
                                $query = "select * from db_ticket";
                                $hasil = mysqli_query($conn, $query);
                                if ( mysqli_num_rows($hasil) > 0){
                                  while ($data = mysqli_fetch_assoc($hasil)) {
                                    echo
                                    '
                                    <input type="checkbox" name="event'.$data['id_event'].'" value="'.$data['nama_event'].'"> <i style="padding-right:20px;font-style:normal;"> '.$data["nama_event"].'</i>
                                    ';
                                  }
                                }
                            ?>
                        </div>

                        <input type="hidden" name="status" value="user"> <!-- Status pendaftar -->

                        <div class="col-12 submit flex justify-content-center">
                            <input type="submit" name="signup" value="Kirim" class="btn">
                        </div>

                    </div><!-- row -->
                </div><!-- contact-form -->
            </div><!-- newsletter-subscribe -->
        </div><!-- main-content -->
      </form>
    </div><!-- container -->
    <?php
    include "koneksi.php";
    // singup
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password1 = $_POST['password2'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $signup = $_POST['signup'];

    // $sql = "select * from db_ticket";
    // $start = mysqli_query($conn,$sql);
    // $dapat = mysqli_fetch_array($start);
    // $jumlah = $dapat['sisa_tiket'];
    // echo "$jumlah";


    if ($signup) {
      if ($nama=='') {
        ?>
        <script type="text/javascript">alert("Nama tidak boleh kosong")</script>
        <?php
      }
      elseif ($username=='') {
        ?>
        <script type="text/javascript">alert("Username tidak boleh kosong")</script>
        <?php
      }
      elseif ($password=='') {
        ?>
        <script type="text/javascript">alert("Password tidak boleh kosong")</script>
        <?php
      }
      elseif ($jenis_kelamin=='') {
        ?>
        <script type="text/javascript">alert("Jenis Kelamin tidak boleh kosong")</script>
        <?php
      }
      elseif ($alamat=='') {
        ?>
        <script type="text/javascript">alert("Alamat tidak boleh kosong")</script>
        <?php
      }
      elseif (condition) {
        // code...
      }
      elseif ($password==$password1) {
        $sql = "insert into db_user(id_user, nama_user, password, jk_user, alamat_user,status)
                  values ('$username', '$nama', '$password','$jenis_kelamin','$alamat','$status' ) ";
        $run=mysqli_query($conn, $sql) or die(mysqli_error($sql));
        if ($signup) {
          $sql2 = "select * from db_ticket order by 'id_event' ASC";
          $jalan = mysqli_query($conn, $sql2);
          $nor=0;
          while ($data2 = mysqli_fetch_assoc($jalan)) {
            $id_event = $data2['id_event'];
            $txt[$nor] = $_POST['event'.$id_event];
            if ($txt[$nor]) {
               $querii = "insert into db_user_has_ticket (id_user, id_event) values ('$username', '$id_event')";
               $cus = mysqli_query($conn, $querii) or die(mysqli_error($querii));;
            }
            $nor++;
          }
        }

        ?>
        <script type="text/javascript">
          alert("Anda berhasil SignUp, Silahkan Login");
          document.location = 'index.php';
        </script>
        <?php
      }
      elseif ($password!=$password1) {
        ?>
        <script type="text/javascript">alert("password yang anda masukkan tidak sama")</script>
        <?php
      }
    }
    ?>

    <?php
      include "footer.php";
     ?>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>
