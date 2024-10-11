<?php
    include 'header-and-footer/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="script.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnE6gouai5w6G3TfPwhClZk5pgtZ8zb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin-top: 100px;
        }
        .all-recipes {
            padding: 30px 150px;
        }
        .all-recipes h1 {
            font-size: 36px;
            font-weight: 700;
        }
        .btn-all-recipe-category {
            border-radius: 15px;
            padding: 10px 20px;
            border: 1px solid;
            letter-spacing: 7px;
        }
        .all-recipes-card {
            margin: 20px; 
            position: relative;
            text-align: center;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .all-recipes-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px; 
        }
        .card-body {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5); 
            color: white;
            padding: 10px;
            text-align: center;
        }
        .card-text {
            margin: 0;
        }
    </style>
</head>

<body>

    <!-- FIRST SECTION ALL RECIPES -->
    <div class="all-recipes">
        <h1>ALL RECIPES</h1>
        <div class="all-recipes-category">
            
            <!-- CATEGORY BUTTONS -->
            <div class="row justify-content-center mx-auto">
                <div class="mx-2">
                    <a href="#" class="btn btn-block btn-all-recipe-category" style="background-color: #FFBD59; color:white;">BEST FILIPINO FOOD</a>
                </div>
                <div class="mx-2">
                    <a href="#" class="btn btn-block btn-all-recipe-category">BUDGET MEALS</a>
                </div>
                <div class="mx-2">
                    <a href="#" class="btn btn-block btn-all-recipe-category">CLASSIC ULAM</a>
                </div>
                <div class="mx-2">
                    <a href="#" class="btn btn-block btn-all-recipe-category">SAUCY ULAM</a>
                </div>
            </div>

            <!-- ALL RECIPES CARD -->
            <div class="row justify-content-center">
                <div class="col-3">
                    <div class="all-recipes-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="assets/sinigang.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">Bistek na Sardinas</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="all-recipes-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="assets/sinigang.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">Bistek na Sardinas</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="all-recipes-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="assets/sinigang.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">Bistek na Sardinas</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="all-recipes-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="assets/sinigang.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">Bistek na Sardinas</p>
                            </div>
                        </a>
                    </div>
                </div>

               <!-- just extra  -->
                <div class="col-3">
                    <div class="all-recipes-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="assets/sinigang.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">Bistek na Sardinas</p>
                            </div>
                        </a>
                    </div>
                </div>

               
                 <div class="col-3">
                    <div class="all-recipes-card">
                        <a href="/mangantayo/Frontend/User/specified-recipe.php">
                            <img src="assets/sinigang.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text">Bistek na Sardinas</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php
        include 'header-and-footer/footer.php';
    ?>
</body>
</html>
