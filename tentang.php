<!DOCTYPE html>
<html>
<head>
  <title>Tentang Kami</title>
  <style>
    /* Gaya tampilan halaman */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E0FFFF;
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
        
    h1 {
      color: #333;
    }
    h2 {
      color: #555;
    }
    p {
      color: #777;
    }
    .contact-info {
      margin-top: 20px;
    }
    .contact-info p {
      margin: 5px 0;
    }
    .message {
      margin-top: 20px;
    }
    .message label {
      width: 10px;
      
    }
    .message input,
    .message select,
    .message textarea {
      width: 300px;
    }
    .message .row {
      margin-bottom: 10px;
    }
   
   
    .message .wpcf7-response-output {
     
    }
    .message .wpcf7-submit {
      margin-top: 5px;
    }
    .map {
      position: absolute;
      top: 20px;
      right: 20px;
    }
    #map {
      height: 400px;
      width: 100%;
    }
    
  </style>
  <script>
  document.getElementById('form-penjualan').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form secara default

    // Lakukan pengiriman form menggunakan AJAX atau metode lainnya di sini
    // Contoh menggunakan metode Fetch API:
    fetch('data.php', {
      method: 'POST',
      body: new FormData(this)
    })
    .then(function(response) {
      // Tangani respons dari server (jika diperlukan)
      console.log(response);
    })
    .catch(function(error) {
      // Tangani kesalahan (jika diperlukan)
      console.error(error);
    });
  });
</script>

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
  <h1>Tentang Kami</h1>
  
  <h3>Informasi Kontak</h3>
  <div class="contact-info">
    <p>Alamat : Jl TPU Parakan  Pondok Benda , Kec. Pamulang, Kota Tangerang Selatan, Banten 15416</p>
    <p>Telepon: 0859-4636-6522</p>
    <p>Email  : kelsenmoho@gmail.com</p>
  </div>
  

  <!-- Formulir "Leave Us a Message" -->
  <form id="form-penjualan" action="data.php" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="tlp">Telepon:</label></td>
                <td><input type="number" id="tlp" name="tlp" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><input type="text" id="alamat" name="alamat" required></td>
            </tr>
            <tr>
                <td><label for="department">Departemen:</label></td>
                <td>
                    <select name="department" id="department" required>
                        <option value="marketing">Marketing</option>
                        <option value="developer">Developer</option>
                        <option value="sales">Sales</option>
                        <option value="technician">Technician</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="message">Message:</label></td>
                <td><textarea name="message" id="message" cols="40" rows="10" required></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>

  <div class="search-container">
    </form>
  </div>
</body>
</html>
