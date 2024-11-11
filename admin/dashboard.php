<?php

session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    <h2>Selamat Datang di Dashboard, <?php echo $_SESSION['username']; ?>!</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>