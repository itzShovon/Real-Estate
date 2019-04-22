<?php include'header.php';?>
<?php include'assets/custom/php/session.php';?>
<?php include'assets/custom/php/dashboard-helper.php';?>
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="index.php">Home</a> / Dashboard</span>
        <h2>Dashboard</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="spacer blog">
        <div class="row">
            <div class="col-lg-8">

                <a href="edit-account.php" class="btn btn-info float-right" style="float: right;" role="button">Edit</a>
                <!-- blog detail -->
                <h2><?php echo $name;?></h2>
                <h3>Email: <?php echo $email;?></h3>
<!--                <div class="info">Posted on: Jan 20, 2013</div>-->
                <img src="<?php echo $photo;?>" class="thumbnail img-responsive" style="height: 300px; width: auto;"  alt="blog title">
                <p class="h4">Contact: <?php echo $phone;?></p>
                <p class="h4">Location: <?php echo $ward;?>, <?php echo $city;?>, <?php echo $district;?>, <?php echo $region;?></p>
<!--
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
-->
                <!-- blog detail -->

            </div>

            <!-- post table... -->
            <?php include 'assets/custom/php/post-table.php';?>
            <!-- <div class="col-lg-10 visible-lg">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>

                <!-- tabs -->
<!--
                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="#tab1" data-toggle="tab">Recent Post</a></li>
                        <li class=""><a href="#tab2" data-toggle="tab">Most Popular</a></li>
                        <li class="active"><a href="#tab3" data-toggle="tab">Most Commented</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="tab1">
                            <ul class="list-unstyled">
                                <li>
                                    <h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
                                    <div class="info">Posted on: Jan 20, 2013</div>
                                </li>
                                <li>
                                    <h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
                                    <div class="info">Posted on: Jan 20, 2013</div>
                                </li>
                                <li>
                                    <h5><a href="blogdetail.php">Real estate marketing growing</a></h5>
                                    <div class="info">Posted on: Jan 20, 2013</div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <ul class="list-unstyled">
                                <li>
                                    <h5><a href="blogdetail.php">Market update on new apartments</a></h5>
                                    <div class="info">Posted on: Jan 20, 2013</div>
                                </li>

                                <li>
                                    <h5><a href="blogdetail.php">Market update on new apartments</a></h5>
                                    <div class="info">Posted on: Jan 20, 2013</div>
                                </li>

                                <li>
                                    <h5><a href="blogdetail.php">Market update on new apartments</a></h5>
                                    <div class="info">Posted on: Jan 20, 2013</div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane active" id="tab3">
                            <ul class="list-unstyled">
                                <li>
                                    <h5><a href="blogdetail.php">Creative business to takeover the market</a></h5>
                                    <div class="info">Posted on: Jan 20, 2013</div>
                                </li>

                                <li>
                                    <h5><a href="blogdetail.php">Creative business to takeover the market</a></h5>
                                    <div class="info">Posted on: Jan 20, 2013</div>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
-->
                <!-- tabs -->


            </div>
        </div>
    </div>
</div>

<?php include'footer.php';?>
