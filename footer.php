<div class="footer">

    <div class="container">



        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h4>Information</h4>
                <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                    <!--<li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>   -->
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Newsletter</h4>
                <p>Get notified about the latest properties in our marketplace.</p>
                <form class="form-inline" role="form">
                    <input type="text" placeholder="Enter Your email address" class="form-control">
                    <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Follow us</h4>
                <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Contact us</h4>
                <p><b>Bootstrap Realestate Inc.</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> Rajshahi , Bangladesh <br>
                    <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:info@baynam@gmail.com?Subject=Site%20mail" target="_top">info@baynama.com</a><br>
                    <span class="glyphicon glyphicon-earphone"></span> <a href="tel:01887323311">+880-1887-323311</a></p>
            </div>
        </div>
        <p class="copyright">Copyright 2018-2019. Zahidul Islam. Mitu Ram. All rights reserved. </p>


    </div>
</div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-6 login">
                    <h4>Login</h4>
                    <form name="add_form" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Enter email or Phone">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" name="login" class="btn btn-success" title="Click to proceed..." role='button'>Sign in</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h4>New User Sign Up</h4>
                    <p>Join today and get updated with all the properties deal happening around.</p>
                    <button type="submit" class="btn btn-info" onclick="window.location.href='register.php'">Join Now</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.modal -->



</body>

</html>
