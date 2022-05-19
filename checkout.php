<?php

include('header.php');

$name = $address = $acct = $money= '';
    $errors = array('name' => '', 'address' => '', 'acct' => array(), 'money' => '');

    if(isset($_POST['submit'])){

        // check name

        if(empty($_POST['name'])){  
            $errors['name'] = '*Name is required';
        } else{
            $name = $_POST['name'];
            if (!preg_match("/^[A-Za-z ]+$/", $name)){
                $errors['name'] = '*Name must be letters and spaces only';
            }
        }

        // check address

        if(empty($_POST['address'])){  
            $errors['address'] = '*A valid address is required';
        } else{
            $address = $_POST['address'];
            if (!preg_match("/^[a-zA-Z0-9.,'# ]+$/", $address)) {
                $errors['address'] = '*Address must not contain special characters';
            }
        }

        // check acct

        if(empty($_POST['acct'])){
            $errors['acct'][0] = '*Account number is required';
        } else{
            $acct = $_POST['acct'];

            if (strlen($acct) < 8) $errors['acct'][0] = "*Account number must be as least 12 digits long";
            if (!preg_match("/^[0-9]+$/", $acct)) $errors['acct'][1] = "*Account numbers must be numbers, duh";
        }

        if(array_filter($errors)){
			//echo 'errors in form';
		} else {
            //echo "donated successfully";
            header("Location: thank.php");
		}
    }
?>

    <!-- donation form -->
    <form class="mx-auto border rounded-3" id="donationForm" name="donationForm" action="../AdUCare/checkout.php" method="POST" style="width: 40vw; padding: 4vh 8vh;">
        <p class="mb-5 text-center">Please fill up this billing form.</p>
        <!-- name txtbox -->
        <div class="mb-4">
            <div class="form-floating">
                <input class="form-control" placeholder="Name" type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <label for="name">Name</label>
            </div>
            <div class="text-danger"><?php echo $errors['name']; ?></div>
        </div>
        <!-- address txtbox -->
        <div class="mb-4">
            <div class="form-floating">
                <input class="form-control" placeholder="Billing Address" type="text" name="address" value="<?php echo htmlspecialchars($address); ?>">
                <label for="address">Billing Address</label>
            </div>
            <div class="text-danger"><?php echo $errors['address']; ?></div>
        </div>
        <!-- acct# txtbox -->
        <div class="mb-4">
            <div class="form-floating">
                <input class="form-control" placeholder="12-digit Account Number" type="text" name="acct" value="<?php echo htmlspecialchars($acct); ?>">
                <label for="acct">12-digit Account Number</label>
            </div>
            <?php foreach ($errors['acct'] as $acctErr) { ?>
            <div class="text-danger"><?php echo $acctErr; ?></div>
            <?php } ?>
        </div>
        <!-- payment txtbox -->
        <div class="input-group">
            <span class="input-group-text">PHP</span>
            <input type="number" min="1" step="any" class="form-control" placeholder="Payment amount" id="min-donation" name="money" value="<?php
                                    foreach ($product->getData('cart') as $item):
                                        $cart = $product->getProduct($item['item_id']);
                                        $subtotal[] = $cart[0]['item_price']*$item['item_quantity'];
                                    endforeach;
                                    //print_r($subtotal);
                                    echo isset($subtotal) ? $Cart->getSum($subtotal):0;
                                ?>" disabled readonly>
        </div>
        <div class="mb-4 text-danger"></div>
        <!-- submit btn -->
        <div class="mb-4 row">
            <div class="d-grid mb-3">
            <input class="btn btn-primary" type="submit" name="submit" value="Complete">
            </div>
        </div>
    </form>

<?php 
include('footer.php');
?>