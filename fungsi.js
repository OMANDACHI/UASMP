document.getElementById("form-penjualan").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah form dari refresh halaman
  
    // Mendapatkan nilai dari input
    var namaBarang = document.getElementById("nama-barang").value;
    var hargaBarang = document.getElementById("harga-barang").value;
    var jumlahBarang = document.getElementById("jumlah-barang").value;
  
    // Menghitung total harga
    var totalHarga = hargaBarang * jumlahBarang;
  
    // Membuat baris baru dalam tabel keranjang
    var newRow = document.createElement("tr");
    newRow.innerHTML = "<td>" + namaBarang + "</td><td>" + hargaBarang + "</td><td>" + jumlahBarang + "</td><td>" + totalHarga + "</td>";
  
    // Menambahkan baris baru ke dalam tabel keranjang
    document.getElementById("keranjang").getElementsByTagName("tbody")[0].appendChild(newRow);
  
    // Reset nilai input setelah ditambahkan ke keranjang
    document.getElementById("nama-barang").value = "";
    document.getElementById("harga-barang").value = "";
    document.getElementById("jumlah-barang").value = "";
  });