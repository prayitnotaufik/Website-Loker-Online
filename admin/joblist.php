<?php  include('../config/connection.php'); ?>
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
                                <h4 class="title">Job List</h4>
                            </div>
                            <div class="content">
                                <table id="pendaftar" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Id</th>
                                            <th>Jobname</th>
                                            <th>Tags</th>
                                            <th>City</th>
                                            <th>Salary</th>
                                            <th>Experience</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM joblist WHERE flag = '1' ";
                                            $result = mysqli_query($con,$query);
                                            if(mysqli_num_rows($result)>0){
                                                $index = 1;
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $id = $row["id_joblist"];?>
                                                    <tr>
                                                        
                                                        <td> <?php echo $row["id_joblist"]?> </td>
                                                        <td> <?php echo $row["jobname"]?> </td>
                                                        <td> 
                                                            <?php echo $row["tag1"]?> ,
                                                            <?php echo $row["tag2"]?> ,
                                                            <?php echo $row["tag3"]?> ,
                                                            <?php echo $row["tag4"]?>
                                                        </td>
                                                        <td><?php echo $row["kota"] ?></td>
                                                        <td>$<?php echo $row["gaji"] ?></td>
                                                        <td><?php echo $row["pengalaman"] ?></td>
                                                        <td> <img src="foto/<?php echo $row["foto"] ?>" alt="foto" width="80px"></td> 
                                                        <td>
                                                            <a href="update-joblist.php?id= <?php echo $id ?> " class="btn btn-warning btn-fill" >Update</a>
                                                             <a href="proses/proses-deletejoblist.php?id= <?php echo $id ?> " class="btn btn-danger btn-fill">Delete</a> 
                                                        </td>
                                                    </tr>
                                               <?php } ?>
                                           <?php } 
                                            // close mysql connection
                                            mysqli_close($con); 
                                           ?>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="add-joblist.php" class="btn btn-primary btn-block btn-fill">Add Job</a>
                                    </div>
                                    
                                </div>
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
