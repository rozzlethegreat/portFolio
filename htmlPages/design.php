<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Design</title>
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
                <li data-filter=".posters">Posters</li>
                <li data-filter=".patterns">Patterns</li>
                <li data-filter=".typography">Typography</li>
                <li data-filter=".corporate">Corporate</li>

            </ul>
        </div>

        <div class="images" id="mixContainer">
            <a href="subPages/twinPoster.php" class="mix posters">
                <img src="../images/design/twinPoster-mockup-background.png" alt="typography-poster" height="400px" class="mainWidth"></a>
            <a href="subPages/acc.php" class="mix corporate posters">
                <img src="../images/flinch/acc-crop.png" alt="posters-for-acc" height="400px" class="mainWidth"></a>
            <a href="subPages/type.php" class="mix typography">
                <img src="../images/type/typeDesign-hold.png" alt="type-font-r" height="400px" class="mainWidth"></a>

            <a href="subPages/clme.php" class="mix corporate">
                <img src="../images/flinch/clme-mag-white.png" alt="caribbean-action-programme" height="400px" class="mainWidth"></a>
            <a href="subPages/pattern.php" class="mix patterns">
                <img src="../imagesLarge/alhambra/pattern1.png" alt="pattern-white" height="400px" class="mainWidth"></a>

            <a href="subPages/enlargement.php" class="mix posters">
                <img src="../images/design/enlargement-mockup-background.png" alt="joffrey-game-of-thrones-shadow" height="400px" class="mainWidth"></a>
            <a href="subPages/pattern.php" class="mix patterns">
                <img src="../imagesLarge/alhambra/pattern3.png" alt="pattern-color" height="400px" class="mainWidth"></a>
            <a href="subPages/inthefuture.php" class="mix posters">
                <img src="../images/design/inthefuture-mockup-background.png" alt="the-future-is-unpredictable" height="400px" class="mainWidth"></a>

            <a href="subPages/type-numbers.php" class="mix typography">
                <img src="../images/type/six.png" alt="type-design-number-six" height="400px" class="mainWidth"></a>
            <a href="subPages/goos.php" class="mix corporate">
                <img src="../images/flinch/goos-bg.png" alt="goos-document" height="400px" class="mainWidth"></a>


            <a href="subPages/sharkFin.php" class="mix design">
                <img src="../images/sharkFin/photo1.png" alt="the-terror-of-shark-finning" height="400px" class="mainWidth"></a>
            <a href="subPages/brno.php" class="mix posters">
                <img src="../images/design/brnoPoster-mockup.png" alt="poster-for-brno-design-festival" height="400px" class="mainWidth"></a>
            <a href="subPages/pearltacular.php" class="mix posters">
                <img src="../images/design/pearltacular-mockup.png" alt="comic-book-cover-mermaid" height="400px" class="mainWidth"></a>

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/lightbox.js"></script>
<script src="../js/mixitup.min.js"></script>
<script src="../js/script.js"></script>

</body>
</html>