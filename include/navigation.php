<?php
    session_start();
    @$username = $_SESSION["username"];
    @$id_user = $_SESSION["id"];
?>

<body>
    <!-- header -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h1><a class="navbar-brand" href="index.php">WARJO.CO </a></h1>
                    <button class="navbar-toggler ml-lg-auto ml-sm-5 bg-light" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <?php if (isset($username)) { ?>
                        <ul class="ml-lg-5 navbar-nav mr-lg-auto">
                            <li class="nav-item mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="nav-item  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="about.php">about</a>
                            </li>
                            <li class="nav-item  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="joblist.php">Job List</a>
                            </li>
                            <li class="nav-item  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="status.php">Job Status</a>
                            </li>
                        </ul>    
                            <button type="button" class="btn w3ls-btn text-uppercase font-weight-bold d-block"  aria-pressed="false" style="padding-left:0px;margin-left:-5px" >
                            <a href="#"> <?php echo @$username ?> </a> 
                            
                            
                            </button>

                            <button type="button" class="btn w3ls-btn text-uppercase font-weight-bold d-block" disabled aria-pressed="false" >
                            |
                            </button>

                           <button type="button" class="btn w3ls-btn text-uppercase font-weight-bold d-block" aria-pressed="false" > <a href="proses/proses_logout.php">logout</a>
                            </button>


                        <?php } else { ?>
                        <ul class="ml-lg-5 navbar-nav mr-lg-auto">
                            <li class="nav-item mr-lg-4 mt-lg-0 mt-sm-4 mt-3 ">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="nav-item  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="about.php">about</a>
                            </li>
                            <li class="nav-item  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="joblist.php">Job List</a>
                            </li>
                        </ul>
                            <button type="button" class="btn w3ls-btn text-uppercase font-weight-bold d-block" aria-pressed="false" >
                           <a href="login/register.php">Register</a>
                        </button>
                        <button type="button" class="btn w3ls-btn text-uppercase font-weight-bold d-block" disabled aria-pressed="false" >
                            |
                            </button>
                        <button type="button" class="btn w3ls-btn text-uppercase font-weight-bold d-block"
                            aria-pressed="false" >
                           <a href="login/login.php">Log in</a>
                        </button>
                        <?php } ?>

                    </div>
                </nav>
            </div>
        </header>
    <!-- //header -->
</body>