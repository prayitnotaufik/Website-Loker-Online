<?php
    session_start();
    include('../config/connection.php');
    
    $email = $_POST["email"];
    
    $sql = "INSERT INTO subscriber (email) VALUES ('$email')";
    if (mysqli_query($con, $sql)) {
        header("Location:../index.php");
    }
    mysqli_close($con);
?>