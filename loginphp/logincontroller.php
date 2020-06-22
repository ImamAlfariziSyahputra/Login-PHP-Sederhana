<?php 
    session_start();

    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($db1, $query);

    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['status'] = "sudah_login";
        $_SESSION['id_login'] = $data['id'];
        header("location:halaman_admin.php");
    } else{
        header("location:login.php?pesan=gagal login data tidak ditemukan");
    }
?>
