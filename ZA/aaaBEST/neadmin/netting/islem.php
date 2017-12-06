<?php
include 'baglan.php';

if(isset($_POST['ayarkaydet'])) {


	$id = 0;

	if($ayarkaydet = $db->exec("update ayarlar set ayar_title='".$_POST['ayar_title']."',ayar_logo='".$_POST['ayar_logo']."',ayar_desc='".$_POST['ayar_desc']."',ayar_keywords='".$_POST['ayar_keywords']."',ayar_footer='".$_POST['ayar_footer']."',ayar_adres='".$_POST['ayar_adres']."',ayar_facebook='".$_POST['ayar_facebook']."',ayar_twitter='".$_POST['ayar_twitter']."',ayar_telefon='".$_POST['ayar_telefon']."',ayar_fax='".$_POST['ayar_fax']."',ayar_mail='".$_POST['ayar_mail']."' where ayar_id = '$id'")) {

		header("Location:../ayarlar.php?durum=ok");
	}
	else{
		header("Location:../ayarlar.php?durum=no");
	}


}

if(isset($_POST['loggin'])){

	$admin_kadi=$_POST['admin_kadi'];
	$admin_sifre=md5($_POST['admin_sifre']);

	if($admin_kadi && $admin_sifre){

		$sorgula = $db->query("SELECT count(*) from admin where admin_kadi = '$admin_kadi' and admin_sifre = '$admin_sifre'");

		$verisay = $sorgula->fetchColumn();

		if($verisay>0){

			$_SESSION['admin_kadi'] = $admin_kadi;

			header("Location:../index.php");
		}
		else{

			header("Location:../login.php?login=no");

		}



	}


}

if(isset($_POST['menukaydet'])){

	if($menuekle = $db->exec("INSERT into menuler (menu_ad,menu_link) VALUES ('".$_POST['menu_ad']."','".$_POST['menu_link']."')")){

		header("Location:../menuler.php?durum=ok");



	}else{
		header("Location:../menuler.php?durum=no");
	}


}

if(isset($_POST['menuguncelle'])){

	$menuid = $_GET['menu_id'];


	if($menuguncelle = $db->exec("UPDATE menuler SET menu_ad = '".$_POST['menu_ad']."', menu_link = '".$_POST['menu_link']."' WHERE menu_id = '$menuid'")){

		header("Location:../menuler.php");
	}

}

if($_GET['menu_sil']){

	$menuid = $_GET['menu_sil'];

	if($menu_sil = $db->exec("DELETE FROM menuler WHERE menu_id = '$menuid' ")){

		header("Location:../menuler.php");

	}




}

if(isset($_POST['blogkaydet'])){

	if($blogekle = $db->exec("INSERT into blog (blog_ad,blog_icerik) VALUES ('".$_POST['blog_ad']."','".$_POST['blog_icerik']."')")){

		header("Location:../blok.php?durum=ok");

	}else{
		header("Location:../blok.php?durum=no");
	}

}

if(isset($_POST['blogguncelle'])){

	$blogid = $_GET['menu_id'];


	if($blogguncelle = $db->exec("UPDATE blog SET blog_ad = '".$_POST['blog_ad']."', blog_icerik = '".$_POST['blog_icerik']."' WHERE blog_id = '$blogid'")){

		header("Location:../blok.php");
	}

}


if($_GET['blog_sil']){

	$blogid = $_GET['blog_sil'];

	if($blog_sil = $db->exec("DELETE FROM blog WHERE blog_id = '$blogid' ")){

		header("Location:../blok.php");

	}




}


?>