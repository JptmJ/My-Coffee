<?php 

require 'config.php';
if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location:admin.php");
        } else {
            echo
            "<script> alert('Wrong Password') </script>";
        }
        
    } else {
        # code...
    }
    
} else {
    
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
                            <h3 class="mb-3">Login Now</h3>
                            <div class="bg-white shadow rounded">
                                <div class="row">
                                    <div class="col-md-7 pe-0">
                                        <div class="form-left h-100 py-5 px-5">
                                            <form method="POST" action="" class="row g-4">
                                                <div class="col-12">
                                                    <label>Email/Username<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                                        </div>
                                                        <input name="usernameemail" required id="usernameemail" type="text" class="form-control"
                                                            placeholder="Enter Your Email-id">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label>Password<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-text"><i class="bi bi-lock-fill"></i>
                                                        </div>
                                                        <input name="password" required id="password" type="password" class="form-control"
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

                                                <a id="reg-link" href="register.php">
                                                    <p>Don't have account register here</p>
                                                </a>

                                                <div class="col-12">
                                                    <button name="submit" type="submit"
                                                        class="btn btn-primary px-4 float-end mt-4">login</button>
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