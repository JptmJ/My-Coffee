<!DOCTYPE html>
<html>

<head>
    <title>My Coffee</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/about.css">

    <style data-tag="reset-style-sheet">

    </style>

    <!-- <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" /> -->
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/home.css">

</head>

<body>
    <div>

        <div class="home-container" style="overflow-x: hidden;">
            <?php include("./include/importheader.php") ?>

            <a href="https://www.mythrillfiction.com/the-dark-rider" alt="Mythrill" target="_blank">
                <div class="card">
                    <div class="wrapper">
                        <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-cover.jpg"
                            class="cover-image" />
                    </div>
                    <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-title.png" class="title" />
                    <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-character.webp"
                        class="character" />
                </div>
            </a>

            <a href="https://www.mythrillfiction.com/force-mage" alt="Mythrill" target="_blank">
                <div class="card">
                    <div class="wrapper">
                        <img src="https://ggayane.github.io/css-experiments/cards/force_mage-cover.jpg"
                            class="cover-image" />
                    </div>
                    <img src="https://ggayane.github.io/css-experiments/cards/force_mage-title.png" class="title" />
                    <img src="https://ggayane.github.io/css-experiments/cards/force_mage-character.webp"
                        class="character" />
                </div>
            </a>

            <?php include("./include/importfooter.php") ?>

        </div>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>