<?php  include('config/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.html' ?>
<body>
    <?php include 'include/navigation.php' ?>
    <div class="inner-banner-w3ls">
    </div>
        
    </div>
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center bg-theme">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">Job Status</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

    <div class="container" style="min-height:500px">
        <div class="row">
            <div class="col-md-12 text-center" style="padding-bottom:9px">
                <h5>Upload CV terbaru anda untuk meyakinkan WARJO COMPANY merekrut anda <a href="upload.php">klik disini</a>!</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Jobname</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $id = @$id_user;
                            $query = "SELECT * FROM job_apply WHERE id_user = $id ";
                            $result = mysqli_query($con,$query);
                            if(mysqli_num_rows($result)>0){
                                $index = 1;
                                while($row = mysqli_fetch_assoc($result)){
                                    
                                    $jobname = "SELECT * FROM joblist WHERE id_joblist = $row[id_joblist] ";
                                    $rowjob = mysqli_query($con,$jobname);
                                    $rowjob2 = mysqli_fetch_assoc($rowjob);
                                    ?>

                                    <tr>
                                        <td> <?php echo $index++ ?> </td>
                                        <td> <?php echo $rowjob2["jobname"] ?> </td>
                                        <td> <?php echo $row["status"] ?> </td>
                                    </tr>


                                <?php } ?>
                            <?php } ?> 
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 border border-primary">
            <h5 class="text-center">Upload CV terbaru anda untuk meyakinkan WARJO COMPANY merekrut anda <a href="upload.php">klik disini</a>!</h5>
                <form action="proses/proses_cv.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                    <div class="form-group">
                    <h1 style="text-align:center">Upload CV</h1>
                        <input type="file" name="file" for="file" class="form-control" required>
                    </div>
                   
                        <button type="submit" class="col-md-12 btn btn-success btn-block btn-fill">Upload</button>
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div> -->
    </div>

<!-- ============================================================================= -->
    <?php include 'include/footer.php' ?>
</body>
</html>