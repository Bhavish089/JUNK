<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: #fff;">
    <div class="container">
        <div class="box">
            <h1>Welcome, <span><?= $_SESSION['name']; ?></span></h1>
            <p>This is a <strong>User</strong> page</p>
            <a onclick="window.location.href='logout.php'" class="btn">Logout</a>
        </div>
    </div>
</body>
</html>