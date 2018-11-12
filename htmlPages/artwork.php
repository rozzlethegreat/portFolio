<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artwork</title>
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
                <li data-filter=".drawing">Drawing</li>
                <li data-filter=".montage">Montages</li>
                <li data-filter=".painting">Painting</li>
            </ul>
        </div>

        <div class="images" id="mixContainer">
            <a href="../imagesLarge/drawing/drawingBody.png" data-lightbox="art" data-title="Mans Chest" class="mix drawing">
                <img src="../images/drawing/drawingBody.png" alt="study-of-mans-chest" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/montage/monoprint1.png" data-lightbox="art" data-title="Monoprint 1" class="mix montage">
                <img src="../images/montage/monoprint1.png" alt="black-and-white-monoprint" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/drawing/lifeDrawing.png" data-lightbox="art" data-title="Life Drawing Class" class="mix drawing">
                <img src="../images/drawing/lifeDrawing.png" alt="life-drawing-class" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/painting/abandonedShack.jpg" data-lightbox="art" data-title="Abandoned Factory" class="mix painting">
                <img src="../images/painting/abandonedShack.jpg" alt="car-by-shack" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/montage/Scan2.jpg" data-lightbox="art" data-title="Montage 3" class="mix montage">
                <img src="../images/montage/Scan2.jpg" alt="watercolour-montage-writing" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/montage/Scan0.jpg" data-lightbox="art" data-title="Montage 1" class="mix montage">
                <img src="../images/montage/Scan0.jpg" alt="a4-montage" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/montage/Scan4.jpg" data-lightbox="art" data-title="Montage 5" class="mix montage">
                <img src="../images/montage/Scan4.jpg" alt="green-and-black-paper-montage" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/drawing/drawingHands.png" data-lightbox="art" data-title="Study of Hands" class="mix drawing">
                <img src="../images/drawing/drawingHands.png" alt="study-of-persons-hands" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/painting/ozzy.jpg" data-lightbox="art" data-title="Ozzy" class="mix painting">
                <img src="../images/painting/ozzy.jpg" alt="ozzy-osbourne" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/montage/monoprint2.png" data-lightbox="art" data-title="Monoprint 2" class="mix montage">
                <img src="../images/montage/monoprint2.png" alt="black-and-white-monoprint" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/drawing/queenie.jpg" data-lightbox="art" data-title="The Queen" class="mix drawing">
                <img src="../images/drawing/queenie.jpg" alt="queen-elizabeth-portrait" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/montage/Scan1.jpg" data-lightbox="art" data-title="Montage 2" class="mix montage">
                <img src="../images/montage/Scan1.jpg" alt="a4-montage" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/drawing/milk.jpg" data-lightbox="art" data-title="Harvey Milk Senator" class="mix drawing">
                <img src="../images/drawing/milk.jpg" alt="senator-harvey-milk" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/montage/Scan6.jpg" data-lightbox="art" data-title="Montage 7" class="mix montage">
                <img src="../images/montage/Scan6.jpg" alt="drawing-paper-fabric-montage" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/montage/Scan3.jpg" data-lightbox="art" data-title="Montage 4" class="mix montage">
                <img src="../images/montage/Scan3.jpg" alt="watercolour-montage-unicorn" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/drawing/liza.jpg" data-lightbox="art" data-title="Liza Minelli" class="mix drawing">
                <img src="../images/drawing/liza.jpg" alt="young-liza-minelli" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/painting/cryingFace.jpg" data-lightbox="art" data-title="Person Crying" class="mix painting">
                <img src="../images/painting/cryingFace.jpg" alt="boy-cries" height="400px" class="mainWidth"></a>
            <a href="../imagesLarge/painting/inCar.jpg" data-lightbox="art" data-title="Two People in a Car" class="mix painting">
                <img src="../images/painting/inCar.jpg" alt="two-people-in-car" height="400px" class="mainWidth"></a>

            <a href="../imagesLarge/drawing/drawingFacialFeatures.png" data-lightbox="art" data-title="Study of Facial Features" class="mix drawing">
                <img src="../images/drawing/drawingFacialFeatures.png" alt="study-of-facial-features" height="400px" class="mainWidth"></a>

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/lightbox.js"></script>
<script src="../js/mixitup.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>