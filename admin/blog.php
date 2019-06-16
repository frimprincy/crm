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

        <!-- Start Main Blog -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
           <?php Addblog() ?>
           <?php deleteblog()  ?>
            <h1 class="h2">Blogs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <form class="form-inline" method="post" enctype="multipart/form-data" name='RegForm' onsubmit="return GEEKFORGEEKS()">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus"></i>
                            Add Blog
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Enter Blog Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="mb-5" method="post" enctype="multipart/form-data" name='RegForm' onsubmit="return GEEKFORGEEKS()">
                                    <div class="form-group">
                                        <label for="blog title">Blog Title:  </label>
                                        <input type="text" style="width:100%;" name="blogTitle" class="form-control" id="blog-title" aria-describedby="blogtitle" placeholder="Enter Title of Blog..." required>
                                        <small id="emailHelp" class="form-text text-muted">Just something to depict what the blog is about</small>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description: </label>
                                        <textarea class="form-control"  name="description" style="width:100%;" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Select picture</label>
                                        <input type="file" style="width:100%;" name="bimage" class="form-control-file"  id="bimage"    required accept="image/*">
                                     
                                    </div>
                                    <br>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                                        <label class="form-check-label" for="exampleCheck1">Everything is correct.</label>
                                    </div>
                                    <br>
                                    <button type="submit" name="blog" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                </form>
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
<script type="text/javascript">
    function GEEKFORGEEKS()                                    
{ 
    var blogTitle = document.forms["RegForm"]["blogTitle"];               
       
     
  
   
   

    
   }
   
</script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
</body>
</html>