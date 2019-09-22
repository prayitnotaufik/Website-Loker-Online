<?php

include '../../config/connection.php';


$id = $_GET["id"];


$query = "UPDATE joblist SET flag = '0' WHERE joblist.id_joblist='$id'";


if (mysqli_query($con, $query)) {
    header("Location:../joblist.php");
} else {
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../joblist.php?error=$error");
}


mysqli_close($con); 

?>