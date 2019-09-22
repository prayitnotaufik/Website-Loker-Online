<?php
    session_start();
    include('../config/connection.php');
    
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    
    $sql = "INSERT INTO akun (nama,email,username,password) VALUES ('$nama', '$email', '$uname', '$pass')";
    if (mysqli_query($con, $sql)) {
        header("Location:../login/login.php");
    }
    mysqli_close($con);
?>