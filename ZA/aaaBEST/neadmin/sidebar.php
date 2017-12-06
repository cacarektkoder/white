        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Hoşgeldin <?php echo $_SESSION['admin_kadi'] ?>
                                <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>

                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-home "></i>ANASAYFA</a>
                    </li>

                    <li>
                        <a  href="ayarlar.php"><i class="fa fa-cogs "></i>AYARLAR</a>
                    </li>

                    <li>
                        <a  href="menuler.php"><i class="fa fa-bars "></i>MENULER</a>
                    </li>

                    <li>
                        <a  href="blok.php"><i class="fa fa-th-large "></i>BLOKLAR</a>
                    </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->