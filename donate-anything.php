<?php
    $title = 'Donate Anything | AdU Care';
    include ('header.php');
?>

<link href="./css/donate-any.css" rel="stylesheet">

    <!--In-kind and donate button-->
    <div class="donate container">
        <div class="row">
            <!--money-->
            <div class="col-md-6 col-auto col-sm mx-auto money d-flex justify-content-end ">
                <div class="row card overflow-hidden">
                    <div class="col-* icon">
                        <a href=""><img src="./img/7.png" alt="donate-money-icon"></a>
                    </div>
                    <div class="col-* one text">
                        <a href="money.php" class="text-decoration-none">
                            <p class="text-center ">Money</p>
                        </a>
                    </div>
                </div>
            </div>
            <!--money-->

            <!--in-kind-->
            <div class="col-md-6 col-auto col-sm mx-auto in-kind d-flex justify-content-start">
                <div class="row card overflow-hidden">
                    <div class="col-* icon">
                        <a href=""><img src="./img/8.png" alt="donate-in-kind-icon"></a>
                    </div>
                    <div class="col-* two text">
                        <a href="in-kind.php" class="text-decoration-none">
                            <p class="text-center">In-kind</p>
                        </a>
                    </div>
                </div>
            </div>
            <!--in-kind-->

        </div>
    </div>
    
<?php
    include ('footer.php');
?>