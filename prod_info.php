<?php
$page_title = "Product details";
require_once('includes/header.inc');
// require_once('includes/top-menu.inc');
require_once('includes/menu.inc');
?>

<div class="container">
  <div class="row pad-t">
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active"><?php echo $page_title;?></li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <img src="assets/img/men.jpg" width="100%">
    </div>
    <div class="col-lg-8">
      <h3><b>Product Name</b></h3>
      <h4>Size: 32</h4>
      <h4>Category: Men</h4>
      <br />

      <h4>Description</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <br>
      <h4>Price: Ghc10.00 - Ghc20.00</h4>
      <div class="row">
        <div class="col-xs-2">
          <form class="form-horizontal">
            <div class="input-group">
              <div class="input-group-btn">
                <button class="btn btn-info"> < </button>
              </div>
              <input type="text" class="form-control" value="1">
              <div class="input-group-btn">
                <button class="btn btn-info"> > </button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-xs-2">
          <a class="btn btn-default"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
        </div>
      </div>
      <div class="row pad-t">
        <div class="col-lg-12">
          <ul class="list-inline">
            <li><h5>Share</h5></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</div>

<?php
require_once('includes/pgfooter.inc');
require_once('includes/footer.inc');
?>
