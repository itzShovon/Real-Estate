<?php include 'header.php';?>
<?php include 'assets/custom/php/session.php'; ?>
<?php include 'assets/custom/php/user-edit.php'; ?>
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="index.php">Home</a> / Register</span>
        <h2>Update</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
                <form name="add" class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
                    <input type="file" class="form-control" accept="image/*" placeholder="Your Photo" name="photo">
                    <input type="text" class="form-control" placeholder="Your Name" name="name" value="<?php echo $name;?>">
                    <input type="password" class="form-control" placeholder="Old Password" name="oldPassword">
                    <input type="password" class="form-control" placeholder="New Password" name="newPassword">
                    <input type="text" class="form-control" placeholder="Your Region" name="region" value="<?php echo $region;?>">
                    <input type="text" class="form-control" placeholder="Your District" name="district" value="<?php echo $district;?>">
                    <input type="text" class="form-control" placeholder="Your City" name="city" value="<?php echo $city;?>">
                    <input type="text" class="form-control" placeholder="Your Ward" name="ward" value="<?php echo $ward;?>">
                    <button type="submit" class="btn btn-success" name="update">Update</button>
                </form>
            </div>

            
        </div>
    </div>
</div>

<?php include'footer.php';?>
