<?php include 'config/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.html' ?>
<body>
    <?php include 'include/navigation.php' ?>
    <!-- <div class="jarak-atas">
    </div> -->
    <div class="inner-banner-w3ls">
    </div>
    <!-- breadcrumbs -->
    <div aria-label="breadcrumb" >
        <ol class="breadcrumb d-flex justify-content-center bg-theme">
            <li class="breadcrumb-item">
                <a href="index.php" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">Job List</li>
        </ol>
    </div>
    <!-- //breadcrumbs -->
    <!-- jobs -->
    <section class="employ-sec" style="">
        <div class="container">
            <div class="title-sec-w3layouts_pvt text-center pb-4">
                <span class="title-wthree">a world full of possibilities</span>
                <h4 class="w3layouts_pvt-head">allowing you to expand quickly.</h4>
            </div>
        </div>
        <div class="container">
            <div class="row" >
                <?php 

                    $query = "SELECT * FROM joblist WHERE flag = '1' ";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){ 
                            $id_joblist = $row["id_joblist"];
                            
                            ?>
                             
                            
                            
                            <div class="col-sm-4" >
                                <img src="admin/foto/<?php echo $row["foto"] ?>" alt="foto" class="img-fluid" style="">
                                    <div class="e-desc">
                                        <h5><?php echo $row["jobname"]?></h5>
                                        <hr>
                                        <ul class="e-tags">
                                            <li><?php echo $row["tag1"] ?></li>
                                            <li><?php echo $row["tag2"] ?></li>
                                            <li><?php echo $row["tag3"] ?></li>
                                            <li><?php echo $row["tag4"] ?></li>
                                        </ul>
                                        <hr>
                                        <ul class="desc-list" >
                                            <li>
                                                <span>City:</span>
                                                <?php echo $row["kota"] ?>
                                            </li>
                                            <li>
                                                <span>Salary:</span>
                                                $<?php echo $row["gaji"] ?>
                                            </li>
                                            <li>
                                                <span>Experience:</span>
                                                <?php echo $row["pengalaman"] ?>
                                            </li>
                                        </ul>
                                        <?php if (isset($username)) { ?>
                                            <a href="proses/proses_apply.php?id_joblist=<?php echo $id_joblist ?>&id_user=<?php echo @$id_user ?>" class="btn wthree-bnr-btn text-capitalize"  aria-pressed="false"role="button">Apply for job</a>
                                        <?php } else { ?>
                                            <a href="#exampleModal" class="btn wthree-bnr-btn text-capitalize" data-toggle="modal" aria-pressed="false" data-target="#exampleModal" role="button">Apply for job</a>
                                        <?php } ?>

                                        
                                    </div>
                            </div>

                        <?php } ?>
                    <?php } ?>
            </div>
        </div>       
    </section>
<!-- ============================================================================= -->
    <?php include 'include/footer.php' ?>
</body>
</html>