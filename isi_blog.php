<!DOCTYPE html>
<?php
  error_reporting(E_ALL ^ E_NOTICE);
  include "koneksi.php";
  session_start();
?>

<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello World!</title>

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
<body class="blog-page">
  <?php
    include "header.php";
    include "login.php";
   ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">
                        <h2 class="entry-title">Blog</h2>

                        <ul class="breadcrumbs flex align-items-center">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <!-- <li><a href="blog.php">  </a></li> -->
                        </ul><!-- .breadcrumbs -->
                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="main-content" style="margin-top:0px">
        <div class="container">
            <div class="last-news">
                <div class="row blog-list-page">

                  <?php
                    $query = "select * from db_blog where id_blog = $_GET[id]";
                    $hasil = mysqli_query($conn, $query);
                    if ( mysqli_num_rows($hasil) > 0){
                      while ($data = mysqli_fetch_assoc($hasil)) {
                        echo
                        '
                        <div class="col-12 col-md-12 single-blog-content">
                            <div class="blog-content">
                                <figure class="featured-image">
                                    <a href="#"> <img src="dashboard/'.$data['gambar_blog'].'"> </a>
                                </figure><!-- featured-image -->

                                <!-- box-link-date -->

                                <div class="entry-content">
                                    <div class="entry-header">
                                        <center><h1 style="color:black;">'.$data['judul_blog'].'</h1></center>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <center>
                                        <span class="author-name"><a href="#">Kategori</a></span>
                                        <span class="space">|</span>
                                        <span class="author-name"><a href="#">'.$data['id_kategori'].'</a></span>
                                        </center>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>'.$data['isi_blog'].'</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div>
                        </div><!-- col-6 -->
                        ';
                      }
                    }
                   ?>

                </div><!-- blog-list-page -->
            </div><!-- last-news -->
        </div><!-- container -->
    </div><!-- main-content -->

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
