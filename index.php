<!DOCTYPE html>
<html>

<head>
  <title>My Coffee</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div>
    <div class="home-container">
      <?php include("./include/importheader.php") ?>
      <div class="home-banner">
        <h1 class="home-text">MY COFFEE</h1>
        <span class="home-text01" style="width:70%;">
          We are coffee punks who don't exaggerate about their Americanos.
          Time, temperature, and technique need to be on point to make the
          best cup of coffee, but it's all for nothing without quality beans
          roasted to perfection.
        </span>
        <img alt="image" src="images/pic1-800h.jpg" class="home-image2" />
      </div>
      <div class="home-features">
        <h1 class="home-text02">
          ORDER FRESHLY BAKED GOODS OR VISIT MY COFFEE
        </h1>
        <div class="home-container3">
          <div class="card" style="width: 20rem">
            <img src="images/pic2-600w.jpg" class="card-img-top" alt="...">
            <div style="height: 220px;" class="card-body">
              <h5>FOOD MART</h5>
              <p class="card-text">We serve you the best you've ever tested, cooking skill is
                transmitted by GOD to only few people & we have them at
                our place. Come and visit ones with your loved one.</p>
            </div>
          </div>
          <div class="card" style="width: 20rem;">
            <img src="images/pic3-600w.jpg" class="card-img-top" alt="...">
            <div style="height: 220px;" class="card-body">
              <h5>MY CAFE</h5>
              <p class="card-text">Want to experience the best coffee you've ever tasted? Come join us at My Coffee for
                sparkling
                conversation by booking & ordering your favorite one.</p>
            </div>
          </div>
        </div>
        <div class="home-banner1">
          <h1 class="home-text03">WHAT WE SERVE</h1>
          <ul class="home-ul list">
            <li class="home-li items list-item">
              <span>COFFEE</span>
            </li>
            <li class="items list-item">
              <span>SALAD X SNACKS</span>
            </li>
            <li class="home-li items list-item">
              <span>MAINS</span>
            </li>
            <li class="home-li items list-item">
              <span>OUR SPECIALS</span>
            </li>
          </ul>
          <a class="home-button" href="menu.html">
            <button class="button-86">
              Read Our Full Menu
            </button>
          </a>
        </div>
      </div>
      <div class="home-testimonial-card">
        <div class="home-testimonial">
          <span class="home-text29">
            About Us
          </span>
          <span class="home-text34">
            My Coffee was originally the vision of two coffee nerds who were
            unsatisfied with the quality of the coffee & awkwardness in
            their neighborhood. What started as a pop-up coffee management
            has transformed into a full Cafe managing with seating for over
            with 20+ cafes in Bhavnagar.
          </span>
          <span class="home-text34">
            Our aim isn't just to give people a place to meet and drink
            coffee & eat meal, but to get people excited about the
            quality of meal they have & coffee they drink, and where it
            comes from. Got more questions? Drop by and join us for a chat.
          </span>
          <a class="home-button" href="about.php">
            <button class="button-86">
              Read More About Us
            </button>
          </a>
        </div>
        <img alt="profile" src="images/pic4-800h.jpg" class="home-image5" />
      </div>

      <div style="background-color: #00a7a2; width: 100%; color: white;">
        <div class="py-2">
          <h2 class="text-center py-3">Book A Table</h2>
          <h6 class="text-center py-2">Do It In Advance</h6>
        </div>
        <div class="w-50 m-auto">
          <a id="btn-tbl" href="menu.html">
            <button class="button-86">
              Book Table
            </button>
          </a>

          <!-- <form name="contact" action="final.php" onsubmit="return fval()" method="post">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="fname" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" name="lname" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label>Mobile No.</label>
              <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label>Email Id</label>
              <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
              <label>Comment</label>
              <textarea name="comment" class="form-control">
                </textarea>
            </div>
            <div class="py-3">
              <button type="submit" class="button-86">Submit</button>
            </div>
            <br>
            <br>

          </form> -->

          <!--JAVA SCRIPT PORTION START-->

          <!-- <script>
            function fval() {
              var fld0 = document.contact.fname.value;
              var fld1 = document.contact.lname.value;
              var fld2 = document.contact.mobile.value;
              var fld3 = document.contact.email.value;
              var atposition = fld3.indexOf("@");
              var dotposition = fld3.lastIndexOf(".");

              var toly = /^[a-zA-Z]+$/;
              var noly = /^[0-9]{10}$/;

              if (fld0 == "" || fld0 == null) {
                alert("Last Name must be filled out");
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
                alert("Email-Id must be filled out");
                return false;
              }
              else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= fld3.length) {
                alert("Please enter a valid e-mail address");
                return false;
              }
              else if (!fld0.match(toly)) {
                alert("enter correct First name");
                return true;
              }
              else if (!fld1.match(toly)) {
                alert("enter correct last name");
                return true;
              }
              else if (!fld2.match(noly)) {
                alert("enter correct number");
                return false;
              }
              else {
                alert("data entered sucessfully");
                return true;
              }
            }
          </script> -->

          <!--JAVA SCRIPT PORTION END-->
        </div>
      </div>


      <h3 class="py-3">
        <i class="fa fa-location-dot"></i>
        Our Location
      </h3>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7411.3375938929385!2d72.14207639209496!3d21.754362220330922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a703e02e753%3A0x78062a95531b185f!2sThe%20Cafe%20Bistro!5e0!3m2!1sen!2sin!4v1684757423528!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

      <?php include("./include/importfooter.php") ?>

    </div>
  </div>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>