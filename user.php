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

        <div class="header" style="text-align: left;">
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
                <div style="border: 2px solid black; text-align: left;" class="col-sm-3 sidenav hidden-xs">
                    <h2>WELCOME</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="admin.php">Dashboard</a></li>
                        <li class="active"><a href="user.php">Users</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="cust_review.php">Customer Reviews/Contacts</a></li>
                    </ul><br>
                </div>
                <br>

                <div class="col-sm-9" style="text-align:center;">
                    <h2 style="padding-top: 15px; padding-bottom: 15px;">Accessed Employees</h2>
                    <h4 style="margin-top: 3px; margin-bottom: 3px;"><button class="button1">Add</button>
                        <button class="button2">Remove</button>
                    </h4>
                    <br>

                    <table>
                        <tr>
                            <th>Employee Name</th>
                            <th>Contact No.</th>
                            <th>Aadhar No.</th>
                            <th>Employee ID</th>
                            <th>Provided User ID</th>
                            <th>Provided Password</th>
                        </tr>
                        <tr>
                            <td>Jay Lakhani</td>
                            <td>9871354834</td>
                            <td>8854 1516 1585 4812</td>
                            <th>jay98714812</th>
                            <td>Employee1</td>
                            <td>Employee1@123</td>
                        </tr>
                        <tr>
                            <td>Adesh Ahuja</td>
                            <td>9462434561</td>
                            <td>8854 1151 1543 9472</td>
                            <th>adesh94629472</th>
                            <td>Employee2</td>
                            <td>Employee2@456</td>
                        </tr>
                        <tr>
                            <td>Litam Goyani</td>
                            <td>8901174651</td>
                            <td>8846 2465 7645 4239</td>
                            <th>litem89014239</th>
                            <td>Employee3</td>
                            <td>Employee3@789</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>