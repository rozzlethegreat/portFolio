<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coding</title>
    <?php include('../incl/head.php'); ?>
</head>
<body>
<div id="masterContainer">
    <header>
        <?php include('../incl/header.php'); ?>
    </header>
    <div id="contentContainer">
        <div class="sub-bar">
            <p id="filter">Filter:</p>
            <ul>
                <li data-filter="all">All</li>
                <li data-filter=".web">Websites</li>
                <li data-filter=".video">Video</li>
            </ul>
        </div>
        <div class="images" id="mixContainer">

            <a href="subPages/bnz.php" class="mix web">
                <img src="../images/coding/bnz.png" alt="bnz-open-account" height="300px" class="codeMargin mainWidth"></a>
            <a href="subPages/subtitleVideo.php" class="mix video">
                <img src="../images/coding/video.png" alt="subtitle-manipulation-video" height="300px" class="codeMargin mainWidth"></a>
            <a href="subPages/maps.php" class="mix web">
                <img src="../images/websites/maps1.png" alt="rent-a-car-webpage" height="300px" class="codeMargin mainWidth"></a>
            <a href="subPages/homeControl.php" class="mix web">
                <img src="../images/websites/homeSecurity1.png" alt="control-your-home-webpage" height="300px" class="codeMargin mainWidth"></a>


        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/lightbox.js"></script>
<script src="../js/mixitup.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>