<!DOCTYPE html>
<html>

<head>
    <title>My Coffee</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <style data-tag="reset-style-sheet">

    </style>

    <!-- <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" /> -->
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/about.css">

</head>

<body>
    <div>

        <div class="home-container" style="overflow-x: hidden;">
            <?php include("./include/importheader.php") ?>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <figure>
                            <img src="./images/IMG.jpg" alt="Mountains">
                            <figcaption>Pratham Joshi</figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure style="--c:#fff5">
                            <img src="https://picsum.photos/id/475/250/300" alt="Mountains">
                            <figcaption>Dhyey Patel</figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure>
                            <img src="https://picsum.photos/id/287/250/300" alt="Mountains">
                            <figcaption>Pratham Joshi</figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure style="--c:#fff5">
                            <img src="https://picsum.photos/id/475/250/300" alt="Mountains">
                            <figcaption>Dhyey Patel</figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <?php include("./include/importfooter.php") ?>

        </div>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>