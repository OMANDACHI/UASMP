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

    <form action="" method="post">
        <table>
        <label for="nama-barang">Nama Barang:</label>
        <input type="text" id="nama-barang" required><br>
        <br>
        <label for="harga-barang">Harga Barang:</label>
        <input type="number" id="harga-barang" required><br>
        <br>
        <label for="jumlah-barang">Jumlah Barang:</label>
        <input type="number" id="jumlah-barang" required><br>
        <br>
        
        </table>
</form>
<input type="submit" value="Simpan" name="proses" onclick="tambahkanData()">

    <table id="keranjang">
        <thead>
            <tr>      
                <th>Nama Barang</th>          
                <th>Harga Barang</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data keranjang akan ditambahkan secara dinamis melalui JavaScript -->
        </tbody>
    </table>
    <script>
    function tambahkanData() {
        var namaBarang = document.getElementById("nama-barang").value;
        var hargaBarang = document.getElementById("harga-barang").value;
        var jumlahBarang = document.getElementById("jumlah-barang").value;
        var totalHarga = hargaBarang * jumlahBarang;

        var row = document.createElement("tr");

        row.innerHTML = "<td>" + namaBarang + "</td>" +
                        "<td>" + hargaBarang + "</td>" +
                        "<td>" + jumlahBarang + "</td>" +
                        "<td>" + totalHarga + "</td>" +
                        "<td><button onclick='hapusData(this)'>Hapus</button></td>";

        var table = document.getElementById("keranjang");

        table.appendChild(row);

        // Mereset nilai input setelah data ditambahkan
        document.getElementById("nama-barang").value = "";
        document.getElementById("harga-barang").value = "";
        document.getElementById("jumlah-barang").value = "";
    }

    function hapusData(button) {
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>



    <br>
    <br>
    <br>
    <br>
    <br>
    <button onclick="goBack()">Kembali</button>
</body>
</html>


