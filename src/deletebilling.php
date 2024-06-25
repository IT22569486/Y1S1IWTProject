<?php
   include_once "configPet.php";
?>

<?php

   $B_id = $_GET['id'];
   
   $sql = "DELETE from billing_info where billing_id = '$B_id'";

   $DELETE = mysqli_query($conn,$sql);

   if($DELETE){
	   
	   echo "<script>alert('Row Deleted Successfully!')</script>";
     echo "<script>window.location.href = 'viewBillinginfo.php';</script>";

   }
   else{
	    echo "<script>alert('error in deletion')</script>";
      
    }

     mysqli_close($conn);
?>