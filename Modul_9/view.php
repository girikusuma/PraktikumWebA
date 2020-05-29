<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<link rel="stylesheet" type="text/css" href="custom.css">
<body>
	<h1>Daftar</h1>
	<table class="lihat-tabel">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>No. Telp.</th>
			<th class="ket">Keterangan</th>
		</tr>
	<?php
		include 'konek.php';
		$getData = $koneksi->query("SELECT * FROM tb_biodata");
		while($fetchData = $getData->fetch_assoc()){
	?>
		<tr class="jarak">
			<td><?=$fetchData["NIM"]?></td>
			<td><?=$fetchData["Nama"]?></td>
			<td><?=$fetchData["Jenis_kelamin"]?></td>
			<td><?=$fetchData["Tanggal_lahir"]?></td>
			<td><?=$fetchData["Alamat"]?></td>
			<td><?=$fetchData["No_telepon"]?></td>
			<td>
				<a href="edit-data.php?id=<?=$fetchData["NIM"]?>">Edit</a>
				<a href="">/</a>
				<a href="delete-data.php?id=<?=$fetchData["NIM"]?>">Hapus</a>
			</td>
		</tr>
	<?php
		}
	?>
	</table>
	<br>
	<button style="margin-left: 26%; background-color: #0040ff;"><a style="text-decoration: none; color: white; "href="index.php">Insert Data</a></button>
</body>
</html>