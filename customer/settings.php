<?php 
include_once("database.php");
    

?>


<?php



// Admin login







//Add products

function addProducts(){
    global $conn;

    if(isset($_POST["products"])){
        $product_name=mysqli_real_escape_string($conn,$_POST["productName"]);
        $product_cat=mysqli_real_escape_string($conn,$_POST["productCat"]);
        $product_Price=mysqli_real_escape_string($conn,$_POST["productPrice"]);
        $product_qty=mysqli_real_escape_string($conn,$_POST["productQuantity"]);
        $Item_id=mysqli_real_escape_string($conn,$_POST["productID"]);

         $Amount=$product_Price*$product_qty;

        $getProducts="SELECT * FROM products";
         $run_product=mysqli_query($conn,$getProducts);
         $row_count=mysqli_num_rows($run_product);

       
             $insertProduct="INSERT INTO products(itemID,ISBN,Category,productName,Price,Quantity,Amount) 
              VALUES('$Item_id',rand(10),'$product_cat','$product_name','$product_Price','$product_qty','$Amount')";

              $run_InsertProduct=mysqli_query($conn,$insertProduct);
        
              if($run_InsertProduct){
                  echo "product Added succesfully";
              }else{
                echo "product Addin fail";
              }
    }
}



function getProducts(){
    global $conn;

    $getProducts="SELECT * FROM products";
    $run_product=mysqli_query($conn,$getProducts);

    while($row=mysqli_fetch_array($run_product)){
        $itemID=$row['itemID'];
        $product_cat=$row['Category'];
        $product_id=$row['productID'];
        $product_name=$row['productName'];
        $product_Price=$row['Price'];
        $product_qty=$row['Quantity'];
        $Amount=$row['Amount'];
        $productID=$row['productID'];


        echo "<tr>
        <th scope='row'>$productID</th>
        <td>$itemID</td>
        <td>1001</td>
        <td>$product_cat</td>
        <td>$product_name</td>
        <td>$product_Price</td>
        <td>$product_qty</td>
        <td>$Amount</td>
        <td>
           <a href='product.php?edit_product=$product_id' <button class='btn btn-primary'><i class='fas fa-edit'></i></button>
           <a href='product.php?delete_product=$product_id' <button class='btn btn-danger'> <i class='fas fa-times'></i></button>
        </td>
        </tr>";

    }


}


//delete products


function delete_product(){

    global $conn;
  
    if(isset($_GET["delete_product"])){
      $id =$_GET["delete_product"];
  
      $delete_product="DELETE FROM products WHERE productID='$id'";
      $stmt=mysqli_query($conn,$delete_product);
  
      if($stmt){
        echo  "<div class='alert alert-success' role='alert'>
        Product deleted successfully!
         </div>";
        echo "<script>window.open('product.php','_self')</script>";
      }
    }
  }



// Adding Sale

function AddSale(){
    global  $conn;
    if(isset($_POST["sales"])){
      
        $product_name=mysqli_real_escape_string($conn,$_POST["itemName"]);
        $product_cat=mysqli_real_escape_string($conn,$_POST["itemCat"]);
        $product_itemPrice=mysqli_real_escape_string($conn,$_POST["itemPrice"]);
        $product_itemQuantity=mysqli_real_escape_string($conn,$_POST["itemQuantity"]);
        $product_itemAmount=mysqli_real_escape_string($conn,$_POST["itemAmount"]);
        $product_itemID=mysqli_real_escape_string($conn,$_POST["ItemID"]);


        $insertSales="INSERT INTO sales(itemID,Category,saleName,Price,quantity,Amount)
        VALUES('$product_itemID','$product_cat','$product_name','$product_itemPrice','$product_itemQuantity','$product_itemAmount')";
      

        $run_InsertSale=mysqli_query($conn,$insertSales);


        if($run_InsertSale){
            echo  "<div class='alert alert-success' role='alert'>
            Product added successfully!
             </div>";
        }else{
            echo "product Adding fail";
        }
        
       

 }
}





//insert products


function getSale(){
    global $conn;

    $getSale="SELECT * FROM sales";

    $run_sales=mysqli_query($conn,$getSale);

    while($row=mysqli_fetch_array($run_sales)){
        $itemID=$row['itemID'];
        $product_cat=$row['Category'];
        $product_name=$row['saleName'];
        $product_itemPrice=$row['Price'];
        $product_itemQuantity=$row['quantity'];
        $product_itemAmount=$row['Amount'];
        $saleID =$row['SaleID'];


        echo "<tr>
        <th scope='row'>$saleID</th>
        <td>0$saleID</td>
        <td>1001</td>
        <td>$product_cat</td>
        <td>$product_name</td>
        <td>$product_itemPrice</td>
        <td>$product_itemQuantity</td>
        <td> $product_itemAmount</td>
        <td>
        <a href='sale.php?edit_sale=$saleID' ><button class='btn btn-primary'><i class='fas fa-edit'></i></button> </a>
        <a href='sale.php?delete_sale=$saleID'>   <button class='btn btn-danger'> <i class='fas fa-times'></i></button></a>
        </td>
        </tr>";
    }


}

//delete sales

function delete_sales(){

    global $conn;
  
    if(isset($_GET["delete_sale"])){
      $id =$_GET["delete_sale"];
  
      $delete_product="DELETE FROM sales WHERE SaleID='$id'";
      $stmt=mysqli_query($conn,$delete_product);
  
      if($stmt){
        echo  "<div class='alert alert-success' role='alert'>
        item deleted successfully!
         </div>";
        echo "<script>window.open('sale.php','_self')</script>";
      }
    }
  }
//Adding customers

function addCustomer(){
    global $conn;

    if(isset($_POST["customers"])){
        $fistName=mysqli_real_escape_string($conn,$_POST["fname"]);
        $lastName=mysqli_real_escape_string($conn,$_POST["lname"]);
        $customerEmail=mysqli_real_escape_string($conn,$_POST["email"]);
        $cusPhone=mysqli_real_escape_string($conn,$_POST["phone"]);

        $Addcustomer="INSERT INTO customers(fName,Lname,Email,Phone)
        VALUES('$fistName','$lastName','$customerEmail','$cusPhone')";

        $runAddcustomer=mysqli_query($conn,$Addcustomer);

        if($runAddcustomer){
            echo  "<div class='alert alert-success' role='alert'>
            Customer added successfully!
             </div>";
        }else{
            echo "Customer adding failed";
        }

    }
}



//getting customers details


function getCustomers(){
    global $conn;

    $getCustomer="SELECT * FROM customers";
     $run_customer=mysqli_query($conn,$getCustomer);

     while($row=mysqli_fetch_array($run_customer)){
        $fistName=$row['fName'];
        $lastName=$row['Lname'];
        $customerEmail=$row['Email'];
        $cusPhone=$row['Phone'];
        $cusID=$row['id'];


        echo "<tr>
        <th scope='row'>$cusID</th>
        <td>0$cusID</td>
        <td>$fistName    $lastName</td>
        <td>$customerEmail</td>
        <td>$cusPhone</td>
        <td>
        <a href='customer.php?edit_customer=$cusID' >  <button class='btn btn-primary'><i class='fas fa-edit'></i></button></a>
        <a href='customer.php?delete_customer=$cusID' >  <button class='btn btn-danger'> <i class='fas fa-times'></i></button></a>
        </td>
        </tr>";
     }

}



//delete sales

function delete_customers(){

    global $conn;
  
    if(isset($_GET["delete_customer"])){
      $id =$_GET["delete_customer"];
  
      $delete_product="DELETE FROM customers WHERE id='$id'";
      $stmt=mysqli_query($conn,$delete_product);
  
      if($stmt){
        echo  "<div class='alert alert-success' role='alert'>
        item deleted successfully!
         </div>";
        echo "<script>window.open('customer.php','_self')</script>";
      }
    }
  }

//Add Application user

function AddUser(){
    global $conn;

    if(isset($_POST['users'])){
        $fistName=mysqli_real_escape_string($conn,$_POST["fname"]);
        $LastName=mysqli_real_escape_string($conn,$_POST["lname"]);
        $Email=mysqli_real_escape_string($conn,$_POST["Email"]);
        $pass=mysqli_real_escape_string($conn,$_POST["password"]);

        $insertUsers="INSERT INTO users(fname,Lname,email,pass)
        VALUE('$fistName','$LastName','$Email','$pass')";

        $run_InsertUsers=mysqli_query($conn,$insertUsers);

        if($run_InsertUsers){
            echo  "<div class='alert alert-success' role='alert'>
     User added successfully!
      </div>";
        }else{
            echo "user adding failed";
        }
       
    }
}


//getting users details

function getUsers(){
    global $conn;

    $getUsers="SELECT * FROM users";
    $run_getUsers=mysqli_query($conn,$getUsers);

    while($row=mysqli_fetch_array($run_getUsers)){
        $fistName=$row['fname'];
        $LastName=$row['Lname'];
        $Email=$row['email'];
        $pass=$row['pass'];
        $userId=$row['id'];


        echo "  <tr>
        <th scope='row'>$userId</th>
        <td>0$userId</td>
        <td>$fistName $LastName</td>
        <td>$Email</td>
        <td>$pass</td>
        <td>
        <a href='user.php?edit_user=$userId' >  <button class='btn btn-primary'><i class='fas fa-edit'></i></button> </a>
        <a href='user.php?delete_user=$userId' >   <button class='btn btn-danger'> <i class='fas fa-times'></i></button> </a>
        </td>
        </tr>";
    }
}


//delete sales

function delete_users(){

    global $conn;
  
    if(isset($_GET["delete_user"])){
      $id =$_GET["delete_user"];
  
      $delete_product="DELETE FROM users WHERE id='$id'";
      $stmt=mysqli_query($conn,$delete_product);
  
      if($stmt){
        echo  "<div class='alert alert-success' role='alert'>
        item deleted successfully!
         </div>";
        echo "<script>window.open('user.php','_self')</script>";
      }
    }
  }

function Addblog(){
    global $conn;
   

    if(isset($_POST['blog'])){

        $blogTitle=mysqli_real_escape_string($conn,$_POST["blogTitle"]);
        $blogDescription=mysqli_real_escape_string($conn,$_POST["description"]);

        $v1=rand(1111,9999);
        $v2=rand(1111,9999);
        
        $v3=$v1.$v2;
        
        $v3=md5($v3);
        
        
        $fnm=$_FILES["bimage"]["name"];
        $dst="./blog_image/".$v3.$fnm;
        $dst1=$v3.$fnm;
        move_uploaded_file($_FILES["bimage"]["tmp_name"],$dst);

        $insertBlog="INSERT INTO blog(blogTitle,blogDescription,picture) 
        VALUES('$blogTitle','$blogDescription','$dst1')";
       
       $run_blog=mysqli_query($conn,$insertBlog);

       if($run_blog){
        echo  "<div class='alert alert-success' role='alert'>
        blog added successfully!
         </div>";
       }else{
        echo "blog adding failed";
       }
        
    }

}


function getblog(){
    global $conn;

    $fetchBlog="SELECT * FROM blog";
    $run_fetchBlog=mysqli_query($conn,$fetchBlog);

    while($row=mysqli_fetch_array($run_fetchBlog)){
        $blogTitle=$row["blogTitle"];
        $blogDescription=$row["blogDescription"];
        $blogpicture=$row["picture"];


        echo "
        
        <div style='padding:20px; margin-top:25px;' class='col-md-5 card blog'>
        <img style='width:250px;height:200px' src='blog_image/$blogpicture' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>$blogTitle</h5>
            <p class='card-text'> $blogDescription</p>
            <a href='#' class='btn btn-primary'>Read more</a>
        </div>
    </div>
    <div class='col-md-1'></div>
    
     ";

        
    }

}



//Add comments

function addComment(){
    global $conn;

    if(isset($_POST['comment'])){
        $commentName=mysqli_real_escape_string($conn,$_POST["commentName"]);
        $commentDescription=mysqli_real_escape_string($conn,$_POST["commentDescription"]);

        $insertComment="INSERT INTO comments(personName,commentDescription,commentTime,commentDate)
        VALUES('$commentName','$commentDescription','time()',now() )";

        $run_insertComment=mysqli_query($conn,$insertComment);

        if($run_insertComment){
            echo  "<div class='alert alert-success' role='alert'>
     Comment added successfully!
      </div>";
        }else{
            echo "comment Adding failed";
        }
    
    }
}


function  getComment(){
    global $conn;

    $getComment="SELECT * from comments";
    $runcomment=mysqli_query($conn,$getComment);

    while($row=mysqli_fetch_array($runcomment)){
        $id=$row['id'];
        $personName=$row['personName'];
        $commentDescription=$row['commentDescription'];
        $commentDate=$row['commentDate'];


        echo  "
        <div class='card card-inner'>
        <div class='card-body'>
                <div class='row'>
                     <div class='col-md-2'>
                         <img src='https://image.ibb.co/jw55Ex/def_face.jpg' class='img img-rounded img-fluid'/>
                         <p class='text-secondary text-center'>$commentDate</p>
                     </div>
                     <div class='col-md-10'>
                         <p><a href='#'><strong>$personName</strong></a></p>
                         <p>$commentDescription</p>
                         <p>
                           
                        </p>
                     </div>
                 </div>
             
         </div>
     </div>";
    }
}

function customer_signin(){
    global $conn;
      if(isset($_POST['submit'])){
  
         $username=$_POST["email"];
         $C_pass=$_POST["password"];
         
  
         $select_admin="SELECT * FROM customers WHERE Email='$username' AND pass='$C_pass'";
         $run_admin=mysqli_query($conn,$select_admin);
         $check_admin=mysqli_num_rows($run_admin);
  
         if($check_admin==0){
  
           echo "<h5 style='color:red;'>UserName or Password do not exist! </h5>";
         }else{
    
  
           $_SESSION["email"]=$username;
           echo "<script> alert('You have login successfully!')</script>";
           echo "<script> window.open('index.php','_self')</script>";
            
  
         }
          
  
      }
  
  
  }
?>


