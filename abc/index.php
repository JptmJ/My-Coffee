<!-- index.php -->
<?php include 'template/header.php'; ?>

<body>

  <?php include 'template/nav-bar.php'; ?>
  <!-- END nav -->

  <div style="padding-top: 300px;" class="ftco-section-reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12 reservation pt-5 px-5">
          <p style="font-size: 20px; color: #000;font-weight: bold;margin-top: -30px">Make a Reservation</p>
          <div class="block-17" style="min-height: 100px;">

            <form action="restaurant-list.php" method="POST" class="d-block d-lg-flex">
              <div class="fields d-block d-lg-flex">
                <p style="font-size: 20px;color: #000">Country</p>
                <div class="select-wrap one-half">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="city" id="" class="form-control" disabled="">
                    <option value="India">India</option>
                  </select>
                </div>
                <p style="font-size: 20px;color: #000">Location</p>
                <div class="select-wrap one-half">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select data-plugin-selectTwo class="form-control populate" name="area" required=""
                    style="cursor: pointer;">
                    <option value=""> -Select- </option>
                    <?php
                    include 'dbCon.php';
                    $con = connect();
                    $sql = "SELECT * FROM `locations`;";
                    $result = $con->query($sql);
                    foreach ($result as $r) {
                      ?>
                      <option value="<?php echo $r['id']; ?>"><?php echo $r['location_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <input type="submit" class="search-submit btn btn-primary" name="find" value="Find">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include 'template/script.php'; ?>

  <script src="dashboard/assets/vendor/jquery/jquery.js"></script>
  <script src="dashboard/assets/vendor/select2/select2.js"></script>
  <script src="dashboard/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>

</body>

</html>