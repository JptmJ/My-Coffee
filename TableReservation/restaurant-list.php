<!-- restaurant-list.php -->

<?php
include 'dbCon.php';
include 'template/header.php'; ?>

<body>

  <?php include 'template/nav-bar.php'; ?>
  <!-- END nav -->

  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-10 col-sm-12 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Restaurants</span></p>
            <h1 class="mb-3">Restaurants List</h1>
          </div>
        </div>
      </div>
    </div>


  </section>

  <div class="ftco-section-reservation">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>



  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Our Restaurants</span>
          <h2>Discover Our Exclusive Restaurants</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 dish-menu">
          <div class="tab-content py-5" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menus d-flex ftco-animate">
                    <div class="menu-img" style="background-image: url(dashboard/user-image/<?php echo $r['logo']; ?>)">
                    </div>
                    <div class="text d-flex">
                      <div class="row one-half">
                        <div class="col-lg-12">
                          <h3>
                            Bistro
                          </h3>
                        </div>
                        <div class="col-lg-12">
                          <p>
                            Plot no.225 Chandraparkash Recidency, Sidsar Road, Bhavnagar
                          </p>
                        </div>
                      </div>
                      <div class="one-third">
                        <a href="" class="btn btn-info" style="width: 100%;margin-left: 23px;margin-top: 18px;">Book
                          Table</a>
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
  <?php include 'template/footer.php'; ?>

  <?php include 'template/script.php'; ?>

</body>

</html>
<?php
?>