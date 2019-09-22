<?php

include '../../config/connection.php';


$id = $_GET["id"];



$query = "UPDATE job_apply SET status = 'Accepted' WHERE job_apply.id_apply='$id'";


if (mysqli_query($con, $query)) {
    header("Location:../pelamar.php");
} else {
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../pelamar.php?error=$error");
}


mysqli_close($con); 

?>