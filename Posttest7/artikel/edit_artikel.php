<?php
	include "../koneksi.php";

	$idartikel=$_POST['idartikel'];
	$judul=$_POST['judul'];
	$berita=$_POST['berita'];
	$iduser=$_POST['iduser'];
	
	$sql2 ="UPDATE artikel 
    SET idartikel = '$idartikel', 
    judul = '$judul', 
    berita = '$berita', 
    iduser = '$iduser'
    WHERE idartikel = '$idartikel'";
	
	$query = mysqli_query($db_link,$sql2);
	
	if($query)
	{
		header('location:read_artikel.php');
	}
	else
	{
		echo"Edit Pelanggan Gagal";
	}
?>