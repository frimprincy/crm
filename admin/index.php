<?php include_once("settings.php");

session_start()
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/admin-main.css" />

    <script src="js/popper.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
</head>
<body>
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
        <a class="navbar-brand" href="#">MY SHOP MANAGER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            <i class="fa fa-bars text-light"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for ..." aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn bg-primary" type="submit">
                            <i class="fa fa-search text-light"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="sale.php"><i class="fas fa-check-circle"></i> Sales <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="product.php"><i class="fas fa-box"></i> Products</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link text-light" href="blog.php"><i class="fas fa-blog"></i> Blog</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link text-light" href="Logout.php"><i class="fas fa-lock"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start content -->
    <div class="container-fluid">
    <div class="row">
        <!-- Start Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="navbar-item active">
                    <a href="index.php" class="nav-link text-white pl-3">
                        <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="customer.php" class="nav-link text-white pl-3">
                        <i class="fas fa-fw fa-user"></i> Customers
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="sale.php" class="nav-link text-white pl-3">
                        <i class="fas fa-fw fa-chart-line"></i> Sales
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="product.php" class="nav-link text-white pl-3">
                        <i class="fab fa-product-hunt"></i> Products
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="blog.php" class="nav-link text-white pl-3">
                        <i class="fas fa-fw fa-blog"></i> Add Blog
                    </a>
                </li>
                <li class="navbar-item ">
                    <a href="user.php" class="nav-link text-white pl-3">
                        <i class="fas fa-fw fa-users"></i> Add User
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="comment.php" class="nav-link text-white pl-3">
                        <i class="fas fa-fw fa-comments"></i> View Comments
                    </a>
                </li>
                </li>
            </ul>

            <!-- Start Saved reports section -->
            <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
            </a>
            </h5>
            <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link text-white pl-3" href="#">
                <span data-feather="file-text"></span>
                Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white pl-3" href="#">
                <span data-feather="file-text"></span>
                Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white pl-3" href="#">
                <span data-feather="file-text"></span>
                Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white pl-3" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
                </a>
            </li>
            </ul>
            <!-- End Saved reports section -->
        </div>
        </nav>
        <!-- End Sidebar -->

        <!-- Start Main Dashboard -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <div class="dropdown">
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 This week
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Last week</a>
                <a class="dropdown-item" href="#">This month</a>
                <a class="dropdown-item" href="#">Last month</a>
            </div>
            </div>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </div>
        </div>
        <?php  if(isset($_SESSION["admin_email"])){
                 echo "<span style='color:green'>welcome:</span>".$_SESSION['admin_email'] ;
              
                 }else{
   
                    if(session_destroy()) {
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                 }
                 ?>
        <!-- Icon Cards-->
        <div class="row m-0">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="row m-0 briefBox bg-light p-1 rounded-lg text-center">
                <div class="col-md-9">
                    <?php TotalSales() ?>
                    <h5>Total Sales</h5>
                </div>
                <div class="col-md-3 bg-primary p-2 text-white">
                    <i class="fas fa-chart-line fa-2x"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="row m-0 briefBox bg-light p-1 rounded-lg text-center">
                <div class="col-md-9">
                    <?php Totalcustomers();  ?>
                    <h5> Customers</h5>
                </div>
                <div class="col-md-3 bg-warning p-2 text-white">
                    <i class="fas fa-user fa-2x"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="row m-0 briefBox bg-light p-1 rounded-lg text-center">
                <div class="col-md-9">
                    <?php Totalproducts() ?>
                    <h5>Products</h5>
                </div>
                <div class="col-md-3 bg-success p-2 text-white">
                    <i class="fab fa-product-hunt fa-2x"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="row m-0 briefBox bg-light p-1 rounded-lg text-center">
                <div class="col-md-9">
                    <?php Totalusers()  ?>
                    <h5>Users</h5>
                </div>
                <div class="col-md-3 bg-info p-2 text-white">
                    <i class="fas fa-user fa-2x"></i>
                </div>
            </div>
        </div>
        </div>
        <!-- End icon cards -->
   
        <!-- The Chart -->
        <canvas class="my-4 w-100 bg-light" id="myChart" width="900" height="380"></canvas>

         <!-- End Main Dashboard -->


        <!-- For Footer -->
        <footer class="adminFooter text-center">
            <p> copyright &copy; my manager 2019 </p>
        </footer>
        <!-- End Footer -->
        </main>
    </div>
    </div>
    <!-- End Container Fluid-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
</body>
</html>