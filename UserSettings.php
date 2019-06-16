<?php

include_once("admin/database.php");

?>


<?php
function getSales(){
    global $conn;
if(isset($_POST["add"])){
  $product=$_POST['product'];
  $quantity=$_POST['quantity'];
  $amount=$_POST['amount'];
  $price=$_POST['price'];
  $itemId=$_POST['itemId'];
  $cat=$_POST['cat'];


  $insertSales="INSERT INTO sales(itemID,Category,saleName,Price,quantity,Amount,date)
  VALUES('$itemId','$cat','$product','$price','$quantity','$amount',now())";
  $run_sales=mysqli_query($conn,$insertSales);

  if($run_sales){
      echo  " <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Hi!</strong>  Sales Added successfully.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
  }else{
      echo  "<div class='alert alert-danger' role='alert'>
      failed to Add!
      </div>";
  }
}

 
}



function fetchSales(){
    global $conn;

    $fetchSales="SELECT * FROM sales";

    $run_fetch=mysqli_query($conn,$fetchSales);

    while($row=mysqli_fetch_array($run_fetch)){
        $itemID=$row['itemID'];
        $saleName=$row['saleName'];
        $Price=$row['Price'];
        $quantity=$row['quantity'];
        $Amount=$row['Amount'];
         $date=$row['date'];
        


        echo "<tr>
        <td>$saleName</td>
        <td>$quantity</td>
        <td>$Price</td>
        <td>$Amount</td>
         <td>$date</td>
        <td class='p-1'>
            <button class='btn btn-primary'><i class='fas fa-edit'></i></button>
            <button class='btn btn-danger'> <i class='fas fa-times'></i></button>
        </td>
        </tr>";
    }
}




function user_signin(){
    global $conn;
      if(isset($_POST['submit'])){
  
         $username=$_POST["email"];
         $C_pass=$_POST["password"];
         
  
         $select_admin="SELECT * FROM users WHERE email='$username' AND pass='$C_pass'";
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