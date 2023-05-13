<?php
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("loaction:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="employee.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
    <title>Employee Panel/Waiting List</title>

    <style data-tag="reset-style-sheet">
        html {
            line-height: 1.15;
        }

        body {
            margin: 0;
        }

        * {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
        }

        p,
        li,
        ul,
        pre,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        figure,
        blockquote,
        figcaption {
            margin: 0;
            padding: 0;
        }

        button {
            background-color: transparent;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        select {
            text-transform: none;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        input {
            padding: 2px 4px;
        }

        img {
            display: block;
        }

        html {
            scroll-behavior: smooth
        }



        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            border: 2px solid #555555;
            color: black;
            padding: 12px 20px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #555555;
            color: white;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <style data-tag="default-style-sheet">
        html {
            font-size: 16px;
            height: 100%;
        }

        body {
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            letter-spacing: normal;
            line-height: 1.15;
            color: var(--dl-color-gray-black);
            background-color: var(--dl-color-gray-white);

        }
    </style>

    <style>
        * {
            overflow-x: hidden;
        }

        .button1 {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1:hover {
            background-color: white;
            color: black;
            border: 1px solid #4CAF50;
        }

        .button2:hover {
            background-color: white;
            color: black;
            border: 1px solid #f44336;
        }

        .button2 {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: #f44336;
        }
    </style>
</head>

<body style="background-color:white;">

    <div class="home-container">

        <div class="header" >
            <h1 style="padding-top:1rem; margin: 20px 0px 10px; color:#333333;">My Coffee This is Employee Panel</h1>
            <form method="POST">
                <button class="buttun" name="LogOut">LOG OUT</button>
            </form>
        </div>
        <?php
        if (isset($_POST['LogOut'])) {
            session_destroy();
            header("location: login.php");
        }
        ?>

        <div class="container-fluid">
            <div class="row content">
                <div style="border: 2px solid black; " class="col-sm-3 sidenav hidden-xs">
                    <h2 style="margin: 20px 0px 10px; color:#333333;">WELCOME</h2>
                    <ul class="nav nav-pills nav-stacked" style="color:#337AB7;">
                        <li><a href="employee.php">Dashboard</a></li>
                        <li><a href="cust_order.php">Customers - Orders Table Wise</a></li>
                        <li><a href="table.php">Table Details</a></li>
                        <li><a href="pending_order.php">Orders to prepare</a></li>
                        <li class="active"><a href="waiting_booking.php">Waiting Booking</a></li>
                        <li><a href="waiting.php">Waiting Customers</a></li>
                    </ul>
                </div>
                <br>
                <div class="col-sm-9" style="text-align:center; margin-left:2.5%;">
                    <h2 style="padding-top: 15px; padding-bottom: 15px;">Waiting Booking</h2>
                    <br>
                    <br>
                    <div class="container">
                        <form name="contact" onsubmit="return fval2()" method="post" action="final3.php">
                            <label for="fname" style="margin: 1%;">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">

                            <label for="lname" style="margin: 1%;">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                            <label for="mobile" style="margin: 1%;">Mobile no.</label>
                            <input type="text" id="mobile" name="mobile" placeholder="+91 00000 00000">

                            <label for="members" style="margin: 1%;">Members</label>
                            <input type="text" id="members" name="members" placeholder="1">

                            <input type="submit" style="margin-top:1%; margin-bottom: 1%;" class="btn" value="Submit">
                        </form>


                        <!--JAVA SCRIPT PORTION START-->

                        <script>
                            function fval2() {
                                var fld0 = document.contact.firstname.value;
                                var fld1 = document.contact.lastname.value;
                                var fld2 = document.contact.mobile.value;
                                var fld3 = document.contact.members.value;
                                var toly = /^[a-zA-Z]+$/;
                                var noly = /^[0-9]{10}$/;
                                var moly = /^[0-9]$/;


                                if (fld0 == "" || fld0 == null) {
                                    alert("First Name must be filled out");
                                    return false;
                                }
                                else if (fld1 == "" || fld1 == null) {
                                    alert("Last Name must be filled out");
                                    return false;
                                }
                                else if (fld2 == "" || fld2 == null) {
                                    alert("Mobile No. must be filled out");
                                    return false;
                                }
                                else if (fld3 == "" || fld3 == null) {
                                    alert("members must be filled out");
                                    return false;
                                }
                                else if (!fld0.match(toly)) {
                                    alert("enter correct First Name");
                                    return true;
                                }
                                else if (!fld1.match(toly)) {
                                    alert("enter correct Last Name");
                                    return true;
                                }
                                else if (!fld2.match(noly)) {
                                    alert("enter correct number");
                                    return false;
                                }
                                else if (!fld3.match(moly)) {
                                    alert("enter correct number of members");
                                    return false;
                                }
                                else {
                                    alert("data entered sucessfully");
                                    return true;
                                }
                            }
                        </script>

                        <!--JAVA SCRIPT PORTION END-->



                        <br><br>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>