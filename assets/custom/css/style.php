<?php
    ob_start ("ob_gzhandler");
    header("Content-type: text/css; charset: UTF-8");
    header("Cache-Control: must-revalidate");
    $offset = 60 * 60 ;
    $ExpStr = "Expires: " .
    gmdate("D, d M Y H:i:s",
    time() + $offset) . " GMT";
    header($ExpStr);
?>

<?php include '../php/index-helper.php' ?>

<?php $i = 2; ?>
.bg-img-1 {
	background-image: url(../../../images/slider/1.jpg);
}
<?php foreach($ad as $row){ ?>
.bg-img-<?php echo $i; ?> {
	background-image: url(../../../images/properties/<?php echo $row->user . '-' . $row->id . '-1.jpg'; ?>);
}
<?php $i++; ?>
<?php } ?>

