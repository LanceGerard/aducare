<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet" 
        integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" 
        crossorigin="anonymous">
    
    <link href="./css/style.css" rel="stylesheet">
    <link href="./img/aducareicon.PNG" rel="icon" type="image/x-icon">
    <link href="./img/iconselected.PNG" rel="icon" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
        

    <title><?php if (isset($title)) {echo $title;} else {echo "AdU Care";} ?></title>

    <?php
        // require functions
        require ('functions.php');
    ?>

</head>

<body class="d-md-none d-lg-block">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img id="aducarelogo" src="./img/aducarelogo.PNG" alt="AdU Care Logo"
                    draggable="false" height="60" /></a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLink"
                aria-controls="navbarLink" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarLink">
                <div class="navbar-nav ms-auto align-items-center">
                    <a class="nav-item nav-link mx-2" href="index.php">Home</a>
                    <a class="nav-item nav-link mx-2" href="donate.php">Donate</a>
                    <a class="nav-item nav-link mx-2" href="contact.php">Contact</a>
                    <a class="nav-item nav-link mx-2" href="add-to-cart.php">
                        <h4><i class="bi bi-cart text-center"></i></h4>
                    </a>
                    
                </div>
            </div>
        </div>
    </nav>