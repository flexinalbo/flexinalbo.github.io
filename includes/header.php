<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Blema</title>

        <!-- Styles -->
        <link rel="stylesheet" href="<?= $css; ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?= $css; ?>all.min.css">
        <link href="<?= $css; ?>fontawesome.min.css" rel="stylesheet">
        <link href="<?= $css; ?>main.css" rel="stylesheet">
        
        <!-- jquery, popperjs, bootstrap js -->
        <link href="https://fonts.googleapis.com/css?family=Nunito|Lato:100,300,400,700|Open+Sans:400,600|Raleway:300,400|Work+Sans:200|Dancing+Script|Fondamento|Lobster|Pacifico|Poiret+One|Righteous&display=swap|Material+Icons" rel="stylesheet">
        
        <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-faded pl-5" style="background-color:rgb(21, 197, 197)">
            <a class="navbar-brand" href="/">
                <img src="<?= $assets; ?>/brand/logo.jpg" width="60" height="40" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) === "who_we_are.php") ? "active" : "" ; ?>" href="/who_we_are.php">Who we are <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle 
                            <?php 
                                if(basename($_SERVER['PHP_SELF']) === 'proteins.php'  || basename($_SERVER['PHP_SELF']) === 'soup_recipes.php' || basename($_SERVER['PHP_SELF']) === 'cook_ready.php'){ echo "active" ;}else{ echo "";} ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/products/proteins.php">Protein</a>
                        <a class="dropdown-item" href="/products/soup_recipes.php">Soup Recipes</a>
                        <a class="dropdown-item" href="/products/cook_ready.php">Cook Ready</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Frozen foods</a>
                        <a class="dropdown-item" href="#">Dried foods</a>
                        <a class="dropdown-item" href="#">Extras</a>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) === "special_orders.php") ? "active" : "" ; ?>" href="/special_orders.php">Special Orders</a>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-nav my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
                <ul class="navbar-nav pr-4">
                    <li class="nav-item px-3">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) === "contact_us.php") ? "active" : "" ; ?>" href="/contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) === "login.php") ? "active" : "" ; ?>" href="#">SignIn</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) === "register.php") ? "active" : "" ; ?>" href="#">SignUp</a>
                    </li>
                </ul>
            </div>
        </nav>
        

       