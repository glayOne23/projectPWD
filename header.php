<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-4">
                    <h1 class="site-branding flex">
                        <a href="#">SOLOFEST</a>
                    </h1>
                </div>

                <div class="col-2 col-lg-8">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="index.php"> <h5>BERANDA</h5> </a></li>
                            <li><a href="blog.php"><h5>BLOG</h5></a></li>
                        <?php
                            session_start();
                            if (isset($_SESSION['username']) and ($_SESSION['status']=='user')) {
                                echo '
                                    <li><a href="logout.php" class="btn"> <h5>LOGOUT<i class="fa fa-sign-out-alt" style="padding-left:10px;"></i> </h5></a></li>
                                ';
                            }
                            else{
                        ?>

                                <li><a href="#" class="btn" onclick="document.getElementById('id01').style.display='block'" > <h5>LOGIN<i class="fa fa-sign-in-alt" style="padding-left:10px;"></i> </h5></a></li>
                        <?php
                            }
                        ?>

                        </ul><!-- flex -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- container-fluid -->
    </div><!-- header-bar -->
</header><!-- .site-header -->
