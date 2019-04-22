<?php include'header.php';?>
<?php include 'assets/custom/php/user-login.php' ?>
<?php include 'assets/custom/php/index-helper.php' ?>

<link rel='stylesheet' type='text/css' href='assets/custom/css/style.php' />


<div class="">



    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-1">
                        <!--
                <div class="text-block">
                    <p style="font-size: 28px;border-top: 200px;">Site Is Under Construction</p>
                    <p><b>Cell Phone :</b> 01740487816</p>
                </div>
-->
                    </div>
                    <<!-- h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sal</a></h2>
                        <blockquote>
                            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Road D/5, Rajshahi</p>
                            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                            <cite>&#2547; 2,00000</cite>
                            </blo ckquote> -->
                </div>
            </div>
            <?php $i = 2; ?>
            <?php foreach($ad as $row){ ?>
            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-<?php echo $i; ?>">
                        <!--
                <div class="text-block">
                    <p style="font-size: 28px;border-top: 200px;">Site Is Under Construction</p>
                    <p><b>Cell Phone :</b> 01740487816</p>
                </div>
-->
                    </div>
                    <h2><a href="property-detail.php?id=<?php echo "$row->id"; ?>"><?php echo "$row->title"; ?></a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?php echo "$row->ward"; ?>, <?php echo "$row->city"; ?>, District <?php echo "$row->district"; ?>, Division <?php echo "$row->division"; ?></p>
                        <p><?php echo "$row->text"; ?></p>
                        <cite>&#2547; <?php echo "$row->price"; ?></cite> <cite><a href="property-detail.php?id=<?php echo "$row->id"; ?>" style="color: green;">Explore</a></cite>
                    </blockquote>
                </div>
            </div>
            <?php $i++; ?>
            <?php } ?><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </nav>

    </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Buy, Rent</h3>
        <div class="searchbar">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <form id="myform" method="post" action="buysalerent.php?act=all&page=0&a=1" enctype="multipart/form-data">
                        <input type="text" name="city" class="form-control" placeholder="Search of Properties Through City">
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 ">
                                <select name="postType" class="form-control">
                                    <option value="">Choice</option>
                                    <option value="sell">Sell</option>
                                    <option value="rent">Rent</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <select name="price" class="form-control">
                                    <option value="999999999">Budget</option>
                                    <option value="10000">&#2547;10,000</option>
                                    <option value="100000">&#2547;100,000</option>
                                    <option value="300000">&#2547;300,000</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <select name="category" class="form-control">
                                    <option value="">Choose Category</option>
                                    <option value="plot">Plot</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="independentFloor">Independent Floor</option>
                                    <option value="independentHouse">Independent House</option>
                                    <option value="agriLand">Agri Land</option>
                                    <option value="shopShowroom">Shop/Showroom</option>
                                    <option value="officeSpace">Office/Space</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <button class="btn btn-success" type="submit" name="Search">Find Now</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                    <?php if(isset($_SESSION['flag'])){ ?>
                    <?php if($_SESSION['flag'] === '1'){ ?>
                    <a href="assets/custom/php/logout.php" class="btn btn-info" data-toggle="modal">Logout</a>
                    <?php }else{ ?>
                    <p>Join now and get updated with all the properties deals.</p>
                    <button class="btn btn-info" data-toggle="modal" data-target="#loginpop">Login</button>
                    <?php } ?>
                    <?php }else{ ?>
                    <p>Join now and get updated with all the properties deals.</p>
                    <button class="btn btn-info" data-toggle="modal" data-target="#loginpop">Login</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner -->
<div class="container">
    <div class="row">
        <div class="col-lg-2 properties-listing spacer">

            <div class="row">
                <!-- tabs -->
                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="#tab2" data-toggle="tab">Sale</a></li>
                        <li class="active"><a href="#tab3" data-toggle="tab">Rent</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="tab2">
                            <ul class="list-unstyled">
                            <?php foreach ($sell as $row) { ?>
                                <li>
                                    <h5><a href='property-detail.php?id=<?php echo "$row->id"; ?>'><?php echo "$row->title"; ?></a></h5>
                                    <?php if(($row->priceFlag == 1) && ($row->price == 1)){ ?>
                                    <div class="info"><?php echo "$row->price"; ?></div>
                                    <?php } ?>
                                </li>
                                <li><hr></li>
                            <?php } ?>
                            </ul>
                        </div>
                        <div class="tab-pane active" id="tab3">
                            <ul class="list-unstyled">
                            <?php foreach ($rent as $row) { ?>
                                <li>
                                    <h5><a href='property-detail.php?id=<?php echo "$row->id"; ?>'><?php echo "$row->title"; ?></a></h5>
                                    <?php if(($row->priceFlag == 1) && ($row->price == 1)){ ?>
                                    <div class="info"><?php echo "$row->price"; ?></div>
                                    <?php } ?>
                                </li>
                                <li><hr></li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>



                </div>
                <!-- tabs -->
            </div>

            <div class="row">
                <!-- tabs -->
                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab3" data-toggle="tab">Division Area</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab3">
                            <ul class="list-unstyled">
                                <i class="glyphicon glyphicon-saved"></i><a class="spacelist" href="buysalerent.php?act=all&page=0&a=Rajshahi">Rajshahi </a> 
                                <i class="glyphicon glyphicon-saved"></i><a class="spacelist" href="buysalerent.php?act=all&page=0&a=Barishal">Barishal </a> 
                                <i class="glyphicon glyphicon-saved"></i><a class="spacelist" href="buysalerent.php?act=all&page=0&a=Chittagong">Chittagong </a> 
                                <i class="glyphicon glyphicon-saved"></i><a class="spacelist" href="buysalerent.php?act=all&page=0&a=Dhaka">Dhaka </a> 
                                <i class="glyphicon glyphicon-saved"></i><a class="spacelist" href="buysalerent.php?act=all&page=0&a=Khulna">Khulna </a> 
                                <i class="glyphicon glyphicon-saved"></i><a class="spacelist" href="buysalerent.php?act=all&page=0&a=Mymensingh">Mymensingh </a> 
                                <i class="glyphicon glyphicon-saved"></i><a class="spacelist" href="buysalerent.php?act=all&page=0&a=Rangpur">Rangpur </a> 
                                <i class="glyphicon glyphicon-saved"></i><a class="spacelist" href="buysalerent.php?act=all&page=0&a=Sylhet">Sylhet </a>
                            </ul>

                        </div>
                    </div>



                </div>
                <!-- tabs -->
            </div>


        </div>


        <!-- property listing-->
        <div class="col-lg-8 properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">View All Listing</a>
            <h2>Featured Properties</h2>
            <div id="owl-example" class="owl-carousel">
            <?php foreach($developer as $row){ ?>
                <div class="properties">
                    <div class="image-holder"><img src="images/properties/<?php echo $row->user . '-' . $row->id . '-1.jpg'; ?>" class="img-responsive" alt="<?php echo $row->title; ?>" />
                        <div class="status new">New</div>
                    </div>
                    <h4><a href='property-detail.php?id=<?php echo "$row->id"; ?>'><?php echo $row->title; ?></a></h4>
                    <?php if(($row->priceFlag == 1) && ($row->priceType == 1)){ ?>
                    <p class="price">Price: &#2547;<?php echo $row->price; ?></p>
                    <?php } ?>
                    <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Room"><?php echo $row->room; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Floor"><?php echo $row->floor; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bathroom"><?php echo $row->bathroom; ?></span> </div>
                    <a class="btn btn-primary" href='property-detail.php?id=<?php echo "$row->id"; ?>'>View Details</a>
                </div>
            <?php } ?>
            </div>
        </div>
        <!-- end of property listing -->

        <div class="col-lg-2 properties-listing spacer">

            <div class="row">
                <!-- tabs -->
                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class=""><a style="background-color: black;" href="#tab1" data-toggle="tab">Latest Posts</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <ul class="list-unstyled">
                            <?php foreach($latest as $row){ ?>
                                <li>
                                    <h5><a href='property-detail.php?id=<?php echo "$row->id"; ?>'><?php echo "$row->title"; ?></a></h5>
                                    <?php if(($row->priceFlag == 1) && ($row->priceType == 1)){ ?>
                                    <div class="info"><?php echo "$row->price"; ?></div>
                                    <?php } ?>
                                </li>
                                <hr>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>



                </div>
                <!-- tabs -->
            </div>
            
        </div>

    </div>

    <div class="spacer">
        <div class="row">
            <div class="col-lg-6 col-sm-9 recent-view">
                <h3>About Us</h3>
                <p>About Us . ......... We are promise to serve better service to our all cient. It 's out fermost duty to. we provide these services .<br> (1) Selling Independent/Land/Office space and Plot House <br> (2) Rent Car/ Lorry/ flat/ all these in Rajshahi area ... Baynama.com <br><a href="about.php">Learn More</a></p>

            </div>
        </div>
    </div>
</div>
<?php include'footer.php';?>
