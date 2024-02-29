<?php
if (isset($_GET['url'])) 
{
	$url=$_GET['url'];

	switch ($url) {
		case 'pembelian_barang';
		include 'pembelian_barang.php';
		break;

		case 'pendataan_barang';
		include 'pendataan_barang.php';
		break;

		case 'stok_barang';
		include 'stok_barang.php';
		break;
			
	}
}
else
{
	?>
	Selamat Datang di aplikasi Kasir Ar Rahmat (APKAR) yang di buat untuk mendata transaksi barang yang ada di Toko Ar Rahmat <br> <br>

	Anda Login Sebagai :  <?php echo $_SESSION['nama']; 


}

 ?>
