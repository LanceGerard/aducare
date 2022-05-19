<?php
    ob_start();

    $title = 'Contact Us | AdU Care';
    include ('header.php');

    $name = $email = $message = '';
    $errors = array('name' => '', 'email' => '', 'message' => '');

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

        // check email

        if(empty($_POST['email'])){
            $errors['email'] = '*An email is required';
        } else{
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = '*Email address must be valid';
            }
        }

        // check message

        if(empty($_POST['message'])){
            $errors['message'] = '*Message cannot be empty';
        }

        if(array_filter($errors)){
			//echo 'errors in form';
		} else {
            //echo "donated successfully";

            if ($_SERVER['REQUEST_METHOD']=="POST") {
                if (isset($_POST['submit'])){
                    $msg->addContact($_POST['name'], $_POST['email'], $_POST['message']);
                }
            }
		}
    }
?>

<link href="./css/contact.css" rel="stylesheet">
<link href="./css/home.css" rel="stylesheet">
    <div class="container">
        <div class="shape-blob"></div>
        <div class="shape-blob one"></div>
        <div class="shape-blob two"></div>
    </div>

    <!--Contact us text heading and paragraph-->
    <div class="container contact-header-text">
        <h2 class="text-center">Contact Us</h2>
        <p class="text-center">Have any questions? We'd love to hear from you.</p>
    </div>

    <div class="container contact mb-5">
        <div class="row">
            <!--Left side-->
            <div class="col-lg-5 left">
                <h4>Reach Us</h4>
                <div class="row row-left">
                    <!--Email-->
                    <div class="col-sm-4">
                        <p>Email</p>
                    </div>
                    <div class="col-sm-8">
                        <p>aducare@gmail.com</p>
                    </div>
                    <!--Email-->

                    <!--Phone-->
                    <div class="col-sm-4">
                        <p>Phone</p>
                    </div>
                    <div class="col-sm-8">
                        <p>09123456789</p>
                    </div>
                    <!--Phone-->

                    <!--Address-->
                    <div class="col-sm-4">
                        <p>Address</p>
                    </div>
                    <div class="col-sm-8">
                        <p>900 San Marcelino St., Ermita, Manila 1000</p>
                    </div>
                    <!--Address-->
                </div>
                <div class="shapes d-flex align-items-end flex-column">
                    <div class="bg-shape2 mt-auto p-2">
                        <div class="bg-shape1"></div>
                    </div>
                </div>
            </div>

            <!--Right Side-->
            <div class="col-lg-7 right">
                <form method="POST" action="contact.php">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your name here..." value="<?php echo htmlspecialchars($name); ?>">
                        <div class="text-danger"><?php echo $errors['name']; ?></div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Your valid email here..." value="<?php echo htmlspecialchars($email); ?>">
                        <div class="text-danger"><?php echo $errors['email']; ?></div>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="msg">Message</label>
                        <textarea class="form-control" id="msg" rows="1" name="message"
                            placeholder="Write your message here..." value="<?php echo htmlspecialchars($message); ?>"></textarea>
                        <div class="text-danger"><?php echo $errors['message']; ?></div>
                    </div>
                
                    <!--Send Message button-->
                    <div class="d-grid gap-2 d-md-block">
                        <input class="btn btn-primary btn-sm float-end" type="submit" name="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<?php
    include ('footer.php')
?>