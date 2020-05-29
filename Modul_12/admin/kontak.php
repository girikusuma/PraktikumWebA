<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../petugas/kontak.php');
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
    <div id="main-content">
        <div id="atas">
            <img src="../gambar/perpustakaan.jpg" alt="" style="height: 250px; width: 700px;">
            <p>Perpustakaan Ilmu Komputer</p>
        </div>
        <div id="sidebar">
            <img src="../gambar/himakom.png" alt="">
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
        <div id="isi" style="height : 300px;">
            <h1>Kontak Kami</h1>
            <nav>
                <ul>
                    <li>Nama</li>
                    <br>
                    <li>Nim</li>
                    <br>
                    <li>No. Hp</li>
                    <br>
                    <li>Email</li>
                </ul>
                <ul>
                    <li>I Made Cantiawan Giri Kusuma</li>
                    <br>
                    <li>1708561005</li>
                    <br>
                    <li>081338119635</li>
                    <br>
                    <li>girikusuma7@gmail.com</li>
                </ul>
            </nav>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Giri Kusuma</p>
        </div>
        
    </div>
</body>
</html>