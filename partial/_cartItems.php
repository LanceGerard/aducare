<!-- start of cart table -->
<table class="table product">
    <thead>
        <tr>
            <th scope="col">PRODUCT DETAILS</th>
            <th scope="row">QUANTITY</th>
            <th scope="row">PRICE</th>
            <th scope="row">SUBTOTAL</th>
            <th scope="row">ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($product->getData('cart') as $item) {
            $cart = $product->getProduct($item['item_id']);
            //print_r($item);
            //array_map(function($item){
        ?>
        <tr>
            <td>
                <div class="row">
                    <div class="col-3 align-self-center">
                        <img src="<?php echo $cart[0]['item_image'] ?>" class="img-fluid" style="height: 15vh" alt="...">
                    </div>
                    <div class="mx-3 fw-bold col">
                        <?php 
                            if ($item['item_type']!=null) {
                                echo $cart[0]['item_name']."  [ ".$item['item_type']." ]  ";
                            } else {
                                echo $cart[0]['item_name'];
                            }

                        ?></div>
                </div>
            </td>
            <td><?php echo $item['item_quantity'] ?></td>
            <td><?php echo $cart[0]['item_price'] ?></td>
            <td><?php echo $cart[0]['item_price']*$item['item_quantity'] ?></td>
            <td>
                <form method="post">
                    <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                    <button type="submit" name="del-item-submit" class="btn btn-outline-danger btn-sm">Remove</button>
                </form>
            </td>
        </tr>
        <?php
            //}, $cart);
            }
        ?>
    </tbody>
</table>
<!-- end of cart table -->