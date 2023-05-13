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
    <title>Employee Panel</title>
</head>

<body style="background-color:white;">

    <div class="home-container">

        <div class="header">
            <h1>My Coffee This is Employee Panel</h1>
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
                        <li class="active"><a href="employee.php">Dashboard</a></li>
                        <li><a href="cust_order.php">Customers - Orders table wise</a></li>
                        <li><a href="table.php">Table Details</a></li>
                        <li><a href="pending_order.php">Orders to prepare</a></li>
                        <li><a href="waiting_booking.php">Waiting Booking</a></li>
                        <li><a href="waiting.php">Waiting Customers</a></li>
                    </ul>
                </div>
                <br>
                <div class="design">
                    <div class="col-sm-9">
                        <div style="text-align: center; height:20%;" class="well">
                            <h4>My Coffee</h4>
                            <p>Welcome Employee You'll Have To Manage These Kind Of Services.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="well" style="background-color: #90EE90;">
                                    <h4>Employee's Name</h4>
                                    <p>Adesh Ahuja</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well" style="background-color: #ADD8E6;">
                                    <h4>Employee's Contact No.</h4>
                                    <p>9462434561</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well" style="background-color: #D3D3D3;">
                                    <h4>Employee's Aadhar No.</h4>
                                    <p>8854 1151 1543 9472</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="well" style="background-color: lightyellow;">
                                    <p>Given Employee ID</p>
                                    <p>adesh94629472</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well" style="background-color: #CBC3E3;">
                                    <p>Provided User ID To Employee</p>
                                    <p>Employee2</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well" style="background-color: #FFCCCB;">
                                    <p>Provided Password To Employee</p>
                                    <p>Emp*******456</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>