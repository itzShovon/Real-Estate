<?php include'header.php';?>
<?php include 'assets/custom/php/buysalerent-helper.php' ?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Buy,  Rent</span>
    <h2>Buy, Rent</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
    <form id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?act=all&page=0&a=1" enctype="multipart/form-data">
      <input type="text" class="form-control" name="city" placeholder="Search of Properties Using City">
      <div class="row">
            <div class="col-lg-5">
              <select name="postType" class="form-control">
                <option value="sell">Sell</option>
                <option value="rent">Rent</option>
              </select>
            </div>
            <div class="col-lg-7" name="price">
              <select class="form-control">
                <option value="999999999">Budget</option>
                <option value="10000">&#2547;10,000</option>
                <option value="100000">&#2547;100,000</option>
                <option value="300000">&#2547;300,000</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control" name="category">
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
          </div>
          <button class="btn btn-primary" type="submit" name="Search">Find Now</button>
    </form>

  </div>



<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>

<?php foreach($ad as $row){ ?>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/<?php echo $row->user . '-' . $row->id . '-1.jpg'; ?>" class="img-responsive img-circle" alt="<?php echo "$row->title"; ?>"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href='property-detail.php?id=<?php echo "$row->id"; ?>'><?php echo "$row->title"; ?></a></h5>
                  <?php if(($row->priceFlag == 1) && ($row->priceType == 1)) ?>
                  <p class="price">&#2547;<?php echo "$row->price"; ?></p> </div>
              </div>
              <hr>
<?php } ?>

</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: <?php echo $skip . ' to ' . $end . ' of ' . $count; ?></div>
  <!-- <div class="pull-right">
  <select class="form-control">
  <option>Sort by</option>
  <option>Price: Low to High</option>
  <option>Price: High to Low</option>
</select></div> -->

</div>
<div class="row">

     <!-- properties -->
     <?php foreach($posts as $row){ ?>
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/<?php echo $row->user . '-' . $row->id . '-1.jpg'; ?>" class="img-responsive" alt="<?php echo "$row->title"; ?>">
          <!-- <div class="status sold">Sold</div> -->
        </div>
        <h4><a href='property-detail.php?id=<?php echo "$row->id"; ?>'><?php echo "$row->title"; ?></a></h4>
        <?php if(($row->priceType == 1) && ($row->priceFlag == 1)){ ?>
        <p class="price">Price: &#2547;<?php echo "$row->title"; ?></p>
        <?php } ?>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Room"><?php echo $row->room; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Floor"><?php echo $row->floor; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bathroom"><?php $row->bathroom; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Balconie"><?php echo $row->balconie; ?></span> </div>
        <a class="btn btn-primary" href='property-detail.php?id=<?php echo "$row->id"; ?>'>View Details</a>
      </div>
      </div>
     <?php } ?>
      <!-- properties -->


      <!-- properties -->
      
      <!-- properties -->
      <div class="center">
<ul class="pagination">
          <!-- <li><a href="#">«</a></li> -->
          <?php if($temp == 1){ ?>
          <?php for($i=1; $i<=$totalPage; $i++){ ?>
          <?php $h = $i - 1; ?>
          <li><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?act=all&page=<?php echo $h; ?>&a=1"><?php echo $i ?></a></li>
          <?php }} ?>
          <!-- <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li> -->
        </ul>
</div>

</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>