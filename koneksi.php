<?php
$serverName = "sqlsrv";
$databaseName = "Users";
$uid = "omanadil";
$pwd = "suara@123";

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$databaseName", $uid, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mendapatkan data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mengecek kecocokan username dan password
    $sql = "SELECT * FROM Users WHERE Username = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        echo "Login berhasil!";
        // Lakukan tindakan setelah login sukses
    } else {
        echo "Username atau password salah!";
    }

} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>
