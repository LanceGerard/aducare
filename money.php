<?php
    $title = 'Cash Donation | AdU Care';
    include ('header.php');

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

         // check money

        if(empty($_POST['money'])){  
            $errors['money'] = '*Donation amount cannot be zero';
        } else{
            $money = $_POST['money'];
            if ($money < 100){
                $errors['money'] = '*Donation cannot cannot be less than PHP100';
            }
        }

        if(array_filter($errors)){
			//echo 'errors in form';
		} else {
            //echo "donated successfully";
            header("Location: thank.php");
		}
    }
?>

<link href="./css/money.css" rel="stylesheet">

    <!--Money-->
    <div class="container money">
        <div class="row">
            <!-- cash options -->
            <div class="d-grid gap-3 col-lg-6 mx-auto left">
                <button class="btn btn-primary btn-sm" type="button" onclick="donate(5000)">PHP 5000</button>
                <button class="btn btn-primary btn-sm" type="button" onclick="donate(3000)">PHP 3000</button>
                <button class="btn btn-primary btn-sm mb-5" type="button" onclick="donate(1000)">PHP 1000</button>
            </div>

            <!-- mastercard and next -->
            <div class="col-lg-6 mx-auto right">
                <div class="row">
                    <div class="d-grid col-lg-10">
                            <strong>
                                <p>We accept</p>
                            </strong>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/800px-Mastercard-logo.svg.png"
                                class="img-fluid master-card-logo" alt="Mastercard-logo">
                        <button class="btn btn-primary btn-md next" onclick="location.href='#donationForm';">Next</button>
                    </div>
                </div>
            </div>

            <?php
                include ('./partial/_bill.php');
            ?>

        </div>
    </div>

    <script>
        function donate(donation) {
            document.getElementById("min-donation").value=donation;
        }
    </script>

<?php
    include ('footer.php');
?>