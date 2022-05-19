<?php
  $title = 'Cart | AdU Care';
  include ('header.php');

  if ($_SERVER['REQUEST_METHOD']=='POST'){
      if(isset($_POST['del-item-submit'])) {
          $deletedrecord=$Cart->delCartItem($_POST['item_id']);
      }
  }
?>

<link href="./css/add-to-cart.css" rel="stylesheet">

<!-- start of Add to Cart -->
<div class="container-fluid  box">
        <div class="row">
            <!-- start of My Cart -->
            <div class="col-sm-8 p-5 items">
                <div class="row">
                    <div class="col-10">
                        <h3>My Cart</h3>
                    </div>
                    <div class="col-2">
                        <h3><?php echo count($product->getData('cart')); ?> items</h3>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?php 
                            count($product->getData('cart')) ? include('./partial/_cartItems.php') : include('./partial/_cartEmpty.php');
                        ?>
                    </div>
                </div>
            </div>
            <!-- end of my cart -->

            <!-- start of order summary -->
            <div class="col-sm-4 p-5 order-summary">
                <div class="row">
                    <div class="col-12">
                        <h3>Order Summary</h3>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table">
                            <tbody>
                                <?php 
                                    foreach($product->getData('cart') as $item) {
                                    $cart = $product->getProduct($item['item_id']);
                                    //print_r($item);
                                ?>
                                <tr>
                                    <td>
                                        <?php 
                                            if ($item['item_type']!=null) {
                                                echo $cart[0]['item_name']."  [ ".$item['item_type']." ]  ";
                                            } else {
                                                echo $cart[0]['item_name'];
                                            }

                                        ?></td>
                                    <td class="text-end"><?php echo $cart[0]['item_price']*$item['item_quantity'] ?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>TOTAL COST</p>
                        </div>
                        <div class="col-sm-6">
                            <p>PHP
                                <?php
                                    foreach ($product->getData('cart') as $item):
                                        $cart = $product->getProduct($item['item_id']);
                                        $subtotal[] = $cart[0]['item_price']*$item['item_quantity'];
                                    endforeach;
                                    //print_r($subtotal);
                                    echo isset($subtotal) ? $Cart->getSum($subtotal):0;
                                ?>
                            </p>
                        </div>
                        <button type="button" class="btn btn-primary mt-5" id="checkoutBtn">CHECKOUT</button>

                    </div>
                </div>
                <script type="text/javascript">
                    document.getElementById("checkoutBtn").onclick = function () {
                        if (<?php echo count($product->getData('cart')); ?>>0) {
                            location.href = "checkout.php";
                        } else {
                            var shakes = document.getElementById('shakeThis');
                            shakes.classList.add("shake");
                            shakes.addEventListener('animationend', () => {
                                shakes.classList.remove("shake");
                            });
                        }
                    };
                </script>
            </div>
        </div>
    </div>

</body>

</html>