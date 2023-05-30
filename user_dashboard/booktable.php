<?php
if (isset($_POST['reservation'])) {

    $res_id = $_POST['res_id'];
    $reservation_name = $_POST['reservation_name'];
    $reservation_phone = $_POST['reservation_phone'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="vendors/feather/feather.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="../images/hlogo.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            .fa {
                font-size: 17px;
                padding-right: 10px;
            }
        </style>
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="../images/L-4.png" class="mr-2"
                            alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../images/L-1.png" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_settings-panel.html -->
                <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="ti-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                        <i class="settings-close ti-close"></i>
                        <p class="settings-heading">SIDEBAR SKINS</p>
                        <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                        </div>
                        <div class="sidebar-bg-options" id="sidebar-dark-theme">
                            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                        </div>
                        <p class="settings-heading mt-2">HEADER SKINS</p>
                        <div class="color-tiles mx-0 px-4">
                            <div class="tiles success"></div>
                            <div class="tiles warning"></div>
                            <div class="tiles danger"></div>
                            <div class="tiles info"></div>
                            <div class="tiles dark"></div>
                            <div class="tiles default"></div>
                        </div>
                    </div>
                </div>
                <div id="right-sidebar" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                                aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                                aria-controls="chats-section">CHATS</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="setting-content">
                        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                            aria-labelledby="todo-section">
                            <div class="add-items d-flex px-3 mb-0">
                                <form class="form w-100">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                        <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                            id="add-task">Add</button>
                                    </div>
                                </form>
                            </div>
                            <div class="list-wrapper px-3">
                                <ul class="d-flex flex-column-reverse todo-list">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Team review meeting at 3.00 PM
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Prepare for presentation
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Resolve all the low priority tickets due today
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                                Schedule meeting for next week
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                                Project review
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                            <div class="events pt-4 px-3">
                                <div class="wrapper d-flex mb-2">
                                    <i class="ti-control-record text-primary mr-2"></i>
                                    <span>Feb 11 2018</span>
                                </div>
                                <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                                <p class="text-gray mb-0">The total number of sessions</p>
                            </div>
                            <div class="events pt-4 px-3">
                                <div class="wrapper d-flex mb-2">
                                    <i class="ti-control-record text-primary mr-2"></i>
                                    <span>Feb 7 2018</span>
                                </div>
                                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                                <p class="text-gray mb-0 ">Call Sarah Graves</p>
                            </div>
                        </div>
                        <!-- To do section tab ends -->
                        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                            <div class="d-flex align-items-center justify-content-between border-bottom">
                                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                                <small
                                    class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                    All</small>
                            </div>
                            <ul class="chat-list">
                                <li class="list active">
                                    <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span
                                            class="online"></span></div>
                                    <div class="info">
                                        <p>Thomas Douglas</p>
                                        <p>Available</p>
                                    </div>
                                    <small class="text-muted my-auto">19 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span
                                            class="offline"></span></div>
                                    <div class="info">
                                        <div class="wrapper d-flex">
                                            <p>Catherine</p>
                                        </div>
                                        <p>Away</p>
                                    </div>
                                    <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                    <small class="text-muted my-auto">23 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span
                                            class="online"></span></div>
                                    <div class="info">
                                        <p>Daniel Russell</p>
                                        <p>Available</p>
                                    </div>
                                    <small class="text-muted my-auto">14 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span
                                            class="offline"></span></div>
                                    <div class="info">
                                        <p>James Richardson</p>
                                        <p>Away</p>
                                    </div>
                                    <small class="text-muted my-auto">2 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span
                                            class="online"></span></div>
                                    <div class="info">
                                        <p>Madeline Kennedy</p>
                                        <p>Available</p>
                                    </div>
                                    <small class="text-muted my-auto">5 min</small>
                                </li>
                                <li class="list">
                                    <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span
                                            class="online"></span></div>
                                    <div class="info">
                                        <p>Sarah Graves</p>
                                        <p>Available</p>
                                    </div>
                                    <small class="text-muted my-auto">47 min</small>
                                </li>
                            </ul>
                        </div>
                        <!-- chat tab ends -->
                    </div>
                </div>
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="icon-grid menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booktable.php">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Book A Table</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="food.php">
                                <i class="fa fa-utensils"></i>
                                <span class="menu-title">Our Food</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="usercart.php">
                                <i class="fa fa-cart-shopping"></i>
                                <span class="menu-title">Cart</span>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">
                                <i class="fa fa-user"></i>
                                <span class="menu-title">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="settings.php">
                                <i class="fa fa-gear"></i>
                                <span class="menu-title">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="row">
                                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                        <h3 class="font-weight-bold">Welcome Aamir</h3>
                                        <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                                                class="text-primary">3 unread alerts!</span></h6>
                                    </div>
                                    <section class="home-slider owl-carousel" style="height: 400px;">
                                        <div class="slider-item" style="background-image: url('images/cover.jpg');"
                                            data-stellar-background-ratio="0.5">
                                            <div class="overlay"></div>
                                            <div class="container">
                                                <div class="row slider-text align-items-center justify-content-center">
                                                    <div class="col-md-10 col-sm-12 ftco-animate text-center"
                                                        style="padding-bottom: 25%;">
                                                        <p class="breadcrumbs"><span class="mr-2"><a
                                                                    href="index.php">Home</a></span> <span>Tables</span></p>
                                                        <h1 class="mb-3">Choose Tables</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>



                                    <section class="ftco-section">
                                        <div class="container">
                                            <div class="row justify-content-center mb-5 pb-5">
                                                <div class="col-md-7 text-center heading-section ftco-animate">
                                                    <span class="subheading">Our Tables</span>
                                                    <h2>Choose Your Table</h2>
                                                </div>
                                            </div>

                                            <form action="select-menu.php" method="POST">
                                                <div class="row">
                                                    <div class="col-md-12 dish-menu">
                                                        <div class="tab-content py-5" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="v-pills-home"
                                                                role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                <div class="row">
                                                                    <?php
                                                                    include 'dbCon.php';
                                                                    $con = connect();
                                                                    $sql = "SELECT * FROM `restaurant_tables` WHERE res_id = '$res_id';";
                                                                    $result = $con->query($sql);
                                                                    foreach ($result as $r) {
                                                                        $table_id = $r['id'];
                                                                        ?>
                                                                        <div class="col-lg-3" style="min-height: 190px">
                                                                            <p style="font-weight: bold; padding: auto">Table
                                                                                <?php echo @$i += 1 ?>
                                                                            </p>
                                                                            <nav class="menu2">
                                                                                <input type="checkbox"
                                                                                    id="restTable<?php echo $table_id; ?>"
                                                                                    name="table[]"
                                                                                    value="<?php echo $table_id; ?>"
                                                                                    class="menu-toggler2 restTable"
                                                                                    data-id="<?php echo $table_id; ?>">
                                                                                <label for="menu-toggler2"></label>
                                                                                <ul>
                                                                                    <?php
                                                                                    $sql2 = "SELECT * FROM `restaurant_chair` WHERE tbl_id = '$table_id';";
                                                                                    $result2 = $con->query($sql2);
                                                                                    foreach ($result2 as $r2) {
                                                                                        $c_id = $r2['id'];
                                                                                        $booked = false;
                                                                                        $cbbook = "SELECT bc.id,bc.booking_id,bc.chair_id,bc.chair_no,bd.booking_id,bd.res_id,bd.booking_date,bd.booking_time
                                                                                                        FROM booking_chair as bc, booking_details as bd
                                                                                                        WHERE bc.booking_id = bd.booking_id
                                                                                                        AND bd.res_id = '$res_id'
                                                                                                        AND bd.booking_date = '$reservation_date'
                                                                                                        AND bd.booking_time ='$reservation_time'
                                                                                                        AND bc.chair_id = '$c_id';";
                                                                                        $cbbookresult = $con->query($cbbook);
                                                                                        if ($cbbookresult->num_rows > 0) {
                                                                                            $booked = true;
                                                                                        }
                                                                                        if ($booked == true) {
                                                                                            ?>
                                                                                            <li class="menu-item2">
                                                                                                <input type="checkbox" disabled="">
                                                                                            </li>
                                                                                        <?php } else { ?>
                                                                                            <li class="menu-item2">
                                                                                                <input type="checkbox" name="chair[]"
                                                                                                    id="chair"
                                                                                                    value="<?php echo $r2['id']; ?>">
                                                                                            </li>
                                                                                        <?php } ?>
                                                                                    <?php } ?>
                                                                                </ul>
                                                                            </nav>
                                                                        </div>
                                                                    <?php } ?>
                                                                    <div class="col-lg-12"
                                                                        style="margin-top: 15%;text-align: center;">
                                                                        <div class="form-group">
                                                                            <select>
                                                                                <option></option>
                                                                            </select>
                                                                            <input type="hidden" name="res_id"
                                                                                value="<?php echo $res_id; ?>">
                                                                            <input type="hidden" name="reservation_name"
                                                                                value="<?php echo $reservation_name; ?>">
                                                                            <input type="hidden" name="reservation_phone"
                                                                                value="<?php echo $reservation_phone; ?>">
                                                                            <input type="hidden" name="reservation_date"
                                                                                value="<?php echo $reservation_date; ?>">
                                                                            <input type="hidden" name="reservation_time"
                                                                                value="<?php echo $reservation_time; ?>">
                                                                            <p style="display:none;text-align: center;"
                                                                                id="viewMenu">
                                                                                <input type="submit" value="Confrirm"
                                                                                    name="selectChair"
                                                                                    class="btn btn-primary py-3 px-5">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- END -->
                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                                Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                                    template</a> from BootstrapDash.
                                All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                                with <i class="ti-heart text-danger ml-1"></i></span>
                        </div>
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
                                    href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
    </body>

    </html>
<?php } else {

    echo "<script>alert('Error');</script>";

}
?>

<script type="text/javascript">
    // $(".restTable").click(function() {
    //   // body...
    //   var id = $(this).data("id");
    //   var tbl = document.getElementById("restTable"+id);
    //    var btnmenu = document.getElementById("viewMenu");

    //   // alert(tbl.checked);

    //    if (tbl.checked == true){
    //        btnmenu.style.display = "block";
    //     } else {
    //        btnmenu.style.display = "none";
    //     }

    // });

    $(document).ready(function () {
        $('input[type="checkbox"]').click(function () {
            // alert($('.menu:checked').length);

            var btnmenu = document.getElementById("viewMenu");
            var maxchecked = $('#chair:checked').length;
            // alert(maxchecked)
            if (maxchecked > 0) {
                btnmenu.style.display = "block";
            } else {
                btnmenu.style.display = "none";
            }


        });
    });
</script>