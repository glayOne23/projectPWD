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

    <title>Solofest</title>

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

<body>

    <?php
      include "login.php";
      include "header.php";
     ?>

    <div class="hero-content">
        <!-- <div class="container"> -->
        <div>
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-10">
                    <div class="entry-header">
                        <h2>Solofest 2018</h2>
                        <div class="entry-meta-date">
                            06.28.018
                        </div>
                        <!-- .entry-meta-date -->
                    </div><!-- .entry-header -->

                    <div class="countdown flex flex-wrap justify-content-between" data-date="2018/06/06">
                        <div class="countdown-holder">
                            <div class="dday"></div>
                            <label>Hari</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dhour"></div>
                            <label>Jam</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dmin"></div>
                            <label>Menit</label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dsec"></div>
                            <label>Detik</label>
                        </div><!-- .countdown-holder -->
                    </div><!-- .countdown -->
                </div><!-- .col-12 -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12 ">
                    <div class="entry-footer">
                       <?php
                            session_start();
                            if (isset($_SESSION['username']) and ($_SESSION['status']=='user')) {
                                echo '
                                    <a href="ubah_akun.php" class="btn" style="width:auto;">Edit Akun</a>
                                ';
                            }
                            else{
                        ?> 
                          <a href="daftar.php" class="btn" style="width:auto;">Join Sekarang</a>
                        <?php    
                            }
                        ?>
                        
                        <a href="blog.php" class="btn">Blog</a>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .hero-content -->

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lineup-artists-headline">
                        <div class="entry-title">
                            <p>UTAMA</p>
                            <h2>Event Solofest 2018</h2>
                        </div><!-- entry-title -->

                        <?php
                          $query = "select * from db_gambar where kategori_gambar = 'event'";
                          $hasil = mysqli_query($conn, $query);
                          if ( mysqli_num_rows($hasil) > 0){
                            while ($data = mysqli_fetch_assoc($hasil)) {
                              echo
                              '
                              <div class="lineup-artists" style="padding-bottom:30px;">
                                  <div class="lineup-artists-wrap flex flex-wrap" style="padding-bottom:70px;">
                                      <figure class="featured-image">
                                          <a href="#"> <img src=" '.$data['gambar'].'" alt=""> </a>
                                      </figure><!-- featured-image -->

                                      <div class="lineup-artists-description">
                                          <div class="lineup-artists-description-container">
                                              <div class="entry-title">
                                                  '.$data['nama_gambar'].'
                                              </div><!-- entry-title -->

                                              <div class="entry-content">
                                                  <p>'.$data['keterangan_gambar'].'</p>
                                              </div><!-- entry-content -->

                                              <div class="entry-content">
                                                  <p>Tempat : '.$data['tempat_gambar'].' <br> Waktu : '.$data['waktu_gambar'].'</p>

                                              </div><!-- entry-content -->


                                              <div class="box-link">
                                                  <a href=""><img src="images/box.jpg" alt=""></a>
                                              </div><!-- box-link -->
                                          </div><!-- lineup-artists-description-container -->
                                      </div><!-- lineup-artists-description -->
                                  </div><!-- lineup-artists-wrap -->
                              </div><!-- lineup-artists -->
                              ';
                            }
                          }
                         ?>
                    </div><!-- lineup-artists-headline -->
                </div><!-- col-12 -->
            </div><!-- row -->

        </div><!-- container -->
        <div style="padding:50px;">

        </div>
        <div class="homepage-next-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <p>KEDUA</p>
                            <h2>Dokumentasi Event Tahun Lalu</h2>
                        </div><!-- entry-title -->
                    </div><!-- col-12 -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="next-event-slider-wrap">
                <div class="swiper-container next-event-slider">
                    <div class="swiper-wrapper">

                        <?php
                        $query = "select * from db_gambar where kategori_gambar = 'event_lalu'";
                        $hasil = mysqli_query($conn, $query);
                        if ( mysqli_num_rows($hasil) > 0){
                          while ($data = mysqli_fetch_assoc($hasil)) {
                            echo
                            '
                            <div class="swiper-slide">
                                <div class="next-event-content">
                                    <figure class="featured-image">
                                        <img src=" '.$data['gambar'].'" alt="" style="height:255px;">

                                        <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                            <h3> '.$data['nama_gambar'].'</h3>
                                            <p> '.$data['keterangan_gambar'].'</p>

                                        </a>
                                    </figure><!-- featured-image -->
                                </div><!-- next-event-content -->
                            </div><!-- swiper-slide" -->
                            ';
                          }
                        }
                         ?>

                    </div><!-- .swiper-wrapper -->
                </div><!-- .swiper-container -->

                <div class="swiper-button-next">
                    <img src="images/button.png" alt="">
                </div><!-- .slider-button -->
            </div><!-- .next-event-slider-wrap -->
        </div><!-- homepage-next-events -->

        <div class="home-page-last-news">
            <div class="container">
                <div class="header">
                    <div class="entry-title">
                        <p>KETIGA</p>
                        <h2>Blog Terbaru</h2>
                    </div><!-- entry-title -->
                </div><!-- header -->

                <div class="home-page-last-news-wrap" >
                    <div class="row">
                      <?php
                        $query = "select * from db_blog order by id_blog desc limit 2";
                        $hasil = mysqli_query($conn, $query);
                        if ( mysqli_num_rows($hasil) > 0){
                          while ($data = mysqli_fetch_assoc($hasil)) {
                            // buat readmore================================================================================
                            $string =strip_tags($data['isi_blog']);
                            if (strlen($string) > 225) {
                              $stringCut = substr($string,0, 225);
                              $endPoint = strrpos($stringCut,'');
                            }
                            $string = $endPoint? substr($stringCut,0,$endPoint):substr($stringCut,0);
                            $string .='.....<a href="isi_blog.php?id='.$data['id_blog'].'" style="color:cyan;">Baca lebih lanjut</a>';

                            // ================================================================================================
                            echo
                            '
                            <div class="col-12 col-md-6">
                                <figure class="featured-image">
                                    <img src="dashboard/'.$data['gambar_blog'].'" >
                                </figure><!-- featured-image -->

                                <div class="content-wrapper">
                                    <div class="entry-content">
                                        <div class="entry-header">
                                            <h2>'.$data['judul_blog'].'</h2>
                                        </div><!-- entry-header -->

                                        <div class="entry-meta">
                                            <span class="author-name">Kategori</span>
                                            <span class="space">|</span>
                                            <span class="comments-count">'.$data['id_kategori'].'</span>
                                        </div><!-- entry-meta -->

                                        <div class="entry-description">
                                            <p>'.$string.'</p>
                                        </div><!-- entry-description -->
                                    </div><!-- entry-content -->
                                </div><!-- content-wrapper -->
                            </div><!-- .col-6 -->
                            ';
                          }
                        }
                       ?>

                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->
            </div><!-- container -->
        </div><!-- home-page-last-news -->
    </div>

    <?php
      include 'footer.php';
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
