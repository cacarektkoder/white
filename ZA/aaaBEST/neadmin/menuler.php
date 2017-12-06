<?php include "header.php"; ?>

<?php include "sidebar.php"; ?>


<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MENULER SAYFASINA HOSGELDINIZ</h1>
                <h1 class="page-subhead-line">Bu bir alt basliktir.</h1>

            </div>

            <div class="col-md-12">
                <a href="menu-ekle.php"><button class="btn btn-success" style="width:20%">+ Menü Ekle</button></a>
                <hr>
            </div>




            <div class="col-md-12">
               <!--    Hover Rows  -->
               <div class="panel panel-default">
                <div class="panel-heading">
                    MENULER
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Menu Ad</th>
                                    <th>Menu Link</th>
                                </tr>
                            </thead>

                            <?php $menucek=$db->query("select * from menuler", PDO::FETCH_ASSOC);

                            foreach ($menucek as $menuyaz) { ?>

                               <tbody>
                                <tr>
                                    <td><?php echo $menuyaz['menu_id']; ?></td>
                                    <td><?php echo $menuyaz['menu_ad']; ?></td>
                                    <td><?php echo $menuyaz['menu_link']; ?></td>
                                    <td><a href="menu-duzenle.php?menu_id=<?php echo $menuyaz['menu_id'];?>"><button class="btn btn-primary">Düzenle</button></td></a>
                                    <td><a href="netting/islem.php?menu_sil=<?php echo $menuyaz['menu_id']; ?>"<button class="btn btn-danger">Sil</button></a></td>
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