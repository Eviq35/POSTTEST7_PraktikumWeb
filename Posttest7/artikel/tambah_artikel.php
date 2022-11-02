<?php
	include "../koneksi.php";

	$idartikel=$_POST['idartikel'];
	$ft=$_FILES['foto']['name'];
	$file=$_FILES['foto']['tmp_name'];
	$judul=$_POST['judul'];
	$berita=$_POST['berita'];
	$iduser=$_POST['iduser'];

	$sql = "INSERT INTO artikel(idartikel,gambar,judul,berita,iduser)VALUES('$idartikel','$ft','$judul','$berita','$iduser')";
	move_uploaded_file($file, "../foto/".$ft);
	$query =mysqli_query($db_link,$sql);
	if ($query) 
	{
		header('location:read_artikel.php');
	}
	else
	{
		echo "Gagal Disimpan";
	}
?>