<?php require_once("includes/config.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>JPTube</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="assets/js/commonActions.js"></script> 
    </head>
    <body>
        
        <div id="pageContainer">
            
            <div id="mastHeadContainer">
                <button class="navShowHide">
                    <img src="assets/images/icons/menu.png">
                </button>
                <a class="logoContainer" href="index.php">
                    <img src="assets/images/icons/logo.png" title="logo" alt="Site logo">
                </a>
                <div class="searchBarContainer">
                    <form action="search.php" method="GET">
                        <input type="text" class="searchBar" name="term" placeholder="Search">
                        <button class="searchButton">
                            <img src="assets/images/icons/search.png" title="search" alt="Search logo">
                        </button>
                    </form>
                </div>
                <div class="rightIcons">
                    <a href="upload.php"><img class="upload" src="assets/images/icons/upload.png" title="upload" alt="Upload link"></a>
                    <a href="#"><img src="assets/images/profilePictures/default.png" title="profile" alt="LogIn Link"></a>
                </div>
            </div>

            <div id="sideNavContainer" style="display:none">

            </div>

            <div id="mainSectionContainer">
                <div id="mainContentContainer">