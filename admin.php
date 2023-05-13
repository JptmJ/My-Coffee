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
    <link rel="stylesheet" href="admin.css">
    <title>Admin Panel</title>
</head>

<body style="background-color:white;">

    <div class="home-container">

        <div class="header" style="padding-top:1rem ;">
            <h1>My Coffee This is Admin Panel</h1>
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
                <div style="border: 2px solid black;" class="col-sm-3 sidenav hidden-xs">
                    <h2>WELCOME</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#section1">Dashboard</a></li>
                        <li><a href="user.php">Users</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="cust_review.php">Customer Reviews/Contacts</a></li>
                    </ul><br>
                </div>
                <br>
                <div class="design">
                    <div class="col-sm-9">
                        <div class="well">
                            <h4>My Coffee</h4>
                            <p>Welcome Admin we're providing you these kind of facilities.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="well">
                                    <h4>Users</h4>
                                    <p>Employees</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well">
                                    <h4>Menu Items</h4>
                                    <p>70</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well">
                                    <h4>Ative Users</h4>
                                    <p>43</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="well">
                                    <p>Today's Visitors</p>
                                    <p>53</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well">
                                    <p>Average Visitors</p>
                                    <p>123</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well">
                                    <p>Total Visitors</p>
                                    <p>11532</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="well">
                                    <p>Our Employees</p>
                                    <p>20</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well">
                                    <p>Current Working Employees</p>
                                    <p>7</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well">
                                    <p>Next shift Time</p>
                                    <p>07:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>