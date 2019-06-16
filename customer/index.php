<?php session_start()   ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/admin-main.css" />

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
     
            <li class="nav-item">
                <a class="nav-link text-light" href="Logout.php"><i class="fas fa-check-circle"></i> Logout</a>
            </li>
            </ul>
        </div>
    </nav>

     <?php include("settings.php");  ?>
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
                    <a href="product.php" class="nav-link text-white pl-3">
                        <i class="fab fa-product-hunt"></i> Products
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="index.php" class="nav-link text-white pl-3">
                        <i class="fas fa-fw fa-blog"></i>  Blog
                    </a>
                </li>
              
                <li class="navbar-item">
                    <a href="comment.php" class="nav-link text-white pl-3">
                        <i class="fas fa-fw fa-comments"></i> View Comments
                    </a>
                </li>
                </li>
            </ul>

          
            <!-- End Saved reports section -->
        </div>
        </nav>
        <!-- End Sidebar -->

        <!-- Start Main Blog -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <?php  if(isset($_SESSION["email"])){
                 echo "<span style='color:green'>welcome:</span>".$_SESSION['email'] ;
              
                 }else{
   
                    if(session_destroy()) {
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                 }
                 ?>
           <?php Addblog() ?>
            <h1 class="h2">Blogs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
               
            </div>
        </div>
            
       <!-- Start Blogs -->
     
        <!-- <div class=" row mt-3 m-0">
            <div class="col-md-5 card blog">
                <img src="../assets/bay-beach-cars-713668.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Days at the beach</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <div class="col-md-2"></div>
           
        </div> -->
        <div class="row mt-3 m-0">
          <?php  getblog();  ?>
        </div>
        
        <!-- End Blogs -->

         <!-- End Main Blog -->


        <!-- For Footer -->
        <footer class="adminFooter text-center mt-4">
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