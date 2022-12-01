<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form Components | ThemeKit - Admin Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../node_modules/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../dist/css/theme.min.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<?php
// define variables to empty values  
$name = $model_no = $reg_no = $mileage = $transmission = $seats = $luggage = $fuel = $rent = "";
$nameErr = $model_noErr = $reg_noErr = $mileageErr = $transmissionErr = $seatsErr = $luggageErr = $fuelErr = $rentErr = "";
$drivername = $age =  $image = "";
$drivernameErr = $ageErr =  $imageErr = "";
$vendornameErr = $ageErr = "";
$driver_name = $driver_mob = $driver_email =  $driver_age = $driver_address = "";
$driver_nameErr = $driver_mobErr = $driver_emailErr =  $driver_ageErr = $driver_addressErr = "";


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function queryExecute($sql, $msg)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "themekit";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, 3306);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    if ($conn->query($sql) === TRUE) {
        echo "New record created  successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["pro_submit"] == "pro_submit") {

        if (($_POST["name"]) == "") {
            $nameErr = " name is required";
          } else {
            $name = test_input($_POST["name"]);
         }
         if (($_POST["model_no"]) == "") {
            $model_noErr = " model number is required";
          } else {
            $model_no = test_input($_POST["model_no"]);
         }

         if (($_POST["reg_no"]) == "") {
            $reg_noErr = " Registration number is required";
          } else {
            $reg_no = test_input($_POST["reg_no"]);
         }

         if (($_POST["mileage"]) == "") {
            $mileageErr = " mileage is required";
          } else {
            $mileage = test_input($_POST["mileage"]);
         }

         if (($_POST["transmission"]) == "") {
            $transmissionErr = " name is required";
          } else {
            $transmission = test_input($_POST["transmission"]);
         }
         if (($_POST["seats"]) == "") {
            $seatsErr = " seats is required";
          } else {
            $seats = test_input($_POST["seats"]);
         }

         if (($_POST["luggage"]) == "") {
            $luggageErr = " luggage is required";
          } else {
            $luggage = test_input($_POST["luggage"]);
         }

         if (($_POST["fuel"]) == "") {
            $fuelErr = " fuel is required";
          } else {
            $fuel = test_input($_POST["fuel"]);
         }

         if (($_POST["rent"]) == "") {
            $rentErr = " rent is required";
          } else {
            $rent = test_input($_POST["rent"]);
         }

   




        queryExecute("INSERT INTO add_car (name,model_no,reg_no	,mileage	,transmission,	seats	,luggage	,fuel,	rent)
   VALUES ('" . $name . "','" . $model_no . "','" . $reg_no . "','" . $mileage . "','" . $transmission . "','" . $seats . "','" . $luggage . "','" . $fuel . "','" . $rent . "')", "product added");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["driver_submit"] == "driver_submit") {

        if (($_POST["driver_name"]) == "") {
            $driver_nameErr = " driver name is required";
          } else {
            $driver_name = test_input($_POST["driver_name"]);
         }
         if (($_POST["driver_mob"]) == "") {
            $driver_mobErr = " driver Mobile number is required";
          } else {
            $driver_mob = test_input($_POST["driver_mob"]);
         }
         if (($_POST["driver_email"]) == "") {
            $driver_emailErr = " driver email is required";
          } else {
            $driver_email = test_input($_POST["driver_email"]);
         }
         if (($_POST["driver_age"]) == "") {
            $driver_ageErr = " driver Age is required";
          } else {
            $driver_age = test_input($_POST["driver_age"]);
         }
         if (($_POST["driver_address"]) == "") {
            $driver_addressErr = " driver Address is required";
          } else {
            $driver_address = test_input($_POST["driver_address"]);
         }






        queryExecute("INSERT INTO add_driver (driver_name	,driver_mob,	driver_email,	driver_age,	driver_address	)
  VALUES ('" . $driver_name . "','" . $driver_mob . "','" . $driver_email . "','" . $driver_age . "','" . $driver_address . "')", "driver inserted");
    }
}












?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        <header class="header-top" header-theme="light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        <div class="header-search">
                            <div class="input-group">
                                <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                            </div>
                        </div>
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                    </div>
                    <div class="top-menu d-flex align-items-center">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
                            <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                <h4 class="header">Notifications</h4>
                                <div class="notifications-wrap">
                                    <a href="#" class="media">
                                        <span class="d-flex">
                                            <i class="ik ik-check"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="heading-font-family media-heading">Invitation accepted</span>
                                            <span class="media-content">Your have been Invited ...</span>
                                        </span>
                                    </a>
                                    <a href="#" class="media">
                                        <span class="d-flex">
                                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="heading-font-family media-heading">Steve Smith</span>
                                            <span class="media-content">I slowly updated projects</span>
                                        </span>
                                    </a>
                                    <a href="#" class="media">
                                        <span class="d-flex">
                                            <i class="ik ik-calendar"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="heading-font-family media-heading">To Do</span>
                                            <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                            </div>
                        </div>
                        <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-plus"></i></a>
                            <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Message"><i class="ik ik-mail"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Accounts"><i class="ik ik-users"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Sales"><i class="ik ik-shopping-cart"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Purchase"><i class="ik ik-briefcase"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Pages"><i class="ik ik-clipboard"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Chats"><i class="ik ik-message-square"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Contacts"><i class="ik ik-map-pin"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Blocks"><i class="ik ik-inbox"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Events"><i class="ik ik-calendar"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="ik ik-bell"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="More"><i class="ik ik-more-horizontal"></i></a>
                            </div>
                        </div>
                        <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/user.jpg" alt=""></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                                <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
                                <a class="dropdown-item" href="login.html"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="page-wrap">
            <div class="app-sidebar colored">
                <div class="sidebar-header">
                    <a class="header-brand" href="index.html">
                        <div class="logo-img">
                            <img src="../src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
                        </div>
                        <span class="text">ThemeKit</span>
                    </a>
                    <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                    <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                </div>

                <div class="sidebar-content">
                    <div class="nav-container">
                        <nav id="main-menu-navigation" class="navigation-main">
                            <div class="nav-lavel">Navigation</div>
                            <div class="nav-item active">
                                <a href="file:///C:/Users/ayush/Desktop/themekit-master/index.html"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                            </div>

                            <div class="nav-lavel">Car Panel</div>
                            <div class="nav-item has-sub">
                                <a href="#"><i class="ik ik-box"></i><span>Add Car</span></a>

                            </div>

                            <div class="nav-item has-sub">
                                <a href="#"><i class="ik ik-box"></i><span>Add Drivers</span></a>

                            </div>
                            <div class="nav-item has-sub">
                                <a href="table-bootstrap.html"><i class="ik ik-gitlab"></i><span>Car List</span> <span class="badge badge-success">New</span></a>

                            </div>
                            <div class="nav-item has-sub">
                                <a href="table-bootstrap.html"><i class="ik ik-package"></i><span>Rented Cars</span></a>

                            </div>


                            <div class="nav-lavel">User Panel</div>
                            <div class="nav-item">
                                <a href="table-bootstrap.html"><i class="ik ik-credit-card"></i><span>Registered Users</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="table-datatable.html"><i class="ik ik-inbox"></i><span>Reviews</span></a>
                            </div>

                            id(0)"><i class="ik ik-help-circle"></i><span>Submit Issue</span></a>
                    </div> -->
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row align-items-end">

                    </div>
                </div>

                <!-- <div class="row"> -->
                <div class="col-md-10" style="float: right;">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Car</h3>
                        </div>
                        <div class="card-body">
                            <form class="forms-sample" method="post">
                                <div class="form-group">
                                    <label for="CarName">Car Name</label>
                                    <input type="text" class="form-control" id="CarName" placeholder="Car Name" name="name">
                                    <span class="error" style="color: red;">* <?php echo $nameErr; ?> </span>

                                </div>
                                <div class="form-group">
                                    <label for="ModelNumber">Model Number</label>
                                    <input type="text" class="form-control" id="ModelNumber" placeholder="Model Number" name="model_no">
                                    <span class="error" style="color: red;">* <?php echo $model_noErr; ?> </span>

                                </div>
                                <div class="form-group">
                                    <label for="RegistrationNumber">Registration Number</label>
                                    <input type="text" class="form-control" id="RegistrationNumber" placeholder="Registration Number" name="reg_no">
                                    <span class="error" style="color: red;">* <?php echo $reg_noErr; ?> </span>

                                </div>
                                <div class="form-group">
                                    <label for="Mileage">Mileage</label>
                                    <input type="text" class="form-control" id="Mileage" placeholder="Mileage" name="mileage">
                                    <span class="error" style="color: red;">* <?php echo $mileageErr; ?> </span>

                                </div>
                                <div class="form-group">
                                    <label for="Transmission">Transmission</label>
                                    <input type="text" class="form-control" id="Transmission" placeholder="Transmission" name="transmission">
                                    <span class="error" style="color: red;">* <?php echo $transmissionErr; ?> </span>

                                </div>
                                <div class="form-group">
                                    <label for="Seats">Seats</label>
                                    <input type="text" class="form-control" id="Seats" placeholder="Seats" name="seats">
                                    <span class="error" style="color: red;">* <?php echo $seatsErr; ?> </span>

                                </div>
                                <div class="form-group">
                                    <label for="Luggage">Luggage</label>
                                    <input type="text" class="form-control" id="Luggage" placeholder="Luggage" name="luggage">
                                    <span class="error" style="color: red;">* <?php echo $luggageErr; ?> </span>

                                </div>
                                <div class="form-group">
                                    <label for="Fuel">Fuel</label>
                                    <input type="text" class="form-control" id="Fuel" placeholder="Fuel" name="fuel">
                                    <span class="error" style="color: red;">* <?php echo $fuelErr; ?> </span>

                                </div>

                                <div class="form-group">
                                    <label for="Rent/day">Rent/day</label>
                                    <input type="text" class="form-control" id="Rent/day" placeholder="Rent/day(in Rs.)" name="rent">
                                    <span class="error" style="color: red;">* <?php echo $rentErr; ?> </span>

                                </div>


                                <button type="submit" class="btn btn-primary mr-2" name="pro_submit" value="pro_submit">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-10" style="float: right;">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Car</h3>
                        </div>
                        <div class="card-body">


                            <form class="forms-sample" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="form-group">
                                    <label for="driver_name">Driver Name</label>
                                    <input type="text" class="form-control" id="drivername" placeholder="Driver Name" name="driver_name">
                                    <span class="error" style="color: red;">* <?php echo $driver_nameErr; ?> </span>


                                </div>
                                <div class="form-group">
                                    <label for="driver_mob">Mobile Number</label>
                                    <input type="text" class="form-control" id="driver_mob" name="driver_mob" placeholder="Enter Mobile Number">
                                    <span class="error" style="color: red;">* <?php echo $driver_mobErr; ?> </span>


                                </div>

                                <div class="form-group">
                                    <label for="driver_email">Email Address</label>
                                    <input type="text" class="form-control" id="driver_email" name="driver_email" placeholder="Enter Email Address">
                                    <span class="error" style="color: red;">* <?php echo $driver_emailErr; ?> </span>

                                </div>

                                <div class="form-group">
                                    <label for="driver_age">Age</label>
                                    <input type="text" class="form-control" id="driver_age" placeholder="Enter Age" name="driver_age">
                                    <span class="error" style="color: red;">* <?php echo $driver_ageErr; ?> </span>

                                </div>


                                <div class="form-group">
                                    <label for="driver_address">Address</label>
                                    <textarea class="form-control" id="driver_address" name="driver_address" rows="2"></textarea>
                                    <span class="error" style="color: red;">* <?php echo $driver_addressErr; ?> </span>

                                </div>
                                <button type="submit" class="btn btn-primary mr-2" name="driver_submit" value="driver_submit">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                    </div>
                </div>



                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
                    </div>
                </footer>
            </div>
        </div>




        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')
        </script>
        <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="../dist/js/theme.min.js"></script>
        <script src="../js/forms.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                    function() {
                        (b[l].q = b[l].q || []).push(arguments)
                    });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
</body>

</html>