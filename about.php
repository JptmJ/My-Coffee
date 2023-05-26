<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/about.css">
    <?php include("./include/importhead.php") ?>
    <?php include("./include/importcss.php") ?>
    <style>
        .col {
            padding: 15px 10px !important;
        }

        .fa {
            color: black;
            padding-right: 10px;
        }

        .fa:hover {
            transform: translateY(-5px);
            transition: all .3s ease-in-out;
            color: #1A1110;
        }

        p {
            margin-bottom: 0 !important;
        }
        .col img{
            height: 445px;
            width: 300px;
        }
    </style>
</head>

<body>
    <div>

        <div class="home-container">
            <?php include("./include/importheader.php") ?>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="./images/IMG.jpg" alt="John" style="width:100%">
                            <h4>Pratham Joshi</h4>
                            <p class="title">Full Stack Developer</p>
                            <div style="margin: 10px 0;">
                                <p>Social Links</p>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="./images/IMG.jpg" alt="John" style="width:100%">
                            <h4>Dhyey Patel</h4>
                            <p class="title">Full Stack Developer</p>
                            <div style="margin: 10px 0;">
                                <p>Social Links</p>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="./images/IMG.jpg" alt="John" style="width:100%">
                            <h4>Arman Varaiya</h4>
                            <p class="title">Dealer</p>
                            <div style="margin: 10px 0;">
                                <p>Social Links</p>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="./images/yash.jpeg" alt="John" style="width:100%">
                            <h4>Yash Pathak</h4>
                            <p class="title">Co-dealer & Support Developer</p>
                            <div style="margin: 10px 0;">
                                <p>Social Links</p>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include("./include/importjs.php") ?>
            <?php include("./include/importfooter.php") ?>

        </div>
    </div>
</body>

</html>