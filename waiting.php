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
    <title>Employee Panel/Waiting List</title>

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
                        <li><a href="pending_order.php">Orders to prepare</a></li>
                        <li><a href="waiting_booking.php">Waiting Booking</a></li>
                        <li class="active"><a href="waiting.php">Waiting Customers</a></li>
                    </ul>
                </div>
                <br>
                <div class="col-sm-9" style="text-align:center; margin-left:2.5%;">
                    <h2 style="padding-top: 15px; padding-bottom: 15px;">Waiting List</h2>
                    <br>

                    <table>
                        <tr style="background-color: #454545; color:white;">
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile No.</th>
                            <th>Members</th>
                            <th>Remove</th>
                        </tr>
                        <tr>
                            <td>Pratham</td>
                            <td>Joshi</td>
                            <td>9313626353</td>
                            <td>6</td>
                            <td>
                                <button class="button2">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Dhyey</td>
                            <td>Patel</td>
                            <td>9409220130</td>
                            <td>3</td>
                            <td>
                                <button class="button2">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Arman</td>
                            <td>Varaiya</td>
                            <td>9313852343</td>
                            <td>4</td>
                            <td>
                                <button class="button2">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Yash</td>
                            <td>Pathak</td>
                            <td>6355401277</td>
                            <td>7</td>
                            <td>
                                <button class="button2">Remove</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>