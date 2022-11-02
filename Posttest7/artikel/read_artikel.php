<?php
		include '../koneksi.php';

		date_default_timezone_set("Asia/Makassar");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/form.css">
</head>
<body>
	<div class="latar">
		<h2>MANAJEMEN ARTIKEL</h2>
	</div>

	<br>
		<center>
			<input type="button" value="TAMBAH" onclick="location.href='halaman_tambah_artikel.php'">
			<br><br>
			<form action="" method="GET">
				<input type="text" name="keyword"  placeholder="Ketik Pencarian">
				<button type="submit" class="tombol" name="search">
					<i class="" aria-hidden="true">Cari</i>
				</button>
			</form>
		</center>
		<br>
		<center>
		<table border="0" cellpadding="10">
		<p align="center">Hari ini adalah hari <?php echo date("l, d-m-Y, H:i:s"); ?></p>
			<div class="atasan">
			<tr>
				<th>NO</th>
				<th>ID ARTIKEL</th>
				<th>Judul</th>
				<th>Berita</th>
				<th>ID USER</th>
				<th>Poster</th>
				<th>PILIH</th>
			</tr>
			</div>
			<?php
				if(isset($_GET['keyword'])){
					$keyword = $_GET['keyword']; 
					$result = mysqli_query($db_link, "SELECT * FROM artikel WHERE idartikel LIKE '%$keyword%' OR judul LIKE '%$keyword%'");
				}else{
					$result = mysqli_query($db_link, "SELECT * FROM artikel");
				}

				$no=1;
				$sql="SELECT * FROM artikel";
				$query= mysqli_query($db_link,$sql);
				while ($data = mysqli_fetch_array($query))
				{
					?>
					<tr>
						<td><?php echo "$no"; ?></td>
						<td><?php echo "$data[idartikel]"; ?></td>
						<td><?php echo "$data[judul]"; ?></td>
						<td><?php echo "$data[berita]"; ?></td>
						<td><?php echo "$data[iduser]"; ?></td>
						<td><img src="../foto/<?php echo $data['gambar']?>" width=200 height="200" alt=""></td>
						<td>
							<a class="edit" href="halaman_edit_artikel.php?idartikel=<?php echo"$data[idartikel]"; ?>">EDIT</a>
							<a class="hapus" href="hapus_artikel.php?idartikel=<?php echo"$data[idartikel]"; ?>" onclick="return confirm('Konfirmasi!!!')">HAPUS</a>
						</td>
					</tr>
					<?php
					$no++;
				}
			?>
		</table><br>
		<a class="tmbl" href="../home.html">KEMBALI</a>
		</center>
		<div class="footer">
		Vigo Santri Ali 2009106008
		</div>
</body>
</html>