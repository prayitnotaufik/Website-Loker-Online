<?php
/***** Include db connection file *****/
include '../config/connection.php';

/***** QUERY TO GET SPECIFIC ITEM *****/
$id = $_GET["id"]; // get id_barang from url

$query = "SELECT * FROM joblist WHERE id_joblist = $id ";
$result = mysqli_query($con, $query);

$item = mysqli_fetch_assoc($result); // query result holder variable
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <?php include 'sidebar.php' ?>
    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Joblist</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="proses/admin-logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Update Joblist</h4>
                            </div>
                            <div class="content">
                                <?php

                                ?>
                                <form action="proses/proses-updatejoblist.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                                <input type="hidden" name="idJoblist" value="<?php echo $item["id_joblist"] ?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Jobname</label>
                                                <input type="text" id="jobname" name="jobname" class="form-control" placeholder="  " value=" <?php echo $item["jobname"] ?> " required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Kota</label>
                                                <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota" value=" <?php echo $item["kota"] ?> " required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gaji</label>
                                                <input type="number" name="gaji" id="gaji" class="form-control" placeholder="$Dollar" value="<?php echo $item["gaji"] ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Experience</label>
                                                <input type="text" id="experience" name="experience" class="form-control" placeholder="Fresh Graduate/Expert" value="<?php echo $item["pengalaman"] ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Tag1</label>
                                                <input type="text" id="tag1" name="tag1" class="form-control" placeholder="tag" value="<?php echo $item["tag1"] ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Tag2</label>
                                                <input type="text" id="tag2" name="tag2" class="form-control" placeholder="tag" value="<?php echo $item["tag2"] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Tag3</label>
                                                <input type="text" id="tag3" name="tag3" class="form-control" placeholder="tag" value="<?php echo $item["tag3"] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Tag4</label>
                                                <input type="text" id="tag4" name="tag4" class="form-control" placeholder="tag" value="<?php echo $item["tag4"] ?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file" name="file" for="file" class="form-control" value="<?php echo $item["foto"] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <button type="submit" class="col-md-4 btn btn-success btn-block btn-fill">Update</button>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="col-md-4 btn btn-danger btn-block btn-fill" onclick=clearForm() >Clear Form</button>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="joblist.php" class="col-md-4 btn btn-warning btn-block btn-fill">Kembali</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>

    <script>
        // clear form input
        function clearForm() {
            $('#jobname').val('');
            $('#kota').val('');
            $('#gaji').val('');
            $('#experience').val('');
            $('#tag1').val('');
            $('#tag2').val('');
            $('#tag3').val('');
            $('#tag4').val('');
        }
    </script>
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
