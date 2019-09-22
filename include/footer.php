<?php include 'config/connection.php'; ?>
<body>
    <!-- Footer -->
    <footer id="footer" class="py-sm-5 py-4 bg-theme">
        <div class="container">
            <div class="footer-top-w3ls">
                <h2><a href="index.html" class="navbar-brand">recruit</a></h2>
                <p class="text-white">“The basis of culture-driven recruiting is hiring on aptitude and attitude first,” says Lee-Anne, who hosted a holiday networking event and book launch at Workable’s downtown Boston office in early November. “The recruiting process has been broken for many years. My book teaches you how to beat the talent war with super creative ways to hire on culture first and let the recruiting do itself.” </p>
            </div>
            <div class="row  pt-5">
                <div class="col-lg-3 col-sm-6 footer_grid1">
                    <h5>Address</h5>
                    <div class="d-flex align-items-center">
                        <span class="fa fa-building mr-4"></span>
                        <p>Jl Semanggi Barat
                            <br>Malang, Jatim.</p>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <span class="fa fa-building mr-4"></span>
                        <p>Jl Simpang Remujung
                            <br>Malang, Jatim.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li>
                            <a href="index.php">
                                <span class="fa fa-play"></span>Home</a>
                        </li>
                        <li>
                            <a href="about.php">
                                <span class="fa fa-play"></span>About</a>
                        </li>
                        <li>
                            <a href="joblist.php">
                                <span class="fa fa-play"></span>Job List</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
                    <h5>subscribe to newsletter</h5>
                    <form action="proses/proses_subscribe.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control  border-0 border-rounded" id="emailid" placeholder="Enter email"
                                name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="Submit" class="form-control bg-light-theme  border-0 border-rounded" id="sub"
                                value="Submit" name="sub">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    <div class="cpy-right text-center py-4">
            <p class="text-dark">© 2018 Recruit. All rights reserved | Design by Prayitnotaufik
            </p>
        </div>
        <!-- login modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-theme1">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="proses/proses_login_joblist.php" method="post" class="p-3">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username" id="recipient-name"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password"
                                    required="">
                            </div>
                            <div class="right-w3l">
                                <input type="submit" name="submit" class="form-control bg-theme" value="Login">
                            </div>
                            <p class="text-center dont-do">Don't have an account?
                                <a href="login/register.php" class="text-dark">
                                    <strong>Register Now</strong></a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login modal -->
        <!-- register modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-theme1">
                        <h5 class="modal-title" id="exampleModalLabel1">Upload CV</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="proses/proses_cv.php" method="post" enctype="multipart/form-data" class="p-3">
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Upload your cv (*pdf) / max file size : 2mb</label>
                                <input type="file" class="form-control" placeholder="" name="cv" id="recipient-rname"
                                    required>
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control bg-theme" name="upload" value="Upload">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //register modal -->
        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- Slider-JavaScript -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider, #slider1").responsiveSlides({
                    auto: true,
                    nav: false,
                    speed: 1500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <!-- //Slider-JavaScript -->
        <!-- script for password match -->
        <script>
            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;
            }
    
            function validatePassword() {
                var pass2 = document.getElementById("password2").value;
                var pass1 = document.getElementById("password1").value;
                if (pass1 != pass2)
                    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                else
                    document.getElementById("password2").setCustomValidity('');
                //empty string means no validation error
            }
        </script>
        <!-- script for password match -->
        <!-- //js -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
    
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling -->
        <!-- smooth-scrolling-of-move-up -->
        <script>
            $(document).ready(function () {
                /*
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                };
                */
    
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
    
            });
        </script>
        <script src="js/SmoothScroll.min.js"></script>
        <!-- //smooth-scrolling-of-move-up -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/bootstrap.min.js"></script>
</body>