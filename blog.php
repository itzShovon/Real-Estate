<?php include'header.php';?>
<?php include'assets/custom/php/blog-helper.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Blogs</span>
    <h2>Blogs</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer blog">
<div class="row">
  <div class="col-lg-8 col-sm-12 ">
  <?php foreach($result as $row){ ?>
    <div class="row">
      <div class="col-lg-4 col-sm-4 "><a href='property-detail.php?id=<?php echo "$row->id"; ?>' class="thumbnail"><img src="images/properties/<?php echo $row->user . '-' . $row->id . '-0.jpg'; ?>" alt="<?php echo $row->title; ?>"></a></div>
      <div class="col-lg-8 col-sm-8 ">
        <h3><a href='property-detail.php?id=<?php echo "$row->id"; ?>'><?php echo "$row->title"; ?></a></h3>
        <?php if(($row->priceFlag == 1) && ($row->priceType == 1)){ ?>
        <div class="info">Price: <?php echo "$row->price"; ?> tk.</div>
        <?php } ?>
        <?php if(($row->wardFlag == 1) && ($row->cityFlag == 1) && ($row->districtFlag == 1) && ($row->divisionFlag == 1)){ ?>
        <p style="text-transform: capitalize;">Ward: <?php echo $row->ward; ?><br>City: <?php echo $row->city; ?><br>District: <?php echo $row->district; ?><br>Division: <?php echo $row->division; ?></p>
        <?php } ?>
        <a href='property-detail.php?id=<?php echo "$row->id"; ?>' class="more">Read More</a>
      </div>
    </div>
  <?php } ?>

  <form class="form-inline" id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
    <div class="form-group">
      <a href='blog.php?page=<?php echo $previous; ?>' class="more">Previous</a>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="page" name="page" placeholder="Page">
    </div>
    <button type="submit" name="Page" class="btn btn-default">Go</button>
    <div class="form-group">
      <a href='blog.php?page=<?php echo $next; ?>' class="more">Next</a>
    </div>
  </form>

  </div>
  <div class="col-lg-4 visible-lg">

  <!-- tabs -->
  
  <!-- tabs -->

  </div>
</div>
</div>
</div>

<?php include'footer.php';?>