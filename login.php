<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Gaya CSS untuk tampilan halaman login */
        
        body {
            background-image: url('lgi.jpg');
            font-family: Arial, sans-serif;
           
        }
        
       
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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

        .message a {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Halaman Login</h2>
        <form action="proses_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="message">
            Belum punya akun? <a href="daftar.php">Daftar disini</a>
        </div>
    </div>
</body>
</html>