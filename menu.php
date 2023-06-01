<!DOCTYPE html>
<html>

<head>
  <?php include("./include/importhead.php") ?>
  <?php include("./db.php") ?>
  <?php include("./include/importcss.php") ?>
  <link rel="stylesheet" href="./css/menu.css">
</head>

<body>

  <div class="home-container">
    <?php include("./include/importheader.php") ?>
    <div id="header">
      <h1>Our Menu</h1>
      <p>We serve the best you can have</p>
    </div>
    <div class="container">





<?php
    $cmd = "SELECT * FROM `menu_item` WHERE 1";

    $stmt = $db->prepare($cmd);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = $result->num_rows;
   
   
      while ($row = $result->fetch_assoc()) {

        $id = $row['id'];
        $res_id = $row['res_id'];
        $item_name = $row['item_name'];
        $madeby = $row['madeby'];
        $food_type = $row['food_type'];
        $price = $row['price'];
        $image = $row['image'];

?>
        <div class="card">
        <div class="card-image">
          <img src="./abc/dashboard/item-image/<?php  echo $image; ?>">
        </div>
        <div class="card-text">
          <p class="card-meal-type"><?php echo $food_type; ?></p>
          <h2 class="card-title"><?php echo $item_name; ?></h2>
          <p class="card-body"><?php echo $madeby; ?>
          </p>
        </div>
        <div class="card-price">₹<?php echo $price; ?></div>
      </div>
<?php
      }
?>
























   
    </div>
    <?php include("./include/importjs.php") ?>
    <?php include("./include/importfooter.php") ?>
  </div>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>