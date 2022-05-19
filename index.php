<?php
    $title = 'Home | AdU Care';
    include ('header.php');
?>
    <link href="./css/home.css" rel="stylesheet">
    <div class="container">
        <div class="shape-blob"></div>
        <div class="shape-blob one"></div>
        <div class="shape-blob two"></div>
    </div>

    <div class="container border-0 intro-container">
        <div class="row">
            <div class="col-md-5">
                <img src="./img/intro-pic.png" class="img-fluid" alt="intro-pic" width="400">
            </div>
            <div class="col-md-7 p-3">
                <h1 class="font-weight-bold"><span>AdU</span> Care</h1>
                <p>I do care, with AdU Care</p>
            </div>
        </div>
    </div>


    <!--intro/vision/mission-->
    <div class="container carousel border">
        <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10 col-md-auto">
                            <h3>I do care, with AdUCare</h3>
                        </div>
                        <div class="col-md-7 col-md-auto py-5">
                            <p class="text-justify">
                                AdUCare website is a donation website rooted in Vincentian Spirituality that responds to
                                the needs of people and communities, and allows people to expand their engagement beyond
                                geographical boundaries which allows us to build and maintain relationships not only to
                                Adamsonians, but also to people around the world.
                            </p>
                            <p class="text-justify">
                                The AdUCare website is a donation website where people have the opportunity to
                                contribute and support the Adamson’s mission online.
                            </p>
                        </div>
                        <div class="col-md-3 col-md-auto py-5">
                            <img src="./img/homepage/1.png" class="img-fluid float-end" alt="" width="150">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10 col-md-auto">
                            <h3>Vision</h3>
                        </div>
                        <div class="col-md-7 col-md-auto py-5">
                            <p class="text-justify">
                                AdUCare envisions to respond and help people that are vulnerable and
                                be able to lift themselves up and inspirit potentials to become empowered
                                members of society.
                            </p>
                        </div>
                        <div class="col-md-3 col-md-auto py-5">
                            <img src="./img/homepage/5.png" class="img-fluid float-end" alt="" width="300">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10 col-md-auto">
                            <h3 class="font-weight-bold">Mission</h3>
                        </div>
                        <div class="col-md-7 col-md-auto py-5">
                            <p class="text-justify">
                                AdUCare's mission is to see empowered individuals living above the poverty
                                line and equipped with more knowledge for sustainable development;
                                build partnerships and collaboration to people globally.
                            </p>
                        </div>
                        <div class="col-md-3 col-md-auto py-5">
                            <img src="./img/homepage/6.png" class="img-fluid mx-auto float-end" alt="" width="300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Intro pics-->
    <div class="container carousel border">
        <div id="carouselIntroPicIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIntroPicIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIntroPicIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIntroPicIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselIntroPicIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselIntroPicIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselIntroPicIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselIntroPicIndicators" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active col-md-auto">
                    <img src="./img/homepage/i1.png" class=" w-50 mx-auto d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="./img/homepage/i2.png" class="w-50 mx-auto d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="./img/homepage/i3.png" class="w-50 mx-auto d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="./img/homepage/i4.png" class="w-50 mx-auto d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="./img/homepage/i5.png" class="w-50 mx-auto d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="./img/homepage/i6.png" class="w-50 mx-auto d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="./img/homepage/i7.png" class="w-50 mx-auto d-block" alt="">
                </div>
            </div>
        </div>
    </div>

<?php
    include ('footer.php')
?>