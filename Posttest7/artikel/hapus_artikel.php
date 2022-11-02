<?php
	include "../koneksi.php";

	$idartikel = $_GET["idartikel"];
	$sql = "DELETE FROM artikel WHERE idartikel = '$idartikel'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:read_artikel.php');
	}else{
		echo "hapus pelanggan GAGAL";
	}
?>