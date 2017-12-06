<?php include "header.php"; ?>

<?php include "sidebar.php"; ?>


<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">BLOK</h1>
                <h1 class="page-subhead-line">Bu bir alt basliktir.</h1>

            </div>

            <div class="col-md-12">
                <a href="blog-ekle.php"><button class="btn btn-success" style="width:20%">+ Blok Ekle</button></a>
                <hr>
            </div>




            <div class="col-md-12">
               <!--    Hover Rows  -->
               <div class="panel panel-default">
                <div class="panel-heading">
                    BLOKLAR
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Blok Ad</th>
                                    <th>Blok İçerik</th>
                                </tr>
                            </thead>

                            <?php $blogcek=$db->query("select * from blog", PDO::FETCH_ASSOC);

                            foreach ($blogcek as $blogyaz) { ?>

                               <tbody>
                                <tr>
                                    <td><?php echo $blogyaz['blog_id']; ?></td>
                                    <td><?php echo $blogyaz['blog_ad']; ?></td>
                                    <td><?php echo $blogyaz['blog_icerik']; ?></td>
                                    <td><a href="blog-duzenle.php?blog_id=<?php echo $blogyaz['blog_id'];?>"><button class="btn btn-primary">Düzenle</button></td></a>
                                    <td><a href="netting/islem.php?blog_sil=<?php echo $blogyaz['blog_id']; ?>"<button class="btn btn-danger">Sil</button></a></td>
                                </tr>

                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End  Hover Rows  -->
        </div>

    </div>
    <!-- /. ROW  -->

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->



<?php include "footer.php"; ?>