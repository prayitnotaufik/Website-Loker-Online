<?php
    session_start();
    include('../config/connection.php');
    
    $id_joblist = $_GET["id_joblist"];
    $id_user = $_GET["id_user"];
    
    $check = "SELECT * FROM job_apply WHERE id_user = '$id_user' AND id_joblist = '$id_joblist' ";
    $result = mysqli_query($con,$check);
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)==1){
        header("Location:../joblist.php");
    } else {
        $sql = "INSERT INTO job_apply (id_joblist,id_user) VALUES ('$id_joblist', '$id_user')";
        if (mysqli_query($con, $sql)) {
            header("Location:../joblist.php");
        }
        mysqli_close($con);
    }


    
?>