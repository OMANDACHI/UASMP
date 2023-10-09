<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            background-image: url('hlmn.jpg');
            background-size: cover;
        }
        
        .navbar {
            background-color: #2F4F4F;
            color: #fff;
            padding: 10px;
        }
        
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        
        .navbar li {
            margin: 0 10px;
        }
        
        .navbar a {
            text-decoration: none;
            color: white;
        }
        
        .jumbotron {
            color: #000000;
            text-align: center;
        }
        
        .jumbotron h1 {
            font-size: 48px;
            margin-bottom: 0px;
        }
        
        .jumbotron p {
            font-size: 24px;
            margin-bottom: 50px;
        }
        
        .footer {
            background-color: #2F4F4F;
            color: #fff;
            padding: 5px;
            text-align: center;
        }
        
        .highlight {
            background-color: yellow;
        }
        
        #container {
            position: relative;
        }
        
        #container img {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translate(0, -50%);
            margin-right: 0px; /* Atur margin kanan jika diperlukan */
            margin-left: 50px; /* Atur margin kiri sesuai kebutuhan */
            width: 313px;
        }

        .teks-atas-kanan {
            position: absolute;
            top: 10px;
            right: 10px;
            color: black;
            padding: 10px;
            font-size: 16px;
            font-family: Arial, sans-serif;
            font-weight: bold;
            color: #5173b0;
        }
        .teks-atas-kanan {
        font-family: Arial, sans-serif;
        }
                
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="admin.php">Beranda</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="produk.php">Galerry</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
    </div>
   
    <div style="background-color: yellow; color: purple; height: 55px; width: 280px">
        <h1><u><b>KEDAY KELSEN</b></u></h1>
    </div>
    
    <h2 style="color: black;">KEDAY RESMI ADIRA FINANCE</h2>
    
    <div style="color: yellow;">
        <h4><u><b><li>Dapatkan Berbagai Produk dan Layanan Khusus Pembiayaan Adira Finance Disini:</li></b></u><br></h4>
    </div>
        
    <ul>
        <li>Kredit sepeda motor baru (Honda, Yamaha, Kawasaki) dan motor bekas.</li>
        <li>Pinjaman dana tunai dan jaminan BPKB (Motor dan Mobil).</li>
        <li>Kredit elektronik, handphone dan perabot.</li>
        <li>Terima pembayaran angsuran adira finance.</li>
    </ul>
    <div id="container">
        <img src="cilla.png" alt="Deskripsi foto">
        
    </div>

    <div class="teks-atas-kanan">
        <p>Syariah</p>
        <p>Adira</p>
        <p>Finance</p>
        <p>Cabang Ciputat</p>
    </div>

    <a href="login.php" class="btn"><li>Lihat Selengkapnya</li></a>
    <div class="stiker1">
        <img src="" alt="Stiker 1">
    </div>

    <div class="stiker stiker2">
        <img src="stiker2.png" alt="Stiker 2">
    </div>

    <div class="stiker stiker3">
        <img src="stiker3.png" alt="Stiker 3">
    </div>
    <br>
    <br>
    <br><br>
    
    <div>
     <img src="wa.jpg" alt="Deskripsi foto" style="width: 300px; height: auto;">
    </div>
     
    <div class="footer">
        Keday Kelsen
        <li>kelsenmoho@gmail.com</li>
        <li>Jl TPU Parakan  Pondok Benda , Kec. Pamulang, Kota Tangerang Selatan, Banten 15416</li>
    </div>
</body>
</html>
