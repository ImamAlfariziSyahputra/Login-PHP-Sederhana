<?php 
    session_start();

    if($_SESSION['start']!="sudah_login"){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Yay! Selamat Datang : <?php echo $_SESSION['nama']; ?> </h1>

    <br>
    <a href="logout.php">Klik disini untuk logout.</a>
</body>
</html>