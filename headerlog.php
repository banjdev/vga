<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ANT | Accueil</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/fou.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->

            <!-- Follow Us -->

        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/core-img/logoAnt.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                          <ul>
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="#">Professeurs</a>
                                    <ul class="dropdown">
                                        <li><a href="profSecond.html">Secondaire</a></li>
                                        <li><a href="profUni.html">Université</a></li>
                                        <li><a href="#">Primaire</a></li>
                                        <li><a href="#">Kindergarden</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Cadres</a>
                                    <ul class="dropdown">
                                        <li><a href="comptable.php">Comptables</a></li>
                                        <li><a href="#">Informaticiens</a></li>
                                        <li><a href="#">Gestionnaires</a></li>
                                        <li><a href="#">Ingenieur Civil</a></li>
                                        <li><a href="#">Administrateurs</a></li>
                                        <li><a href="#">Agronomes</a></li>
                                        <li><a href="#">Medecin</a></li>
                                        <li><a href="#">Economistes</a></li>
                                    </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="profmath.php" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
                                            if (isset($_REQUEST['pseudo'])){
                                                echo $_REQUEST['pseudo'];
                                            }
                                               ?>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="#">Account Info</a>
                                            <a class="dropdown-item" href="logout.php">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="img/bg-img/pseudo.png" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
