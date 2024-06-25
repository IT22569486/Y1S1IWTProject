<?php

   include_once 'configPet.php';

?>

<?php


   if($_GET["Update"]){
	   
	   $ID = $_GET["info0"];
	   $Name = $_GET["info1"];
	   $Species = $_GET["info2"];
	   $Breed = $_GET["info3"];
	   $Age = $_GET["info4"];
	   $Gender = $_GET["info5"];
	   $VetID = $_GET["info6"];
	   $MoreInfo = $_GET["info7"];

	   
	   $Update = "update petprofile set Pet_name = '$Name' ,Species = '$Species',Breed = '$Breed',Age = '$Age',                Gender = '$Gender', Vet_ID =  '$VetID', M_Info = '$MoreInfo' where Pet_Profile_ID = $ID ";

	   $RunUpdate = mysqli_query($conn,$Update);
	   
	   if($RunUpdate){
		   echo "<script>alert('Updated successfull!')</script>";


	   }else{
		   echo "<script>alert('Updated unsuccessfull!')</script>";		
		   
	   }
   }
   


   mysqli_close($conn);
?>

<script>

    window.location.href = "SeeCreatedPetProfiles.php";
    
</script>

