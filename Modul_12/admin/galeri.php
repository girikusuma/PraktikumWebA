<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../petugas/galeri.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div id="isi" style="height : 1219px;">
            <h1>Galeri</h1>
            <form class="example" action="#">
                <input type="text" class="form-cari" placeholder="Cari Buku..." name="cari">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Algoritma dan Pemrograman dalam Bahasa Pascal, C,</p>
                    <p>Dan C++ Edisi Keenam</p>
                    <p>Rinaldi Munir, Leony Lidya</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>682</li>
                            <li>5 Feb 2016</li>
                            <li>9786021514917</li>
                            <li>Indonesia</li>
                            <li>Informatika</li>
                            <li>0.75 kg</li>
                            <li>16 cm</li>
                            <li>24 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                </div>
                <img src="../gambar/buku1.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Buku Sakti Pemrogaman Web: HTML, CSS, PHP, MYSQL</p>
                    <p>dan Javascript</p>
                    <p>Didik Setiawan</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>216</li>
                            <li>3 Jan 2018</li>
                            <li>9786026673343</li>
                            <li>Indonesia</li>
                            <li>Start Up</li>
                            <li>0.17 kg</li>
                            <li>14 cm</li>
                            <li>20 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                    
                </div>
                <img src="../gambar/buku2.jpg" alt="">
            </div>
            <div class="daftar-buku">
                <div class="deskripsi">
                    <p>Logika Pemrograman Python</p>
                    <p>Abdul Kadir</p>
                    <nav>
                        <ul>
                            <li>Jumlah Halaman</li>
                            <li>Tanggal Terbit</li>
                            <li>ISBN</li>
                            <li>Bahasa</li>
                            <li>Penerbit</li>
                            <li>Berat</li>
                            <li>Lebar</li>
                            <li>Panjang</li>
                        </ul>
                        <ul>
                            <li>568</li>
                            <li>15 Jul 2019</li>
                            <li>9786230002274</li>
                            <li>Indonesia</li>
                            <li>Elex Media Komputindo</li>
                            <li>0.560 kg</li>
                            <li>14 cm</li>
                            <li>21 cm</li>
                        </ul>
                        <button class="button">Pinjam</button>
                    </nav>
                   
                </div>
                <img src="../gambar/buku3.jpg" alt="">
            </div>
            <div><center><button class="button">Tampilkan Lebih Banyak</button></center></div>
            <br>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Giri Kusuma</p>
        </div>
        
    </div>
</body>
</html>