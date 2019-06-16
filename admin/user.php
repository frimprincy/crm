<?php 
session_start();
 if(isset($_SESSION["admin_email"])){
                 echo "" ;
              
                 }else{
   
                    if(session_destroy()) {
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                 }
                 ?>

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
     <?php include("settings.php") ;  ?>
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

        <!-- Start Main Users -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <?php  AddUser(); 
              delete_users()  ?>
            <h1 class="h2">Users</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <form class="form-inline" method="post" name='RegForm' onsubmit="return GEEKFORGEEKS">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus"></i>
                            Add User
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Enter User Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <form method="post" class="mb-5">
                            <!-- First name and last name -->
                            
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="fname" class="form-control" placeholder="First name" required>
                                    </div>
                                    <div class="col">
                                    <input type="text" name="lname" class="form-control" placeholder="Last name" required>
                                    </div>
                                </div>
                           
                            <!-- Email and Phone number -->
                            <br>
                            <hr>
                          
                                <div class="form-row">
                                    <div class="col">
                                        <input type="email" class="form-control" name="Email" placeholder="janedoe@gmail.com" required">
                                    </div>
                                    <div class="col">
                                    <input type="password" class="form-control" name="password" placeholder="password" required>
                                    </div>
                                </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="users" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                     </form>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
            
        <!-- Start table -->
        <div class="table-responsive-sm table-bordered bg-light mt-4 mb-4">
                <div class="table-responsive-md">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Person ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                      <?php getUsers()  ?>
                        
                    </tbody>
                </table>
                </div>
            </div>
            <!-- End table -->

         <!-- End Main User -->


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


    <script> 
function GEEKFORGEEKS()                                    
{ 
    var name = document.forms["RegForm"]["fname"];               
    var lname = document.forms["RegForm"]["lname"]; 
     var phone = document.forms["RegForm"]["phone"];     
     
  
   
     if (!/^[a-zA-Z]*$/g.test(name.value)) {
        alert("enter a valid name");
        name.focus();
        return false;
    }

      if (!/^[a-zA-Z]*$/g.test(lname.value)) {
        alert("enter a valid name");
        lname.focus();
        return false;
    }
   
     if (/^[A-Za-z]+$/g.test(phone.value)) {
        alert("phone accepts only numbers");
        phone.focus();
        return false;
    }
    
   }
   
</script> 
</body>
</html>