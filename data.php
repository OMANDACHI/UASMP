<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into shop_pnjl set
    nama_barang = '$_POST[nama_barang]',
    harga_barang = '$_POST[harga_barang]',
    jumlah_barang = '$_POST[jumlah_barang]'");

    echo "Data barang baru telah tersimpan"
}

?>