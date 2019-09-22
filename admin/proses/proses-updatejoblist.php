<?php
    include '../../config/connection.php';

    $id = $_POST["idJoblist"];
    $jobname = $_POST["jobname"];
    $kota = $_POST["kota"];
    $gaji = $_POST["gaji"];
    $experience = $_POST["experience"];
    $tag1 = $_POST["tag1"];
    $tag2 = $_POST["tag2"];
    $tag3 = $_POST["tag3"];
    $tag4 = $_POST["tag4"];
    $code = $_FILES['file']['error'];
    if ($code === 0) {     

        $destination_path = getcwd();

        $error = "";
        $nama_folder = "foto";
        $tmp = $_FILES['file']['tmp_name'];
        $nama_file = $_FILES['file']['name'];
        $path = $destination_path . "\\..\\$nama_folder\\$nama_file";


        $ukuran = $_FILES['file']['size'];
        if ($ukuran > 2000000) {
            $error = urldecode("Ukuran melebihi 2 MB");
            header("Location:../update-joblist.php?error=$error");
        }

        $tipe_file = array('image/jpeg', 'image/gif', 'image/png');
        if (!in_array($_FILES['file']['type'], $tipe_file)) {
            $error = urldecode("Cek Kembali Ekstensi File Anda (*jpeg, *jpg, *gif, *png)");
            header("Location:../update-joblist.php?error=$error");
        }

        if(move_uploaded_file($tmp, $path)) {
            $query = "UPDATE joblist SET jobname = '$jobname' , kota = '$kota' , gaji = '$gaji' , pengalaman = '$experience' , tag1 = '$tag1' , tag2 = '$tag2' , tag3 = '$tag3' , tag4 = '$tag4' , foto = '$nama_file' WHERE id_joblist = '$id' ";

            if (mysqli_query($con, $query)) {
                header("Location:../joblist.php");
            } else {
                $error = urldecode("Data tidak berhasil ditambahakan");
                header("Location:../update-joblist.php?error=$error");
            }
        }
    } else {
        $error = urldecode("Foto tidak berhasil terupload");
        header("Location:../update-joblist.php?error=$error");
    }
    mysqli_close($con); 
?>