<?php
   include_once "configPet.php";
?>

<?php

   $I_id = $_GET['ID'];
   
   $sql = "DELETE from cart_item where product_id = '$I_id'";

   $DELETE = mysqli_query($conn,$sql);

   if($DELETE){
	   
	   echo "<script>alert('Row Deleted Successfully!')</script>";
     echo "<script>window.location.href = 'storeView.php';</script>";

   }
   else{
	    echo "<script>alert('error in deletion')</script>";
      
    }

     mysqli_close($conn);
?>