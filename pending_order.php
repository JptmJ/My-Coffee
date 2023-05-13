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
    <title>Employee Panel/Pending Orders</title>

    <style>
        * {
            overflow-x: hidden;
        }

        table {
            font-family: arial, sans-serif;
            background-color: #f5f5f5;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #f5f5f5;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        tr:nth-child(odd) {
            background-color: #D6EEEE;
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
                        <li><a href="employee.php">Dashboard</a></li>
                        <li><a href="cust_order.php">Customers - Orders Table Wise</a></li>
                        <li><a href="table.php">Table Details</a></li>
                        <li class="active"><a href="pending_order.php">Orders to prepare</a></li>
                        <li><a href="waiting_booking.php">Waiting Booking</a></li>
                        <li><a href="waiting.php">Waiting Customers</a></li>
                    </ul>
                </div>
                <br>
                <div class="col-sm-9" style="text-align:center; margin-left:2.5%;">
                    <h2 style="padding-top: 15px; padding-bottom: 15px;">Pending Orders</h2>
                    <br>

                    <table>
                        <tr style="background-color: #454545; color:white;">
                            <th>Order No.</th>
                            <th>Customer Name</th>
                            <th>Mobile No.</th>
                            <th>Order Items</th>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pratham</td>
                            <td>9313626353</td>
                            <td>Coffee, Pizza, Pan Cake, Minral Water</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Dhyey</td>
                            <td>9409220130</td>
                            <td>Tea, Burger, French Fries, Tea</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Arman</td>
                            <td>9313852343</td>
                            <td>Coffee, Tea, Minral Water</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Yash</td>
                            <td>6355401277</td>
                            <td>Pizza, Coffee, French Fries, Pastrey</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>