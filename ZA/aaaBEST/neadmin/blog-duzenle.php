<?php include "header.php"; ?>

<?php include "sidebar.php"; 

$blogid=$_GET['blog_id'];

$blogcek=$db->query("select * from blog where blog_id = '$blogid' ")->fetch();




?>

<head>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

</head>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">BLOK DUZENLE</h1>

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

        <form action="netting/islem.php?menu_id=<?php echo $blogid ?>" method="POST">

            <div class="col-md-12">
                <div class="form-group col-md-12">
                    <label>Blok Ad</label>
                    <input class="form-control" type="text" name="blog_ad" value="<?php echo $blogcek['blog_ad'] ?>" >
                </div>

                <div style=":100%" class="form-group col-md-12">
                    <label>Blog İçerik</label>
                    <textarea name="blog_icerik" class="ckeditor""><?php echo $blogcek['blog_icerik'] ?></textarea>
                    <p class="help-block">Sitenizin Blok Eklemeyi Unutmayın !</p>
                </div> 


                <div class="col-md-12">
                    <button class="btn btn-success" name="blogguncelle" style="width:20%">Blog Düzenle</button>
                    <hr>
                </div>

            </div>

        </form>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->



<?php include "footer.php"; ?>