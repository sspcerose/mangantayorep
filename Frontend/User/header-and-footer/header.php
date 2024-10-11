<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
      body{
        font-family: 'Poppins';
      }
      .logo{
        width: 90px;
      }
      .navbar {
        background-color: white;
        z-index: 1000;
        box-shadow: 0 8px 10px -5px rgba(0, 0, 0, 0.3);
        }
      .navbar .nav-link {
            color: black;
            font-size: 20px;
        }
        .navbar-toggler {
            border-color: black;
        }
        .navbar-toggler-icon {
        }
        .nav-item .nav-signup {
            color: white; 
            border-radius: 15px;
            background-color: #FFBD59; 
            padding: 5px;
        }
    </style>
</head>
<body>

<!-- NAVIGATION BAR-->
<nav class="navbar navbar-expand-sm fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/mangantayo">
    <!-- LOGO -->
    <img src="Frontend/User/assets/mangan.png" class="logo" id="logo"></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/mangantayo" style="color:#FFBD59;">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mangantayo/Frontend/User/recipe.php">RECIPES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mangantayo/Frontend/User/about.php">ABOUT</a>
                </li>
            </ul>

            <!-- LOGIN SIGNUP -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-signup" href="#">SIGNUP</a>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>

</body>
</html>