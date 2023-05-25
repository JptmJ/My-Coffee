<!DOCTYPE html>
<html>

<head>
  <title>My Coffee</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

  <style data-tag="reset-style-sheet">

  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <!--This is the head section-->
    <!-- <style> ... </style> -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/menu.css">

</head>

<body>
  <div>

    <div class="home-container" style="overflow-x: hidden;">
      <?php include("./include/importheader.php") ?>

      <div class="container">
        <div class="row">
          <div class="col">
            <figure>
              <img src="./images/IMG.jpg" alt="Mountains">
              <figcaption>Pratham Joshi</figcaption>
            </figure>
          </div>
          <div class="col">
            <figure style="--c:#fff5">
              <img src="https://picsum.photos/id/475/250/300" alt="Mountains">
              <figcaption>Dhyey Patel</figcaption>
            </figure>
          </div>
          <div class="col">
            <figure>
              <img src="https://picsum.photos/id/287/250/300" alt="Mountains">
              <figcaption>Pratham Joshi</figcaption>
            </figure>
          </div>
          <div class="col">
            <figure style="--c:#fff5">
              <img src="https://picsum.photos/id/475/250/300" alt="Mountains">
              <figcaption>Dhyey Patel</figcaption>
            </figure>
          </div>
        </div>
      </div>

      <div id="header">
        <h1>La Saveur</h1>
        <p>The Traditional Fench Taste</p>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-image">
            <img
              src="https://images.unsplash.com/photo-1604135307399-86c6ce0aba8e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1374&q=80">
          </div>
          <div class="card-text">
            <p class="card-meal-type">Breakfast/Eggs</p>
            <h2 class="card-title">Délicieux Bénédicte</h2>
            <p class="card-body">Eggs Benedict with hollandaise sauce, crispy bacon and an assortment of garden herbs.
            </p>
          </div>
          <div class="card-price">$56</div>
        </div>
        <div class="card">
          <div class="card-image">
            <img
              src="https://images.unsplash.com/photo-1551782450-17144efb9c50?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1769&q=80">
          </div>
          <div class="card-text">
            <p class="card-meal-type">Lunch/Meat</p>
            <h2 class="card-title">Du bœuf Burger</h2>
            <p class="card-body">A beef burger with wholewheat patty, juicy lettuce and a side of gluten free fries</p>
          </div>
          <div class="card-price">$39</div>
        </div>
        <div class="card">
          <div class="card-image">
            <img
              src="https://images.unsplash.com/photo-1635146037526-a75e6905ad78?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1834&q=80">
          </div>
          <div class="card-text">
            <p class="card-meal-type">Soups/Meat</p>
            <h2 class="card-title">Soupe à l’oignon</h2>
            <p class="card-body">The traditional French soup made with onions and beef with a dollop of garlic and
              saffaron mayonise.</p>
          </div>
          <div class="card-price">$69</div>
        </div>
        <div class="card">
          <div class="card-image">
            <img src="https://www.expatica.com/app/uploads/sites/5/2020/03/Coq-au-vin.jpg">
          </div>
          <div class="card-text">
            <p class="card-meal-type">Appetizers/Meat</p>
            <h2 class="card-title">Coq au Vin</h2>
            <p class="card-body">Chickens doused in wine, mushrooms, pork, onions and garlic.</p>
          </div>
          <div class="card-price">$104</div>
        </div>

      </div>

      <?php include("./include/importfooter.php") ?>

    </div>
  </div>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>