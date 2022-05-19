<?php
    ob_start();

    $title = 'Buy to Donate | AdU Care';
    include ('header.php');

    $product_shuffle = $product->getDonate();

    // request method post
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['btdonate-submit'])){
            $Cart->addToCart($_POST['user_id'], $_POST['item_id'], $_POST['item_quantity'], null);
        }
    }
?>

<link href="./css/buy-to.css" rel="stylesheet">

    <!--Buy to Donate-->
    <div class="container box">
        <strong>
            <p style="font-size:25px;">Buy to Donate</p>
        </strong>
        <div class="row g-5">

            <!-- Buy-to-Donate Items -->
            <?php
                foreach ($product_shuffle as $item) {
            ?>
            <div class="col-md-12 items">
                <div class="row g-5">
                    <div class="col-md-4">
                        <img class="img-fluid float-left" src="<?php echo $item['item_image'] ?? "./img/bag/bag 1.png";?>" alt="product">
                        <!-- re-source -->
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-12">
                                <p><?php echo $item['item_name'] ?? "Unknown";?></p>
                            </div>
                            <div class="col-md-12">
                                <p class="bg-lb p-1">PHP <?php echo $item['item_price'] ?? "0.00";?></p>
                            </div>
                            <col>
                            <div class="col-md-3">
                                <p>Quantity</p>
                            </div>
                            <form method="post" id="poster">
                                <div class="col-md-8 m-2">
                                    <button type="button" onclick="decrement(document.getElementById('bp<?php echo $item['item_id']; ?>'))">-</button>
                                    <input id="bp<?php echo $item['item_id']; ?>" type="number" min="1" max="50" name="item_quantity" class="text-center" value="<?php echo $item['item_quantity']??"1";?>">
                                    <button type="button" onclick="increment(document.getElementById('bp<?php echo $item['item_id']; ?>'))">+</button>
                                </div>
                                <col>
                                <div style="height: 200px"></div>
                                <div class="d-grid gap-2 d-md-block mt-4">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1';?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                    <button type="submit" name="btdonate-submit" class="btn btn-md btn-outline-dark float-end px-5">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>  
            
        </div>
    </div>
    <!--Buy to Support-->

    <script>
        function increment(item) {
            item.stepUp();
        }
        function decrement(item) {
            item.stepDown();
        }
    </script>

<?php
    include ('footer.php');
?>