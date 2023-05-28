<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("./include/importhead.php") ?>
    <?php include("./include/importcss.php") ?>
</head>

<body>
    <div>
        <div class="home-container">
            <?php include("./include/importheader.php") ?>
            <h4>Welcome
                <?php echo $row["name"]; ?>
            </h4>
            <a href="logout.php">
                <button class="button" name="logout">LOG OUT</button>
            </a>
            <?php include("./include/importjs.php") ?>
            <?php include("./include/importfooter.php") ?>

        </div>
    </div>
</body>

</html>