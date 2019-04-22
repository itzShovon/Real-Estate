<?php include'header.php';?>
<?php include 'assets/custom/php/user-register.php' ?>
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="index.php">Home</a> / Register</span>
        <h2>Register</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
                <form name="add" class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
                    <input type="file" class="form-control" accept="image/*" placeholder="Your Photo" name="photo">
                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                    <input type="text" class="form-control" placeholder="Enter Email" name="email">
                    <input type="text" class="form-control" placeholder="Enter Phone" name="phone">
                    <input type="password" class="form-control" placeholder="Your Password" name="password">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="conformPassword">
                    <input type="text" class="form-control" placeholder="Your Region" name="region">
                    <input type="text" class="form-control" placeholder="Your District" name="district">
                    <input type="text" class="form-control" placeholder="Your City" name="city">
                    <input type="text" class="form-control" placeholder="Your Ward" name="ward">
                    <button type="submit" class="btn btn-success" name="submit">Register</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include'footer.php';?>
