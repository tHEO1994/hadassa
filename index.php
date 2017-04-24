<?php
$page_title = "Home";
require_once('includes/header.inc');
// require_once('includes/top-menu.inc');
require_once('includes/menu.inc');
require_once('includes/slider.inc');
?>

<div class="container">
  <div class="row pad-t ap-pan">
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-body text-right">
          <h4>Request <br>and customize for kids</h4>
          <a href="#" class=""> Go to Workshop >> </a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-body text-right">
          <h4>We sew <br>for women</h4>
          <a href="#" class=""> Go to Workshop >> </a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-body text-right">
          <h4>Customize <br>your mens wear</h4>
          <a href="#" class=""> Go to Workshop >> </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-body">
          <h3 class="text-center"><b>User</b> login</h3>
          <hr>
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <div class="col-lg-12">
                <label>Username</label>
                <input class="form-control" type="text" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12">
                <label>Password</label>
                <input class="form-control" type="password" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12">
                <button class="btn btn-success btn-block"> Login </button>
              </div>
            </div>
          </form>
          <hr>
          <p class="text-center">
            <a href="#">Forgot Username?</a><br>
            <a href="#">Forgot Password?</a>
          </p>
          <button class="btn btn-danger btn-block"> Create an account </button>
        </div>
      </div>
    </div>
    <div class="col-lg-9">
      <h4><b>New</b> Arrivals</h4>
      <hr>
      <div class="row">
        <div class="owl-carousel owl-theme">
          <?php for($i = 0; $i < 5; $i++){?>
            <div class="item">
              <img class="prf-img" src="assets/img/children.jpg" >
              <center>
                <h4>Ghc. 200</h4>
                <p>Lorem Ipsum<br/>
                  <small>Lorem ipsum dolor sit amet,</small>
                </p>
                <a class="btn btn-default"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
              </center>
            </div>
            <div class="item">
              <img class="prf-img" src="assets/img/women.jpg">
              <center>
                <h4>Ghc. 200</h4>
                <p>Lorem Ipsum<br/>
                  <small>Lorem ipsum dolor sit amet,</small>
                </p>
                <a class="btn btn-default"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
              </center>
            </div>
            <div class="item">
              <img class="prf-img" src="assets/img/men.jpg">
              <center>
                <h4>Ghc. 200</h4>
                <p>Lorem Ipsum<br/>
                  <small>Lorem ipsum dolor sit amet,</small>
                </p>
                <a class="btn btn-default"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
              </center>
            </div>
          <?php } ?>
        </div>

      </div>
    </div>
  </div>
</div>

<?php
require_once('includes/pgfooter.inc');
require_once('includes/footer.inc');
?>
