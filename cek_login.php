<?php
require 'koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];

$sql=mysqli_query($koneksi, "SELECT * from user where username='$user' and password='$pass' ");

$cek = mysqli_num_rows($sql);

if ($cek>0) 
{
	$data = mysqli_fetch_array($sql);
	session_start();
	$_SESSION['nama']=$user;
	header('location:petugas.php');
}
else
{
	?>
	<script type="text/javascript">
		alert ('Username atau Password tidak di temukan');
		window.location = "index.php";
	</script>

<?php
}
?>