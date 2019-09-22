<?php
    include '../config/connection.php';

    $id = $_POST["id"];
    $code = $_FILES['file']['error'];
    if ($code === 0) {     

        $destination_path = getcwd();

        $error = "";
        $nama_folder = "file";
        $tmp = $_FILES['file']['tmp_name'];
        $nama_file = $_FILES['file']['name'];
        $path = $destination_path . "\\..\\$nama_folder\\$nama_file";

        if (file_exists($path)) {
            $error = urldecode("File dengan nama yang sama sudah tersimpan, coba lagi");
            header("Location:../status.php?error=$error");
        }

        $ukuran = $_FILES['file']['size'];
        if ($ukuran > 2000000) {
            $error = urldecode("Ukuran melebihi 2 MB");
            header("Location:../status.php?error=$error");
        }

        $tipe_file = array('application/pdf');
        if (!in_array($_FILES['file']['type'], $tipe_file)) {
            $error = urldecode("Cek Kembali Ekstensi File Anda (*pdf)");
            header("Location:../status.php?error=$error");
        }

        if(move_uploaded_file($tmp, $path)) {
            $query = "INSERT INTO cv (id_user,cv) 
            VALUES ('$id' ,'$nama_file')";

            if (mysqli_query($con, $query)) {
                header("Location:../status.php");
            } else {
                $error = urldecode("Data tidak berhasil ditambahakan");
                header("Location:../status.php?error=$error");
            }
        }
    } else {
        $error = urldecode("Foto tidak berhasil terupload");
        header("Location:../status.php?error=$error");
    }
    mysqli_close($con); 
?>