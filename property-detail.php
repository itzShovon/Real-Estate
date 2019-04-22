<?php include'header.php';?>
<?php include'assets/custom/php/property-detail-helper.php';?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Buy / Rent</span>
    <h2>Buy / Rent</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<div class="hot-properties hidden-xs">
<h4>Latest Properties</h4>

<?php foreach ($latest as $row) { ?>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/<?php echo $row->user . '-' . $row->id . '-0.jpg'; ?>" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php?id=<?php echo "$row->id"; ?>"><?php echo "$row->title"; ?></a></h5>
                  <p class="price">&#2547;<?php echo "$row->price"; ?></p> </div>
              </div>
<?php } ?>

</div>



<div class="advertisement">
  <h4>Advertisements</h4>
  <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

</div>

</div>

<div class="col-lg-9 col-sm-8 ">

<?php ?>
<h2><?php echo $title; ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <?php $temp = 1; ?>
        <?php foreach($result as $row){ ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $temp; ?>" class=""></li>
        <?php $temp++; ?>
        <?php } ?>
      </ol>
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src=<?php echo "$path"; ?> class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->
        <?php foreach($result as $row){ ?>
        <!-- Item 2 -->
        <div class="item">
          <img src=<?php echo "$row->path"; ?> class="properties" alt="properties" />
        </div>
        <!-- #Item 2 -->
        <?php } ?>

      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <h5><?php echo $category; ?></h5>
  <h5>Informations: <?php echo $text; ?></h5>
  <?php if($category === 'Plot'){ ?>
  <?php if($frontRoadFlag == 1) ?>
  <p>Front Road: <?php echo $frontRoad; ?> sq. feet.</p>
  <?php } ?>
  <?php if($category === 'Apartment'){ ?>
  <?php if($frontRoadFlag == 1) ?>
  <p>Front Road: <?php echo $frontRoad; ?> sq. feet.</p>
  <?php if($balconieFlag == 1) ?>
  <p>Balconie: <?php echo $balconie; ?></p>
  <?php if($floorFlag == 1) ?>
  <p>Floor: <?php echo $floor; ?> storey.</p>
  <?php if($roomFlag == 1) ?>
  <p>Room: <?php echo $room; ?></p>
  <?php if($bathroomFlag == 1) ?>
  <p>Bathroom: <?php echo $bathroom; ?></p>
  <?php } ?>
  <?php if($category === 'Independent House'){ ?>
  <?php if($frontRoadFlag == 1) ?>
  <p>Front Road: <?php echo $frontRoad; ?> sq. feet.</p>
  <?php if($balconieFlag == 1) ?>
  <p>Balconie: <?php echo $balconie; ?></p>
  <?php if($floorFlag == 1) ?>
  <p>Floor: <?php echo $floor; ?> storey.</p>
  <?php if($roomFlag == 1) ?>
  <p>Room: <?php echo $room; ?></p>
  <?php if($bathroomFlag == 1) ?>
  <p>Bathroom: <?php echo $bathroom; ?></p>
  <?php if($advancePriceFlag == 1) ?>
  <p>Advance Price: <?php echo $advancePrice; ?> tk.</p>
  <?php } ?>
  <?php if($category === 'Agri Land'){ ?>
  <?php if($frontRoadFlag == 1) ?>
  <p>Front Road: <?php echo $frontRoad; ?> sq. feet.</p>
  <?php } ?>
  <?php if($category === 'Shop / Show Room'){ ?>
  <?php if($floorFlag == 1) ?>
  <p>Floor: <?php echo $floor; ?> storey.</p>
  <?php if($advancePriceFlag == 1) ?>
  <p>Advance Price: <?php echo $advancePrice; ?> tk.</p>
  <?php } ?>
  <?php if($category === 'Office / Space'){ ?>
  <?php if($floorFlag == 1) ?>
  <p>Floor: <?php echo $floor; ?></p>
  <?php if($advancePriceFlag == 1) ?>
  <p>Advance Price: <?php echo $advancePrice; ?> tk.</p>
  <?php } ?>
  
  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div><iframe  class="well" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58144.57124322561!2d88.57095061590826!3d24.380061376252204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefa96a38d031%3A0x10f93a950ed6f410!2sRajshahi%2C+Bangladesh!5e0!3m2!1sen!2sus!4v1542804115876" frameborder="0" style="border:0" allowfullscreen></iframe></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<?php if($priceType == 1){ ?>
<p class="price">&#2547; <?php echo $price; ?></p>
<?php } ?>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $ward.', '.$city.', '.$district.', '.$division; ?></p>
  
  <div class="profile">
  <span class="glyphicon glyphicon-user"></span> Agent Details
  <p style="text-transform: capitalize;"><?php echo $userType; ?> <br><?php echo $phone; ?></p>
  </div>
</div>

<!-- 
    <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
    <div class="listing-detail">
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div> -->

</div>
<?php ?>

<!-- <div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
  <form role="form">
                <input type="text" class="form-control" placeholder="Full Name"/>
                <input type="text" class="form-control" placeholder="you@yourdomain.com"/>
                <input type="text" class="form-control" placeholder="your number"/>
                <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
      <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
      </form>
 </div>         
</div> -->
  </div>
</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>