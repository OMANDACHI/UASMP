<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Aplikasi Penjualan Barang</title>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
    <h1>Dachi Shopping</h1>

    <?php
        // Koneksi ke database
        $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

        // Memproses data yang di-submit saat tombol simpan ditekan
        if (isset($_POST['proses'])) {
            $nama_barang = $_POST['nama-barang'];
            $harga_barang = $_POST['harga-barang'];
            $jumlah_barang = $_POST['jumlah-barang'];
            
            // Query untuk melakukan INSERT data ke tabel barang
            $query = "INSERT INTO barang (nama_barang, harga_barang, jumlah_barang) VALUES ('$nama_barang', $harga_barang, $jumlah_barang)";
            mysqli_query($koneksi, $query);
        }
    ?>

    <form action="" method="post">
        <table>
            <label for="nama-barang">Nama Barang:</label>
            <input type="text" id="nama-barang" name="nama-barang" required><br>
            <br>
            <label for="harga-barang">Harga Barang:</label>
            <input type="number" id="harga-barang" name="harga-barang" required><br>
            <br>
            <label for="jumlah-barang">Jumlah Barang:</label>
            <input type="number" id="jumlah-barang" name="jumlah-barang" required><br>
            <br>
            <input type="submit" value="Simpan" name="proses">
        </table>
    </form>

    <?php
        // Query untuk melakukan SELECT data dari tabel barang
        $query_select = "SELECT * FROM shop_pnjl";
        $result = mysqli_query($koneksi, $query_select);

        // Menampilkan data barang dalam tabel
    
        echo "<table id='keranjang'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nama Barang</th>";
        echo "<th>Harga Barang</th>";
        echo "<th>Jumlah Barang</th>";
        echo "<th>Total Harga</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['nama_barang']."</td>";
            echo "<td>".$row['harga_barang']."</td>";
            echo "<td>".$row['jumlah_barang']."</td>";
            echo "<td>".$row['harga_barang'] * $row['jumlah_barang']."</td>";
            echo "</tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <button onclick="goBack()">Kembali</button>
</body>
</html>
