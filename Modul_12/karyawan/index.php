<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'karyawan'){
        header('Location: ../admin/index.php');
      }
    }
    else{
      header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2 align="center">Selamat Datang</h2>
    <p  align="center" style="font-weight: bold; "><?php echo $_SESSION['User']?></p>
    <div id="main-content">
        <div id="atas">
            <img src="../gambar/perpustakaan.jpg" alt="" style="height: 250px; width: 700px;">
            <p>Perpustakaan Ilmu Komputer</p>
        </div>
        <div id="sidebar">
            <img src="../gambar/himakom.png" alt="" style="height: auto; width: 240px;">
            <div class="populer">
                <p>Artikel Populer</p>
            </div>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="galeri.php">GALERI</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                    <li><a href="kontak.php">KONTAK</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="galeri.php">GALERI</a></li>
                <li><a href="tentang.php">TENTANG</a></li>
                <li><a href="kontak.php">KONTAK</a></li>
            </ul>
        </div>
        <div id="isi">
            <h1>Selamat Datang</h1>
            <p style="text-align: justify;">Selamat datang di perpustakaan Ilmu Komputer Udayana, perpustakaan berbasis online terlengkap yang menyediakan berbagai buku-buku panduang IT, jurnal ilmu komputer, laporan PKL mahasiswa dan Tugas Akhir mahasiswa ilmu komputer.</p>
            <h1>Galeri</h1>
            <p style="text-align: right; margin-top: -30px;"><a href="galeri.php" style="text-decoration: none; color: #4d80b3">Lihat lainnya...</a></p>
            <div class = "galeri">
                <img src="../gambar/buku1.jpg" alt="">
                <p><a href="galeri.php"><button class="button">Lihat Buku</button></a></p>
            </div>
            <div class = "galeri">
                <img src="../gambar/buku2.jpg" alt="">
                <p><a href="galeri.php"><button class="button">Lihat Buku</button></a></p>
            </div>
            
            <div class = "galeri">
                <img src="../gambar/buku3.jpg" alt="">
                <p><a href="galeri.php"><button class="button">Lihat Buku</button></a></p>
            </div>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Giri Kusuma</p>
        </div>
    </div>
</body>
</html>