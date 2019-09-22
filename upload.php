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
            <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">Upload</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

    
    <div class="container " style ="padding-bottom:90px;padding-top:90px;">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 border border-primary">
                <form action="proses/proses_cv.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input type="hidden" name="id" value="<?php echo @$id_user ?>">
                    <div class="form-group">
                    <h1 style="text-align:center">Upload CV</h1>
                        <input type="file" name="file" for="file" class="form-control" required>
                    </div>
                   
                        <button type="submit" class="col-md-12 btn btn-success btn-block btn-fill">Upload</button>
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

<!-- ============================================================================= -->
    <?php include 'include/footer.php' ?>
</body>
</html>
