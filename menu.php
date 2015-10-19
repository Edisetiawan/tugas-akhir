    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll" href="index.php">
                    <img class="img-responsive img-portfolio img-hover" src="images/logo-perpus.png" alt="" style="max-height:45px;">
                </a>
            </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="?page=content">Katalog Buku</a>
                        </li >
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=visi-misi">Visi dan Misi</a></li>
                                <li><a href="?page=kontak-kami">Kontak Kami</a></li>
                            </ul>
                        </li>
                        <li class="page-scroll">
                            <a href="?page=testimoni">Testimoni </a>
                        </li>
                        <li >
                            <a class="page-scroll" href="?page=berita">Berita </a>
                        </li>
                        <?php
                        if(empty($_SESSION['nis'])){
                        ?>
                        <li>
                            <a class="page-scroll" href="?page=login">Login</a>
                        </li>
                        <?php
                        }else{
                            ?>
                            <li>
                            <a class="page-scroll" href="?page=logout">Logout</a>
                        </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
           
        </div>
    </nav>