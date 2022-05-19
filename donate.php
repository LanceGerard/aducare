<?php
    $title = 'Donate | AdU Care';
    include ('header.php');
?>

<link href="./css/donate.css" rel="stylesheet">

    <!--Donate-->
    <div class="container donate">
        <div class="row">
            <!--Buy to support-->
            <div class="col-md-4">
                <div class="row card">
                    <div class="col-* text-center card-elements ">
                        <img src="./img/4.png" class="img-fluid mx-auto " alt="">
                    </div>
                    <div class="col-* text-center card-elements">
                        <p>Support AdU Care by buying our products.</p>
                    </div>
                    <div class="col-* text-center card-elements">
                        <a href="buy-to-support.php" class="btn btn-primary btn-md" type="button">Buy To Support</a>
                    </div>
                </div>
            </div>

            <!--Buy to donate-->
            <div class="col-md-4">
                <div class="row card">
                    <div class="col-* text-center card-elements ">
                        <img src="./img/3.png" class="img-fluid mx-auto " alt="">
                    </div>
                    <div class="col-* text-center card-elements">
                        <p>Donate by buying our products.</p>
                    </div>
                    <div class="col-* text-center card-elements">
                        <a href="buy-to-donate.php" class="btn btn-primary btn-md" type="button">Buy To Donate</a>
                    </div>
                </div>
            </div>

            <!--Donate Anything-->
            <div class="col-md-4">
                <div class="row card">
                    <div class="col-* text-center card-elements ">
                        <img src="./img/2.png" class="img-fluid mx-auto " alt="">
                    </div>
                    <div class="col-* text-center card-elements">
                        <p>Donate anything from your heart.</p>
                    </div>
                    <div class="col-* text-center card-elements">
                        <a href="donate-anything.php" class="btn btn-primary btn-md" type="button">Donate Anything</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include ('footer.php');
?>