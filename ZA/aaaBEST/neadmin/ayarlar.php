<?php include "header.php"; ?>

<?php include "sidebar.php"; ?>

    
<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">BURADAN AYALAR YAPILACAKTIR</h1>

                        <?php if($_GET['durum']=="ok") { ?>

                        <h1 style="color:green;" class="page-subhead-line">İşlem başarıyla tamamlandı.</h1>

                        <?php } elseif($_GET['durum']=="no"){ ?>

                        <h1 style="color:red;" class="page-subhead-line">İşlem tamamlanamadı.</h1>

                        <?php } else{?>

                        <h1 class="page-subhead-line">Bu bir alt başlıktır.</h1>

                        <?php } ?>

                    </div>
                </div>
                <!-- /. ROW  -->

                <form action="netting/islem.php" method="POST">

                <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Site Başlığı</label>
                            <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek['ayar_title'] ?>">
                        </div>
                </div>

                <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Site logosu</label>
                            <input class="form-control" type="text" name="ayar_logo" value="<?php echo $ayarcek['ayar_logo'] ?>">
                        </div>
                </div>

                <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Site Açıklaması</label>
                            <input class="form-control" type="text" name="ayar_desc" value="<?php echo $ayarcek['ayar_desc'] ?>">
                        </div>
                </div>

                <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Site Anahtar Kelimeleri</label>
                            <input class="form-control" type="text" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords'] ?>">
                        </div>
                </div>

                <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Footer</label>
                            <input class="form-control" type="text" name="ayar_footer" value="<?php echo $ayarcek['ayar_footer'] ?>">
                        </div>
                </div>

                <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Adres</label>
                            <input class="form-control" type="text" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres'] ?>">
                        </div>
                </div>

                <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Facebook Adresi</label>
                            <input class="form-control" type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook'] ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Twitter Adresi</label>
                            <input class="form-control" type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter'] ?>">
                        </div>
                </div>

                <div class="col-md-12">
                        <div class="form-group col-md-4">
                            <label>Telefon Numarası</label>
                            <input class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon'] ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Fax Numarası</label>
                            <input class="form-control" type="text" name="ayar_fax" value="<?php echo $ayarcek['ayar_fax'] ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Mail Adresi</label>
                            <input class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>">
                        </div>
                </div>

                <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <input style="width:100%" class="btn btn-success" type="submit" name="ayarkaydet" value="Ayarları kaydet">
                        </div>
                </div>






                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->



<?php include "footer.php"; ?>