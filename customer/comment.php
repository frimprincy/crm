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
                    <a class="nav-link text-light" href="Logout.php"><i class="fas fa-check-circle"></i> Logout <span class="sr-only">(current)</span></a>
                </li>
               
            </ul>
        </div>
    </nav>
    <?php include_once("settings.php")  ?>
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

           
        </div>
        </nav>
        <!-- End Sidebar -->

        <!-- Start Main Comments -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <?php addComment(); ?>
            <h1 class="h2">Comments</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <form class="form-inline" method="post">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus"></i>
                            Add Comment
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Enter Comment Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="mb-5" method="post">
                                    <div class="form-group">
                                        <label for="name">Name:  </label>
                                        <input type="text" name="commentName" style="width:100%;" class="form-control" id="blog-title" aria-describedby="blogtitle" placeholder="Enter Name...">
                                        <small id="emailHelp" class="form-text text-muted">Name of the person who gave the comment</small>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description: </label>
                                        <textarea class="form-control" name="commentDescription" style="width:100%;" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Everything is correct.</label>
                                    </div>
                                    <br>
                                    <button type="submit" name="comment" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Start Comments -->
        <div class="container mt-3">	
                <div class="card">
                   
                 <?php  getComment()   ?>
                    
                </div>
     </div>
            <!-- End comment -->

            <!-- End Comments -->

         <!-- End Main Comment -->


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