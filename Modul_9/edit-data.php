<?php
	session_start();

	if(!isset($_GET["id"])){
		header("location:view.php");
		exit();
	}

	include 'konek.php';

	$key = $_GET["id"];

	$getDataa = $koneksi->query("SELECT * FROM tb_biodata WHERE NIM = ".$key); 

	if($getDataa->num_rows==0){
		header("location:view.php");
		exit();
	}

	$getDataa = $getDataa->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Form Edit</h1>
	<form action="eedit.php" method="POST">
		<input type="hidden" name="id" value="<?=$_GET["id"]?>">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?=$getDataa["NIM"]?>"></input></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?=$getDataa["Nama"]?>"></input></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" value="Laki-laki" name="jk">Laki-laki</input></td>
				<td><input type="radio" value="Perempuan" name="jk">Perempuan</input></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="ttl" value="<?php echo date('Y-m-d'); ?>"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"><?=$getDataa["Alamat"]?></textarea></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input type="text" name="telp" value="<?=$getDataa["No_telepon"]?>"></input></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button name="ubah">Edit</button></td>
			</tr>
		</table>
	</form>
</body>
</html>