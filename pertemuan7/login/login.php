<?php
// Cek apakah form login telah disubmit
if (isset($_POST["login"])) {
    // Cek username dan password
    if($_POST["username"] == "admin" && $_POST["password"] == "admin321") {
        // Jika username dan password benar, redirect ke halaman admin.php
        header("Location: admin.php");
        exit;
    } else {
        // jika username dan password salah, tampilkan pesan error
        $error = true;
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if(isset($error)): ?>
        <p style="color: red; font-style: italic">username / password salah!</p>
    <?php endif; ?>

    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </li>
        <li>
            <button type="submit" name="login">Login</button>
        </li>
    </form>
    </ul>
</body>
</html>