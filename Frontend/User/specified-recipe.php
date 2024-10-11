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

        /* FIRST */
        .breadcrumb {
            background-color: white;
            padding: 0;
        }

        .breadcrumb-item a {
            text-decoration: none;
            color: #6c757d;
        }

        /* SPECIFIED RECIPE */
        .recipe-title {
            font-size: 100px;
            letter-spacing: 5px;
            font-weight: bold;
            color: #FFBD59;
        }

        .recipe-image {
            width: 100%; 
            max-width: 650px;
            height: 400px; 
            object-fit: cover; 
            border-radius: 10px;
        }

        .recipe-category {
            text-align: center;
            font-size: 18px;
            font-weight: 700;
        }
        
        .ingredients,
        .procedure {
            margin-top: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        .ingre-proce-title {
            text-align: center;
            color: #FFBD59;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* COMMENT SECTION */
        .comment-section {
            margin-top: 40px;
        }

        .comment-section p {
            font-size: 14px;
        }

        .comment-section input {
            margin-top: 10px;
            border-radius: 25px;
        }


    </style>
</head>
<body>
    
    <!-- YUNG ANO ALL RECIPES>SPECIFIED RECIPE -->
    <div class="container mb-4 ">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/mangantayo/Frontend/User/recipe.php">ALL RECIPES</a></li>
                <li class="breadcrumb-item" style="color: #FFBD59; ">SPECIFIED RECIPE</li>
            </ol>
    </div>

    <!-- SPECIFIED RECIPE BODY -->
     <div class="container shadow p-3 mb-5 bg-white rounded">
        <div class="text-center mb-4">
            <p class="recipe-category">BEST FILIPINO FOOD</p>
            <h1 class="recipe-title">ADOBO</h1>
        </div>

        <!-- Recipe Image -->
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 text-center">
                <img src="assets/adobo.jpg" alt="Adobo" class="recipe-image img-fluid">
            </div>
        </div>

        <!-- Recipe Description -->
        <div class="text-center my-4">
            <p>Adobo is a beloved Filipino dish known for its savory, tangy, and slightly sweet flavor. It typically features chicken, pork, or both, slow-cooked in a rich blend of vinegar, soy sauce, garlic, bay leaves, and peppercorns. The result is tender meat soaked in a flavorful, aromatic sauce that's perfect with rice.</p>
        </div>

        <!-- Ingredients and Procedure -->
        <div class="row">
            <div class="col-md-6">
                  <!-- INGREDIENTS -->
                <div class="ingredients">
                    <h3 class="ingre-proce-title">INGREDIENTS</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed sint consectetur nemo, pariatur quos ducimus doloremque numquam nesciunt nostrum, autem ullam non maxime asperiores quasi magnam explicabo quia? Expedita, illo.
                    </p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed sint consectetur nemo, pariatur quos ducimus doloremque numquam nesciunt nostrum, autem ullam non maxime asperiores quasi magnam explicabo quia? Expedita, illo.
                    </p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed sint consectetur nemo, pariatur quos ducimus doloremque numquam nesciunt nostrum, autem ullam non maxime asperiores quasi magnam explicabo quia? Expedita, illo.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <!-- PROCEDURE -->
                <div class="procedure">
                    <h3 class="ingre-proce-title">PROCEDURE</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia consequatur deserunt nulla quae dolor porro nisi aperiam, vel corrupti quibusdam assumenda libero nihil odit error. Quis porro placeat nobis.</p>
                </div>
            </div>
        </div>
    </div>

        <!-- COMMENT SECTION -->
        <div class="comment-section">
            <div class="row mb-2">
                <i class="fa-regular fa-heart fa-2x col-1"></i>
                <i class="fa-regular fa-comment fa-2x col-1"></i>
                <input type="text" class="form-control col-9" placeholder="Comment here...">
                <i class="fa-solid fa-share fa-2x col-1"></i>
            </div>
            <!-- ACTUAL COMMENTS -->
                <p>Paola Ysabel Linsangan: I would recommend you guys to try this recipe. Yummy!</p>
                <p>Aladin Cacho: IWW! YUCK!</p>
                <p>Roseanne Joy Dela Cruz: I would recommend this to a trash can</p>  
            </div>
        </div>

<!--FOOTER  -->
<?php
    include 'header-and-footer/footer.php';
?>

</body>
</html>
