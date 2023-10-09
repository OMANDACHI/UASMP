<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F0F8FF;
        }
        

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group button {
            width: 100%;
            padding: 8px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .message {
            text-align: center;
            margin-top: 10px;
        }

        .external-login {
            text-align: center;
            margin-top: 20px;
        }

        .external-login a {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4285f4;
            color: #fff;
            border-radius: 3px;
            text-decoration: none;
        }

        .external-login a:hover {
            background-color: #3367d6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Halaman Registrasi</h2>
        <form action="proses_daftar.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <button type="submit">Daftar</button>
            </div>
        </form>
        <div class="message">
            Sudah punya akun? <a href="login.php">Masuk disini</a>
        </div>
        <div class="external-login">
            <a href="proses_login_google.php">Daftar dengan Akun Google</a>
        </div>
    </div>
</body>
</html>
