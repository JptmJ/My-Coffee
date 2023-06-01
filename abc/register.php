<!-- signin.php -->
<?php include 'template/header.php'; ?>

<body>

  <?php include 'template/nav-bar.php'; ?>
  <!-- END nav -->

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 style="padding-top: 50px;">Register In Our Site</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 dish-menu">
          <!--register as customer-->
          <div class="tab-content py-5" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <div class="menus d-flex ftco-animate" style="background: white;">
                    <div class="row" style="width: 100%">
                      <div class="col-md-12">

                        <!-- register as customer -->
                        <form action="manage-insert.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <input type="text" name="fullname" class="form-control" required="" placeholder="Your Name">
                          </div>
                          <div class="form-group">
                            <input type="email" name="email" class="form-control" required="" placeholder="Your Email">
                          </div>
                          <div class="form-group">
                            <input type="text" name="phone" class="form-control" required="" placeholder="Your Phone">
                          </div>
                          <div class="form-group">
                            <textarea name="address" id="" cols="30" rows="2" class="form-control"
                              placeholder="Address"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="password" name="password" class="form-control" required=""
                              placeholder="Your Password">
                          </div>
                          <div class="form-group">
                            <input type="file" name="image" class="form-control" required="">
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Register" name="regascus" class="btn btn-primary py-3 px-5">
                          </div>
                        </form>
                        <p class="text-center">For Login <a href="login.php">Click Here</a> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- END -->

            <!--register as restaurant-->
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                  <div class="menus d-flex ftco-animate" style="background: white;">
                    <div class="row" style="width: 100%">
                      <div class="col-md-12">
                        <form action="manage-insert.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <input type="text" name="fullname" class="form-control" required=""
                              placeholder="Restaurant Name">
                          </div>
                          <div class="form-group">
                            <input type="email" name="email" class="form-control" required=""
                              placeholder="Restaurant Email">
                          </div>
                          <div class="form-group">
                            <input type="text" name="phone" class="form-control" required=""
                              placeholder="Restaurant Phone">
                          </div>
                          <!--        <div class="form-group">
                          <input type="text" name="bkashnumber" class="form-control" required="" placeholder="Restaurant Bkash Number">
                        </div> -->
                          <div class="form-group">
                            <select class="form-control " name="area" required="">
                              <option value=""> -Select Restaurant Area- </option>
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
                          <div class="form-group">
                            <textarea name="address" id="" cols="30" rows="2" class="form-control"
                              placeholder="Restaurant Address"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="password" name="password" class="form-control" required=""
                              placeholder="Password">
                          </div>
                          <div class="form-group">
                            <input type="file" name="image" class="form-control" required="">
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Register" name="regasres" class="btn btn-primary py-3 px-5">
                          </div>
                        </form>
                        <p class="text-center">For Login <a href="login.php">Click Here</a> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- END -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'template/script.php'; ?>

</body>

</html>