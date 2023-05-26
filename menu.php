<!DOCTYPE html>
<html>

<head>
  <?php include("./include/importhead.php") ?>
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
      <div class="card">
        <div class="card-image">
          <img src="./images/cap.jpg">
        </div>
        <div class="card-text">
          <p class="card-meal-type">Drink</p>
          <h2 class="card-title">Cappuccino</h2>
          <p class="card-body">A cappuccino is a coffee drink made from a mixture of espresso and steamed milk.
          </p>
        </div>
        <div class="card-price">₹133.50</div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="./images/vegmag.jpg">
        </div>
        <div class="card-text">
          <p class="card-meal-type">Breakfast/Meal</p>
          <h2 class="card-title">Hot and Spicy with Vegetables Maggi</h2>
          <p class="card-body">Hot and spicy Street Style Veggie Maggi Noodles is always a delight to our taste buds!
          </p>
        </div>
        <div class="card-price">₹114.50</div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="./images/FF.jpg">
        </div>
        <div class="card-text">
          <p class="card-meal-type">Snacks</p>
          <h2 class="card-title">Salt and Pepper Fries</h2>
          <p class="card-body">The fries are fried till crispy on the outside while fluffy on the inside, and it is then
            seasoned with my secret addicting salt and pepper seasoning.</p>
        </div>
        <div class="card-price">₹114.50</div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="./images/veg.jpg">
        </div>
        <div class="card-text">
          <p class="card-meal-type">Italian Meal</p>
          <h2 class="card-title">Vegetable Pizza [8.5 inches]</h2>
          <p class="card-body">Red sauce, onion, capsicum, tomatoes, olives, mozzarella cheese.</p>
        </div>
        <div class="card-price">₹243</div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="./images/marg.jpg">
        </div>
        <div class="card-text">
          <p class="card-meal-type">Italian Meal</p>
          <h2 class="card-title">Margherita Pizza [8.5 inches]</h2>
          <p class="card-body">Red sauce and mozzarella cheese.</p>
        </div>
        <div class="card-price">₹209.60</div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="./images/mam.jpg">
        </div>
        <div class="card-text">
          <p class="card-meal-type">Italian Meal</p>
          <h2 class="card-title">Hot Mama Pizza [8.5 inches]</h2>
          <p class="card-body">Red sauce, chilli flakes, green chillis, capsicum.</p>
        </div>
        <div class="card-price">₹243</div>
      </div>
    </div>
    <?php include("./include/importjs.php") ?>
    <?php include("./include/importfooter.php") ?>
  </div>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>