<?php

require './config.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script> alert('Username or Email Has Already Taken'); </script>";
    } else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password')";
        } else {
            echo "<script> alert('Password Does Not Match'); </script>";
        }

    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <?php include("./include/importhead.php") ?>
    <?php include("./include/importcss.php") ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-page {
            width: 90%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
        }

        .form-right i {
            font-size: 100px;
        }

        #login-img {
            height: 292px;
            width: 405px;
            border-radius: 10px;
        }

        .bg-primary {
            background-color: white !important;
        }

        #reg-link {
            color: black;
            text-decoration: none;
        }

        #reg-link:hover {
            transition: all .3s ease-in-out;
            transform: translateY(-5px);
        }

        @media only screen and (max-width: 1000px) {
            .login-page {
                height: 44vh;
            }

            #login-img {
                width: 280px;
            }
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
                            <h3 class="mb-3">Register Now</h3>
                            <div class="bg-white shadow rounded">
                                <div class="row">
                                    <div class="col-md-7 pe-0">
                                        <div class="form-left h-100 py-5 px-5">
                                            <form method="POST" autocomplete="on" action="" class="row g-4">
                                                <div class="col-12">
                                                    <label>Name<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                        </div>
                                                        <input required name="name" id="name" type="text"
                                                            class="form-control" placeholder="Enter Your Fullname">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label>Username<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                        </div>
                                                        <input required name="username" id="username" type="text"
                                                            class="form-control" placeholder="Enter New Username">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label>Email ID<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                        </div>
                                                        <input required name="email" id="email" type="text"
                                                            class="form-control" placeholder="Enter Your Email-ID">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label>Password<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="bi bi-lock-fill"></i>
                                                        </div>
                                                        <input required name="password" id="password" type="password"
                                                            class="form-control" placeholder="Enter New Password">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label>Re-Enter Password<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="bi bi-lock-fill"></i>
                                                        </div>
                                                        <input required name="confirmpassword" id="confirmpassword"
                                                            type="password" class="form-control"
                                                            placeholder="ReEnter New Password">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button name="submit" type="submit"
                                                        class="btn btn-primary px-4 float-end mt-4">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ps-0 d-none d-md-block">
                                        <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                            <img id="login-img" src="./images/pexels-arshad-sutar-1749303.jpg"
                                                alt="Coffee">
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