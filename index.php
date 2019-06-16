<?php 
session_start();
include_once("Usersettings.php");

  ?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Shop Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    
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


        <div class="collapse navbar-collapse mr-4" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for ..." aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn bg-primary" type="button">
                            <i class="fa fa-search text-light"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="pl-0">
                <li class="text-white font-weight-bold">
                    <span>
                        <span>
                           <a class="navbar-brand" href="Logout.php">Logout</a>
                        </span>  
                         
                    </span>

                </li>
            </ul>

        </div>

    </nav>
    <!-- End Navbar -->

    <!-- Start Content -->
    <div class="row mt-0 mb-0">
        <div class="col-md-4 card bg-light ">
            <img class="card-img-top" src="assets/business.png" alt="sales image cap">
            <div class="card-body">
                <h5 class="card-title">Record Sales</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
               <form action="index.php" method="POST">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                   
                        <div class="form align-items-center">
                            <div class="my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">Product: </div>
                                </div>
                                <input type="text" style="width: 60%;" name="product" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter Product name..." required>
                            </div>
                            </div>
                        </div>
                   
                </li>
                <li class="list-group-item">
                
                        <div class="form align-items-center">
                            <div class="my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">Quantity: </div>
                                </div>
                                <input type="number" style="width: 60%;" name="quantity" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter Quantity bought..." required>
                            </div>
                            </div>
                        </div>
                   
                </li>
                <li class="list-group-item">

<div class="form align-items-center">
    <div class="my-1">
    <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text">Item Price: </div>
        </div>
        <input type="number" style="width: 60%;" name="price" class="form-control" id="inlineFormInputGroupUsername" placeholder=" Enter product Price..." required>
    </div>
    </div>
</div>

</li>
                <li class="list-group-item">
                  
                        <div class="form align-items-center">
                            <div class="my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div   class="input-group-text">Amount:</div>
                                </div>
                                <input type="number" style="width: 60%;" name="amount" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter Amount bought..." required>
                            </div>
                            </div>
                        </div>
                    
                </li>
               
                <li class="list-group-item">
                   
                   <div class="form align-items-center">
                       <div class="my-1">
                       <div class="input-group">
                           <div class="input-group-prepend">
                           <div class="input-group-text">Item  ID: </div>
                           </div>
                           <input type="number" style="width: 60%;" name="itemId" class="form-control" id="inlineFormInputGroupUsername" placeholder=" Enter product item..." required>
                       </div>
                       </div>
                   </div>
              
               </li>
     
             <li class="list-group-item">
                   
                   <div class="form align-items-center">
                       <div class="my-1">
                       <div class="input-group">
                           <div class="input-group-prepend">
                           <div class="input-group-text">Category: </div>
                           </div>
                           <input type="text" style="width: 60%;" name="cat" class="form-control" id="inlineFormInputGroupUsername" placeholder=" Enter product category..." required>
                       </div>
                       </div>
                   </div>
              
           </li>
            </ul>
          
            <div class="card-body row">
                <div class="col-auto my-1">
                   <input type="submit" class=" btn-primary" name="add" value="Add">
                </div>
                <div class="col-auto my-1">
                <input type="submit" name="resert" class="btn-primary " value="Resert">
                </div>
               
            </div>
            </form>
              
            </ul>
           
        </div>
        
        <div class="col-md-3">                
                <form name="calculator" class="calc mb-3">         
                    <input type="text" class="calctext" name="answer" />
                    <br>
                    
                    <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
                    <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
                    <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
                    <input type="button" class="signb" value=" + " onclick="calculator.answer.value += '+'" />
                    <br/>
                    
                    <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
                    <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
                    <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
                    <input type="button" class="signb" value=" - " onclick="calculator.answer.value += '-'" />
                    </br>
                
                    <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
                    <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
                    <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
                    <input type="button" class="signb" value=" x " onclick="calculator.answer.value += '*'" />
                    </br>

                    <input type="button" value=" c " onclick="calculator.answer.value = ''" />
                    <input type="button" value=" 0 " onclick="calculator.answer.value += '0'" />
                    <input type="button" class="signbe" value=" = " onclick="calculator.answer.value = eval(calculator.answer.value)" />
                    <input type="button"  class="signb" value=" / " onclick="calculator.answer.value += '/'" />
                    </br>
                </form>

                <?php getSales() ;


                 if(isset($_SESSION["email"])){
                 echo "<span style='color:green'>welcome:</span>".$_SESSION['email'] ;
              
                 }else{
   
                    if(session_destroy()) {
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                 }
                 ?>
               
        </div>
        
        <!-- Start Table -->
        <div class="col-md-5 ">
            <div class="table-responsive-sm table-bordered">
                <div class="table-responsive-md">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Amount</th>
                         <th scope="col">Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php fetchSales()  ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End Table -->
    </div>
    <!-- End Content-->
    <br><br>
    <!-- Start Footer-->
    <div class="footer">
        <p> copyright &copy; my manager 2019 </p>
    </div>

    <script src="vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>