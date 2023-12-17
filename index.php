<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
        
        <h2>Halaman Login</h2>
        <form method="POST" action="login_process.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
        <p>Belum punya akun? <a href="daftar.php">Silahkan daftar</a></p>
    </div>
    
</body>
</html>
