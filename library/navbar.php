<!DOCTYPE html>
<html lang="ro">
<?php include("head.php") ?>

<head>
    <link rel="stylesheet" href="css/sidebar.css">
    <script src="javascript/sidebar.js"></script>
</head>

<body>
    <nav id="navbar" class=" navbar navbar-expand-md navbar-light ">
        <div class="container" style="min-width:73.5%">
            <div id="mySidenav" class="sidenav bg-light">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill profile picture" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <div class="navbar-spacer">

                </div>
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><span class="d-none d-sm-inline">Grupuri</span></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="#"><span>Clasa11</span></a></li>
                        </ul>
                    </div>
                </li>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>
        
        <!-- Use any element to open the sidenav -->
        <button class="btn md-auto" onclick="openNav()"><i class="fa fa-bars fa-2x"></i></button>
        <div class="mx-auto">
            <h1>Together</h1>
        </div>
        <button class="btn text-left" style="margin-left:0px"><i class="fa fa-bell fa-2x"></i></button>

        </div>
        </div>

    </nav>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
    </div>
</body>