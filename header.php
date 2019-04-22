<?php
    // session_start();
    include('assets/custom/php/session.php');
    include('assets/custom/php/config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Baynama || বায়নামা </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
<!-- 	<link rel="stylesheet" href="assets/made/css/popup-note.css" />-->
  <link rel="stylesheet" href="assets/style.css"/>
<!--  <script src="assets/made/js/popup-note.js"></script>-->
    
<!--
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
-->
    
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body onload="functionAlert()">
    
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script>
        function functionAlert(msg, myYes) {
            var confirmBox = $("#confirm");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes").unbind().click(function() {
                confirmBox.hide();
            });
            confirmBox.find(".yes").click(myYes);
            confirmBox.show();
        }
    </script>
    <style>
        #confirm {
            display: none;
/*            background-color: #91FF00;*/
/*            border: 1px solid #aaa;*/
/*            position: fixed;*/
/*            width: 250px;*/
/*            left: 50%;*/
/*            margin-left: -100px;*/
            padding: 6px 8px 8px;
            box-sizing: border-box;
            text-align: center;
        }
        #confirm button {
/*            background-color: #48E5DA;*/
            display: inline-block;
            border-radius: 5px;
/*            border: 1px solid #aaa;*/
            margin: 5px;
            padding: 5px;
            text-align: center;
            width: 80px;
            cursor: pointer;
        }
        #confirm .message {
            font-family: sans-serif;
            width: auto;
            font-size: 20px;
            margin: 15px;
/*            text-align: left;*/
        }
        #confirm .yes {
            font-size: 40px;
        }
    </style>
    <div id = "confirm" class="alert alert-info fade in">
        <div class = "message">This site is under construction.</div>
        <h2 class="message">For details please contact.</h2>
        <a class="message btn btn-primary" href="mailto:info@baynam@gmail.com?Subject=Site%20mail" target="_top">E-mail:<wbr/> info@baynama.com</a>
        <br>
        <a class="message btn btn-primary" href="tel:01887323311">Call: +880-1887-323311</a>
        <br>
        <button class = "yes btn btn-primary">OK</button>
    </div>
<!--
    <script>
        function myFunction() {
            alert("Page is loaded");
//            swal({
//                title: 'Error!',
//                text: 'Do you want to continue',
//                type: 'error',
//                confirmButtonText: 'Cool'
//            })
        }
    </script>
-->
    
    <div class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h1>Hello, I am a modal!</h1>
        </div>
    </div>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <?php
                  if(isset($_SESSION['flag'])){
                    if($_SESSION['flag'] === '1'){
                        echo '<li><a href="add-post.php">Add Post</a></li>';
                        echo '<li><a href="dashboard.php">Dashboard</a></li>';
                    }
                  }
                ?>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                  if(isset($_SESSION['flag'])){
                    if($_SESSION['flag'] != '1');
                        else
                            echo '<li><a href="assets/custom/php/logout.php">Logout</a></li>';
                  }
                ?>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="images/logo.png" alt="Realestate"></a>

              <ul class="pull-right">
                <li><a href="blog.php">Properties</a></li>
                <li><a href="buysalerent.php?act=sell&page=0">Sale</a></li>         
                <li><a href="buysalerent.php?act=rent&page=0">Rent</a></li>
              </ul>
</div>
<!-- #Header Starts -->
</div>