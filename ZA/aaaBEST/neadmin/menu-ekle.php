<?php include "header.php"; ?>

<?php include "sidebar.php"; ?>


<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MENU EKLE</h1>

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
                    <label>Menu Ad</label>
                    <input class="form-control" type="text" name="menu_ad" placeholder="Menu adı buraya girilecek" >
                </div>

                <div class="form-group col-md-12">
                    <label>Menu Link</label>
                    <input class="form-control" type="text" name="menu_link" value="http://">
                </div>

                <div class="col-md-12">
                    <button class="btn btn-success" name="menukaydet" style="width:20%">Menü Ekle</button>
                    <hr>
                </div>

            </div>

        </form>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->



<?php include "footer.php"; ?>