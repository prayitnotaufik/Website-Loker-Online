<?php
    include('../config/connection.php');
    session_start();
    $error = '';

    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) || !empty($_POST["password"])) {
            # Get username and password from user
            $username = $_POST["username"];
            $password = $_POST["password"];

            # Write MySql Query
            $query = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
            # Get the query result
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);

            # If username exist in database, save to the session and redirect to profile.php
            if(mysqli_num_rows($result) == 1) {
                if($row["level"] == 1) {
                    $_SESSION["username"] = $username;
                    $_SESSION["level"] = $row["level"];
                    header("Location: ../admin/dashboard.php");
                } else {
                    $_SESSION["username"] = $username;
                    $_SESSION["level"] = $row["level"];
                    $_SESSION["id"] = $row["id"];
                    header("Location: ../index.php");
                }
            } else {
                $error = urlencode("Username atau password salah!");
                header("Location: ../login/login.php?pesan=$error");
            }

            # Close connection to database
            mysqli_close($con);

        } else {
            $error = urlencode("Username atau password kosong!");
            header("Location: ../login/login.php?pesan=$error");
        }
    }
?>