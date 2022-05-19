<?php
    ob_start();

    $title = 'In-kind Donations | AdU Care';
    include ('header.php');

    $name = $address = $contnum = $file = '';
    $errors = array('name' => '', 'address' => '', 'contnum' => '', 'file' => '');

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

        // check contact number

        if(empty($_POST['contnum'])){
            $errors['contnum'] = '*Contact number cannot be empty';
        } else{
            $contnum = $_POST['contnum'];
            if (!preg_match("/^[0-9]+$/", $contnum)) $errors['contnum'] = "*Contact numbers must be numbers, duh";
        }

        if(array_filter($errors)){
			//echo 'errors in form';
		} else {
            //echo "donated successfully";

            if ($_SERVER['REQUEST_METHOD']=="POST") {
                if (isset($_POST['submit'])){
                    $msg->addInkind($_POST['name'], $_POST['address'], $_POST['contnum'], $_POST['file']);
                    header("Location: thank.php");
                }
            }
		}
    }
?>

<link href="./css/in-kind.css" rel="stylesheet">
    <div class="container">
        <div class="shape-blob"></div>
        <div class="shape-blob one"></div>
        <div class="shape-blob two"></div>
    </div>

<!-- start of In-Kind -->
    <div class="container in-kind my-5">
        <div class="row">
            <div class="col-sm-6 p-5 info">
                <div class="row">
                    <div class="col-sm-12 info-accept">
                        <h5>For In-Kind Donations:</h5>
                        <p>We accept:</p>
                        <ul>
                            <li>Clothes(Washed and sanitized)</li>
                            <li>Hygiene Kits</li>
                            <li>Beddings</li>
                            <li>Face Masks</li>
                            <li>Alcohol</li>
                        </ul>
                        <p>AND OTHER NECESSITIES</p>
                    </div>
                    <div class="col-sm-12 info-add-contact">
                        <p>You can send your in-kind donations oon this address:</p>
                        <br>
                        <p class="add">Adamson University, 900 San Marcelino St., Ermita, Manila, 1000 Metro Manila</p>
                        <p>Contact number:</p>
                        <p class="number">(02) 8524 2011</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 contact-form p-5">
                <div class="form" >
                    <form method="POST" action="in-kind.php">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" value="<?php echo htmlspecialchars($name); ?>">
                                <div class="text-danger"><?php echo $errors['name']; ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAdd" class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputAdd" name="address" placeholder="Address" value="<?php echo htmlspecialchars($address); ?>">
                                <div class="text-danger"><?php echo $errors['address']; ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNo" class="col-sm-4 col-form-label">Contact No.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputNo" name="contnum" placeholder="Contact No." value="<?php echo htmlspecialchars($contnum); ?>">
                                <div class="text-danger"><?php echo $errors['contnum']; ?></div>
                            </div>
                        </div>
                        <p>Please attach the image of the package of the in-kind donation.</p>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="uploadFile" name="file" value="<?php echo htmlspecialchars($file); ?>">
                            <div class="text-danger"><?php echo $errors['file']; ?></div>
                        </div>
                        <div class="d-flex justify-content-center row">
                            <input class="btn btn-primary mt-3 btn-block submit-btn p-3" type="submit" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    
</body>

<?php
    include ('footer.php');
?>