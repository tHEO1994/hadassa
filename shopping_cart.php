<?php
$page_title = "Cart";
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
    <div class="col-lg-8">
      <h3>Shopping Cart</h3>
      <table class="table">
        <tbody>
          <tr>
            <td><img src="assets/img/fabric/fbr3.jpg" class="tb-img"></td>
            <td>Adonko fabric <br/>
              <div class="row">
                <div class="col-lg-3">
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
              </div>
            </td>
            <td>
              <a href="#" class="pull-right"> x </a><br>
              <p class="pull-right">$200.00</p>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="row">
        <div class="col-lg-6">
          <a href="#" class="btn btn-danger btn-block"> Continue Shopping </a>
        </div>
        <div class="col-lg-6">
          <a href="#" class="btn btn-danger btn-block"> Update Cart</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <h3>Cart Total</h3>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                Enter Coupon <i class="fa fa-caret-down pull-right"></i>
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
              l
            </div>
          </div>
        </div>
      </div>
      <ul class="list-group cs-lg">
        <li class="list-group-item"><strong>Subtotal</strong> <span class="pull-right">Ghc. 200</span></li>
        <li class="list-group-item"><strong>Delivery</strong> <span class="pull-right">Ghc. 10</span></li>
        <li class="list-group-item"><h4><strong>Total</strong> <span class="pull-right">Ghc. 200</span></h4></li>
      </ul>
      <a href="#" class="btn btn-danger btn-block"> Proceed to Checkout</a>
    </div>
  </div>


</div>

<?php
require_once('includes/pgfooter.inc');
require_once('includes/footer.inc');
?>
