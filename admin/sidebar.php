<?php
    session_start();
    @$username = $_SESSION["username"];
?>

<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <?php echo @$username ?>
                </a>
            </div>

            <ul class="nav ">
                <li class="btns ">
                    <a href="dashboard.php" >
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="btns">
                    <a href="user.php">
                        <i class="pe-7s-users"></i>
                        <p>Data Pendaftar</p>
                    </a>
                </li>
                <li class="btns">
                    <a href="subscriber.php">
                        <i class="pe-7s-bell"></i>
                        <p>Subscriber</p>
                    </a>
                </li>
                <li class="btns">
                    <a href="joblist.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Job List</p>
                    </a>
                </li>
                <li class="btns">
                    <a href="pelamar.php">
                        <i class="pe-7s-study"></i>
                        <p>Job Aplicant</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
