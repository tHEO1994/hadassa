<?php
$page_title = "Workshop";
require_once('includes/header.inc');
// require_once('includes/top-menu.inc');
require_once('includes/menu.inc');
?>

<div class="container">
  <div class="row pad-t">
    <ol class="breadcrumb">
      <li><a href="index,php">Home</a></li>
      <li class="active"><?php echo $page_title;?></li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <ul class="list-inline wk-li">
        <li class="active"><a href="#fab" data-toggle="tab"><span class="badge">1</span> Fabric</a></li>
        <li><a href="#cate" data-toggle="tab"><span class="badge">2</span> Catelog</a></li>
        <li><a href="#mes" data-toggle="tab"><span class="badge">3</span> Measurement</a></li>
        <li><a href="#sum" data-toggle="tab"><span class="badge">4</span> Summary</a></li>
        <li><a href="#"><span class="badge">5</span> Finish</a></li>
      </ul>
    </div>
    <div class="col-lg-12">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="fab">
          <?php require_once('views/fend/fabric.inc'); ?>
        </div>
        <div class="tab-pane fade" id="cate">
          <?php require_once('views/fend/catelog.inc'); ?>
        </div>
        <div class="tab-pane fade" id="mes">
          <?php require_once('views/fend/measurement.inc'); ?>
        </div>
        <div class="tab-pane fade" id="sum">
          <?php require_once('views/fend/summary.inc'); ?>
        </div>
      </div>
    </div>
  </div>

</div>

<?php
require_once('includes/pgfooter.inc');
require_once('includes/footer.inc');
?>
