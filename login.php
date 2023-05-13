<?php
require("loginconn.php")
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* style the container */
        .container {
            position: relative;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px 0 30px 0;
        }

        /* style inputs and link buttons */
        input,
        button,
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            margin: 5px 0;
            opacity: 0.85;
            display: inline-block;
            font-size: 17px;
            line-height: 20px;
            text-decoration: none;
            /* remove underline from anchors */
        }

        .btn {
            align-items: center;
        }

        button {
            background-color: #04AA6D;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }


        /* Two-column layout */
        .col {
            float: center;
            width: 50%;
            margin: auto;
            padding: 0 50px;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* bottom container */
        .bottom-container {
            text-align: center;
            background-color: #666;
            border-radius: 0px 0px 4px 4px;

        }
        .home-banner2 {
  width: 100%;
  font-size: 3rem;
  display: flex;
  align-items: center;
  font-family: sans-serif;
  padding-top: var(--dl-space-space-threeunits);
  flex-direction: column;
  padding-bottom: var(--dl-space-space-threeunits);
  justify-content: space-between;
}

    </style>
</head>

<body>
    <div class="home-container">
        <header data-role="Header" class="home-header" style="background-color: #D6D6D4;">
            <div class="home-container1">
                <a href="index.php" class="home-navlink">
                    <img alt="image" src="images/200-200h.png" class="home-image" />
                </a>
            </div>
            <div class="home-nav">
                <a class="home-navlink">
                    <nav class="navigation-links-nav navigation-links-root-class-name17">
                        <a href="index.php" class="navigation-links-text"><span>Home</span></a>
                        <a href="menu.html" class="navigation-links-text"><span>Menu</span></a>
                        <a href="about.php" class="navigation-links-text">
                            <span>About Us</span>
                        </a>
                        <a href="contact.php" class="navigation-links-text"><span>Contact</span></a>
                    </nav>
                </a>
            </div>

        </header>





        <div class="container">
            <form method="post">
                <div class="row">
                    <h2 class="home-banner2" >Login</h2>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;">

                        <input type="text" placeholder="User Name" name="User_Name">
                        <input type="password" placeholder="Password" name="User_Password">
                        <button type="submit" name="SignIn">Sign In</button>
                        <a href="signup.php" class="btn">Sign up</a>
                        <a href="forgot.php" class="btn">Forgot password?</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- <div class="bottom-container" style="">
        <div class="row">
            <div class="col">
                <a href="signup.php" style="color:white" class="btn">Sign up</a>
            </div>
            <div class="col">
                <a href="forgot.php" style="color:white" class="btn">Forgot password?</a>
            </div>
        </div>
    </div> -->

    <?php

    if (isset($_POST['SignIn'])) {
        $query = "SELECT * FROM `id_pass` WHERE `User_Name`= '$_POST[User_Name]' AND `User_Password`= '$_POST[User_Password]' ";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            header("location: admin.php");
            session_start();
            $_SESSION['UserLoginId'] = $_POST['User_Name'];

        } else if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['UserLoginId'] = $_POST['User_Name'];
            header("location: employee.php");
        } else {
            echo "<script> alert('Incorrect Password') </script>";
        }
    }

    ?>
</body>

</html>