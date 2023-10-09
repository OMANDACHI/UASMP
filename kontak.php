<!DOCTYPE html>
<html>
<head>
  <title>Kontak</title>
  <style>
    body{
      background-color: #E0E9F0;
      background-image: url('fto.jpg');
    }
    
    #barcode {
      width: 300px;
      height: 150px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 20px;
      font-weight: bold;
    }
    
    .custom-text {
      color: purple;
      font-size: 24px;
      font-weight: bold;
      text-shadow: 2px 2px 4px #000000;
    }
    
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .content {
      text-align: center;
    }
    
    .btn-container {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }
  </style>
</head>
<body>
  <div class="content">
    <p class="custom-text">BARCODE OMAN_DC</p>
    <div id="barcode">
      <a href="https://api.whatsapp.com/send?phone=6285275774932" onclick="goBack()">
        <img src="https://api.qrserver.com/v1/create-qr-code/?data=https%3A%2F%2Fapi.whatsapp.com%2Fsend%3Fphone%3D6281234567890&amp;size=200x200" alt="WhatsApp Barcode" />
      </a>
    </div>
  </div>
  
  <div class="btn-container">
    <a href="tentang.php" class="btn">Kembali</a>
  </div>
  
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>
