<?php
   include('../config/connection.php');
?>
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


    <!--  CSS for Demo Purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script>
        $(document).ready(function(){
            $('ul li a').click(function(){
                $('li ').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>

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
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="proses/admin-logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- =================== -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="header">
                                <h4 class="title text-center">Pendaftar</h4>
                            </div>
                            <div class="text-center content">
                                <?php
                                    $kueri = mysqli_query($con, "SELECT * FROM akun WHERE level='2' ");
                                    $data = array();
                                    while (($row = mysqli_fetch_array($kueri))!=null){
                                        $data[] = $row;
                                    }
                                    $cont = count($data);
                                ?>
                                <h1><?php echo($cont)?></h1>
                                <hr>
                                <a href="user.php"> <h5>Click for details</h5></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="header">
                                <h4 class="title text-center">Subsciber</h4>
                            </div>
                            <div class="text-center content">
                                <?php
                                    $kueri = mysqli_query($con, "SELECT * FROM subscriber ");
                                    $data = array();
                                    while (($row = mysqli_fetch_array($kueri))!=null){
                                        $data[] = $row;
                                    }
                                    $cont = count($data);
                                ?>
                                <h1><?php echo($cont) ?></h1>
                                <hr>
                                <a href="subscriber.php"> <h5>Click for details</h5> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="header">
                                <h4 class="title text-center">Jumlah Pelamar</h4>
                            </div>
                            <div class="text-center content">
                                <?php
                                    $kueri = mysqli_query($con, "SELECT * FROM job_apply ");
                                    $data = array();
                                    while (($row = mysqli_fetch_array($kueri))!=null){
                                        $data[] = $row;
                                    }
                                    $cont = count($data);
                                ?>
                                <h1><?php echo($cont) ?></h1>
                                <hr>
                                <a href="pelamar.php"> <h5>Click for details</h5> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="header">
                                <h4 class="title text-center">Jumlah Pekerjaan</h4>
                            </div>
                            <div class="text-center content">
                                <?php
                                    $kueri = mysqli_query($con, "SELECT * FROM joblist WHERE flag = '1' ");
                                    $data = array();
                                    while (($row = mysqli_fetch_array($kueri))!=null){
                                        $data[] = $row;
                                    }
                                    $cont = count($data);
                                ?>
                                <h1> <?php echo $cont ?> </h1>
                                <hr>
                                <a href="joblist.php"> <h5>Click for details</h5> </a>
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

    <!-- <script>
        // Get the container element
        var btnContainer = document.getElementById("myDIV");

        // Get all buttons with class="btn" inside the container
        var btns = btnContainer.getElementsByClassName("btns");

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
            });
        }
    </script> -->

	<!-- <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script> -->

</html>
