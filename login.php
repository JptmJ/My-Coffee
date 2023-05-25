<!DOCTYPE html>
<html>

<head>
    <?php include("./include/importhead.php") ?>
    <?php include("./include/importcss.php") ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-page {
            width: 100%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
        }

        .form-right i {
            font-size: 100px;
        }

        .bg-primary {
            background-color: white !important;
        }
    </style>
</head>

<body>
    <div>
        <div class="home-container">
            <?php include("./include/importheader.php") ?>


            <div class="login-page bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <h3 class="mb-3">Login Now</h3>
                            <div class="bg-white shadow rounded">
                                <div class="row">
                                    <div class="col-md-7 pe-0">
                                        <div class="form-left h-100 py-5 px-5">
                                            <form action="" class="row g-4">
                                                <div class="col-12">
                                                    <label>Username<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Username">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label>Password<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="bi bi-lock-fill"></i>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Password">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="inlineFormCheck">
                                                        <label class="form-check-label" for="inlineFormCheck">Remember
                                                            me</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn btn-primary px-4 float-end mt-4">login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ps-0 d-none d-md-block">
                                        <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                            <img style="height: 292px; width:405px; border-radius:10px;"
                                                src="./images/pexels-arshad-sutar-1749303.jpg" alt="Coffee">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include("./include/importjs.php") ?>
            <?php include("./include/importfooter.php") ?>

        </div>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>