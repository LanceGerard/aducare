<?php
    ob_start();

    $title = 'Buy to Support | AdU Care';
    include ('header.php');

    $item = $product->getData();

    // request method post
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['btsupport-submit'])){
            $Cart->addToCart($_POST['user_id'], $_POST['item_id'], $_POST['item_quantity'], $_POST['item_type']);
        }
    }
?>

<link href="./css/buy-to.css" rel="stylesheet">

    <!--Buy to Support-->
    <div class="container box">
    <strong>
            <p style="font-size:25px;">Buy to Support</p>
        </strong>
        <div class="row g-5">

            <!-- But-to-Support Items -->
            <div class="col-md-12 items">
                <div class="row g-5">
                    <div class="col-md-4">
                        <img id="tshirt-img" class="img-fluid float-left" alt="Adamson Swiss Tee Shirt"
                        onmouseover='repImage("<?php echo $item[10]["item_image"]?? "./img/tumbler/tumbler-2.png"?>");'
                        onmouseout='repImage("<?php echo $item[2]["item_image"] ?? "./img/tumbler/tumbler-1.png"?>");' 
                        src="<?php echo $item[2]["item_image"] ?? "./img/tumbler/tumbler-1.png"?>" >
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-12">
                                <p><?php echo $item[2]['item_name'] ?? "Unknown";?></p>
                            </div>
                            <div class="col-md-12">
                                <p class="bg-lb p-1">PHP <?php echo $item[2]['item_price'] ?? "0";?></p>
                            </div>
                            <div class="col-md-3">
                                <p>Size</p>
                            </div>
                            <form method="post" id="tee-poster">
                                <div class="col-md-8">
                                    <div class="btn-toolbar" role="group" aria-label="tee radio toggle button group">
                                        <input type="radio" class="btn-check" name="item_type" id="rdTee1" autocomplete="off" value="<?php echo htmlspecialchars("XSMALL"); ?>" checked>
                                        <label class="btn btn-outline-dark m-1" for="rdTee1">XSMALL</label>

                                        <input type="radio" class="btn-check" name="item_type" id="rdTee2" autocomplete="off" value="<?php echo htmlspecialchars("SMALL"); ?>">
                                        <label class="btn btn-outline-dark m-1" for="rdTee2">SMALL</label>

                                        <input type="radio" class="btn-check" name="item_type" id="rdTee3" autocomplete="off" value="<?php echo htmlspecialchars("MEDIUM"); ?>">
                                        <label class="btn btn-outline-dark m-1" for="rdTee3">MEDIUM</label>

                                        <input type="radio" class="btn-check" name="item_type" id="rdTee4" autocomplete="off" value="<?php echo htmlspecialchars("LARGE"); ?>">
                                        <label class="btn btn-outline-dark m-1" for="rdTee4">LARGE</label>

                                        <input type="radio" class="btn-check" name="item_type" id="rdTee5" autocomplete="off" value="<?php echo htmlspecialchars("XLARGE"); ?>">
                                        <label class="btn btn-outline-dark m-1" for="rdTee5">XLARGE</label>

                                        <input type="radio" class="btn-check" name="item_type" id="rdTee6" autocomplete="off" value="<?php echo htmlspecialchars("2XLARGE"); ?>">
                                        <label class="btn btn-outline-dark m-1" for="rdTee6">2XLARGE</label>
                                    </div>
                                </div>
                                <col>
                                <div class="col-md-3">
                                    <p>Quantity</p>
                                </div>
                                <div class="col-md-8 m-2">
                                    <button type="button" onclick="decrement(document.getElementById('tshirt'))">-</button>
                                    <input id="tshirt" type="number" min="1" max="50" name="item_quantity" class="text-center" value="<?php echo $item['item_quantity']??"1";?>">
                                    <button type="button" onclick="increment(document.getElementById('tshirt'))">+</button>
                                </div>
                                <col>
                                <div class="d-grid gap-2 d-md-block mt-4">
                                    <input type="hidden" name="item_id" value="<?php echo 11;?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                    <button type="submit" name="btsupport-submit" class="btn btn-md btn-outline-dark float-end px-5">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 items">
                <div class="row g-5">
                    <div class="col-md-4">
                        <img id="mask" class="img-fluid float-left" src="./img/mask/mask-1.png" alt="Mask 1">
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Adamson University Washable Mask</p>
                            </div>
                            <div class="col-md-12">
                                <p class="bg-lb p-1">PHP 100</p>
                            </div>
                            <div class="col-md-3">
                                <p>Design</p>
                            </div>
                            <form method="post" id="mask-poster">
                                <div class="col-md-9">
                                    <div class="btn-toolbar" role="group" aria-label="mask radio toggle button group">
                                        <input type="radio" class="btn-check" name="item_id" id="rdMask1" autocomplete="off" value="<?php echo 4; ?>" onclick='mask("./img/mask/mask-1.png");' checked>
                                        <label class="btn btn-outline-dark m-1" for="rdMask1">1</label>

                                        <input type="radio" class="btn-check" name="item_id" id="rdMask2" autocomplete="off" value="<?php echo 5; ?>" onclick='mask("./img/mask/mask-2.png");'>
                                        <label class="btn btn-outline-dark m-1" for="rdMask2">2</label>

                                        <input type="radio" class="btn-check" name="item_id" id="rdMask3" autocomplete="off" value="<?php echo 6; ?>" onclick='mask("./img/mask/mask-3.png");'>
                                        <label class="btn btn-outline-dark m-1" for="rdMask3">3</label>

                                        <input type="radio" class="btn-check" name="item_id" id="rdMask4" autocomplete="off" value="<?php echo 7; ?>" onclick='mask("./img/mask/mask-4.png");'>
                                        <label class="btn btn-outline-dark m-1" for="rdMask4">4</label>

                                        <input type="radio" class="btn-check" name="item_id" id="rdMask5" autocomplete="off" value="<?php echo 8; ?>" onclick='mask("./img/mask/mask-5.png");'>
                                        <label class="btn btn-outline-dark m-1" for="rdMask5">5</label>

                                        <input type="radio" class="btn-check" name="item_id" id="rdMask6" autocomplete="off" value="<?php echo 9; ?>" onclick='mask("./img/mask/mask-6.png");'>
                                        <label class="btn btn-outline-dark m-1" for="rdMask6">6</label>

                                        <input type="radio" class="btn-check" name="item_id" id="rdMask7" autocomplete="off" value="<?php echo 10; ?>" onclick='mask("./img/mask/mask-7.png");'>
                                        <label class="btn btn-outline-dark m-1" for="rdMask7">7</label>
                                    </div>
                                </div>
                                <col>
                                <div class="col-md-3">
                                    <p>Quantity</p>
                                </div>
                                <div class="col-md-8 m-2">
                                    <button type="button" onclick="decrement(document.getElementById('masks'))">-</button>
                                    <input id="masks" type="number" min="1" max="50" name="item_quantity" class="text-center" value="<?php echo $item['item_quantity']??"1";?>">
                                    <button type="button" onclick="increment(document.getElementById('masks'))">+</button>
                                </div>
                                <col>
                                <div class="d-grid gap-2 d-md-block mt-5">
                                    <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                    <input type="hidden" name="item_type" value="<?php echo null;?>">
                                    <button type="submit" name="btsupport-submit" class="btn btn-md btn-outline-dark float-end px-5">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Buy to Support-->
    <!--loading pictures when buttons are clicked-->
    <script>

        function mask(a) {
            document.getElementById("mask").src = a.replace();
        }
        function repImage(a) {
            document.getElementById("tshirt-img").src = a.replace();
        }
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