<?php
     include 'Frontend/User/header-and-footer/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="Frontend/User/script.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnE6gouai5w6G3TfPwhClZk5pgtZ8zb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin-top: 100px;
        }

        .cards-wrapper {
            display: flex;
            justify-content: center;
        }

        /* FIRST SECTION */
        .head-card {
            width: 350px;
            height: 400px;
            margin: 5px;
            text-align: center;
        }
        a p {
            color: black;
        }
        .carousel-inner {
            padding: 10px;
        }
        .carousel-control-prev,
        .carousel-control-next {
            background-color: #e1e1e1;
            width: 5vh;
            height: 5vh;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }
        @media (min-width: 768px) {
            .head-card img {
                width: 100%;
                height: 350px;
            }
        }

        /* SECOND SECTION */
        .explore-recipes {
            padding: 30px 150px 30px 150px;
        }
        .explore-recipes h1 {
            font-size: 36px;
            font-weight: 700;
        }
        .btn-explore-recipe {
            border-radius: 15px;
            padding: 10px 20px;
            border: 1px solid;
            letter-spacing: 7px;
        }
        .explore-recipes-content {
            padding: 10px;
        }
        .explore-recipes-card {
            width: 245px;
            height: 300px;
            margin: 20px;
            text-align: center;
        }
        .explore-recipes-card {
            width: 245px;
            height: 300px;
            margin: 20px;
            text-align: center;
            position: relative;
            overflow: hidden; 
        }
        .explore-recipes-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .hover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 165, 0, 0.6);
            opacity: 0; 
            transition: opacity 0.3s ease; 
        }
        .hover-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            font-weight: bold;
            opacity: 0; 
            transition: opacity 0.3s ease;
        }
        .explore-recipes-card:hover .hover-overlay {
            opacity: 1;
        }
        .explore-recipes-card:hover .hover-text {
            opacity: 1;
        }

        /* THIRD SECTION */
        .recipe-description {
            background-color: #FFBD59;
            height: 85vh;
        }
        .new-recipe {
            object-fit: cover;
            overflow: hidden;
        }
        .thirdSection img {
            width: 100%; 
            height: 85vh; 
        }
        .new {
            font-size: 36px;
            letter-spacing: 5px;
        }
        .recipe {
            font-size: 100px;
            letter-spacing: 5px;
            font-weight: bold;
            color: white;
        }
        .description {
            font-size: 15px;
            letter-spacing: 5px;
        }
        .view-new-recipe {
            color: black;
            letter-spacing: 5px;
        }

        /* FOURTH SECTION */
        .must-try-card img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!--FIRST SECTION CAROUSEL -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- First Slide (first 4 items) -->
            <div class="carousel-item active">
                <div class="cards-wrapper d-flex justify-content-center">
                    <div class="head-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="Frontend/User/assets/adobo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Bistek na Sardinas</p>
                            </div>
                        </a>
                    </div>

                    <div class="head-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="Frontend/User/assets/sinigang.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Cheesy Beef Spaghetti</p>
                            </div>
                        </a>
                    </div>

                    <div class="head-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="Frontend/User/assets/bistek.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">See Food Pinalaki</p>
                            </div>
                        </a>
                    </div>

                    <div class="head-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="Frontend/User/assets/lechon.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Sinigang na Paa</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Second Slide (next 4 items) -->
            <div class="carousel-item">
                <div class="cards-wrapper d-flex justify-content-center">
                    <div class="head-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="Frontend/User/assets/adobo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Pininyahang oyster sauce</p>
                            </div>
                        </a>
                    </div>

                    <div class="head-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="Frontend/User/assets/adobo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Kalderetang tinapa</p>
                            </div>
                        </a>
                    </div>

                    <div class="head-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="Frontend/User/assets/adobo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Ginataang Hotdog</p>
                            </div>
                        </a>
                    </div>

                    <div class="head-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="Frontend/User/assets/adobo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Pritong puso ng samatis</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

       <!-- FIRST SECTION CAROUSEL CONTROLS -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
    </div>

    <!--SECOND SECTION EXPLORE RECIPES -->
    <div class="explore-recipes">
        <h1>EXPLORE RECIPES</h1>
        <div class="explore-recipes-content">
            <div class="row justify-content-center mx-auto">
                <div class="mx-2">
                    <a href="#" class="btn btn-block btn-explore-recipe" style="background-color: #FFBD59; color:white;">BEST FILIPINO FOOD</a>
                </div>
                <div class="mx-2">
                    <a href="#" class="btn btn-block btn-explore-recipe">BUDGET MEALS</a>
                </div>
                <div class="mx-2">
                    <a href="#" class="btn btn-block btn-explore-recipe">CLASSIC ULAM</a>
                </div>
                <div class="mx-2">
                    <a href="#" class="btn btn-block btn-explore-recipe">SAUCY ULAM</a>
                </div>
            </div>

            <!-- SECOND SECOND EXPLORE RECIPES CARDS -->
            <div>
                <div class="cards-wrapper">
                    <div class="explore-recipes-card">
                        <img src="Frontend/User/assets/adobo.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-text">Pancit C1</div>
                    </div>
                    <div class="explore-recipes-card">
                        <img src="Frontend/User/assets/bistek.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-text">Chicken break a leg</div>
                    </div>
                    <div class="explore-recipes-card">
                        <img src="Frontend/User/assets/lechon.jpeg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-text">Ginisang Puto</div>
                    </div>
                    <div class="explore-recipes-card">
                        <img src="Frontend/User/assets/sinigang.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-text">My favorite Adobo</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!--THIRD SECTION NEW RECIPE -->
    <div class="thirdSection d-flex justify-content-between">
        
        <div class="new-recipe w-50">
            <img src="Frontend/User/assets/adobo.jpg" alt="">
        </div>
        <div class="recipe-description text-center d-flex align-items-center justify-content-center w-50">
            <div>
                <p class="new">NEW RECIPE</p>
                <p class="recipe">ADOBO</p>
                <p class="description">A CLASSIC FILIPINO SOUP MADE WITH TAMARIND.</p>

                <a href="/mangantayo/Frontend/User/specified-recipe.php"> <p class="view-new-recipe"><u>View Recipe</u></p></a>
            </div>
        </div>

    </div>

    <!-- FOURTH SECTION MUST TRY FILIPINO FOOD-->
<div id="carouselExampleControl" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner mb-4">
        <h1 class="text-center mb-4 mt-4">MUST TRY FILIPINO FOOD</h1>

        <div class="carousel-item active">
            <div class="container-fluid mb-2">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="p-5 card must-try-card">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="Frontend/User/assets/adobo.jpg" class="card-img img-fluid" alt="Adobo">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">SINAMPAL KONG MANOK</h5>
                                        <p class="card-text">Cheesy Beef Pepper Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis et nesciunt exercitationem tenetur sed aliquam odio quisquam accusantium? Vitae illum placeat qui nesciunt accusamus quos labore tempora eos ea possimus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-5 card must-try-card">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="Frontend/User/assets/lechon.jpeg" class="card-img img-fluid" alt="Lechon">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">LECHON KAHILO</h5>
                                        <p class="card-text">Cheesy Beef Pepper Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis et nesciunt exercitationem tenetur sed aliquam odio quisquam accusantium? Vitae illum placeat qui nesciunt accusamus quos labore tempora eos ea possimus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Carousel Item -->
        <div class="carousel-item">
            <div class="container-fluid mb-2">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="p-5 card must-try-card">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="Frontend/User/assets/adobo.jpg" class="card-img img-fluid" alt="Adobo">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">SAWA NA AKONG CAN GOODS</h5>
                                        <p class="card-text">Cheesy Beef Pepper Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis et nesciunt exercitationem tenetur sed aliquam odio quisquam accusantium? Vitae illum placeat qui nesciunt accusamus quos labore tempora eos ea possimus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-5 card must-try-card">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="Frontend/User/assets/adobo.jpg" class="card-img img-fluid" alt="Adobo">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">NILAGANG TINOLA PA</h5>
                                        <p class="card-text">Cheesy Beef Pepper Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis et nesciunt exercitationem tenetur sed aliquam odio quisquam accusantium? Vitae illum placeat qui nesciunt accusamus quos labore tempora eos ea possimus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FOURTH SECTION MUST TRY CAROUSEL -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </button>
</div>

<!-- FIFTH SECTION -->
<div class="position-relative text-white" style="background-image: url('Frontend/User/assets/cook.jpg'); background-size: cover; background-position: center; height: 200px;">
        <div class="d-flex justify-content-center align-items-center h-100">
            <h1 class="fw-bold text-white">COOK, SHARE AND ENJOY</h1>
        </div>
    </div>

<!-- FOOTER -->
<?php
 include 'Frontend/User/header-and-footer/footer.php';
?>

</body>
</html>


