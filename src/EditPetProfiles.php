<?php
   include_once 'configPet.php';
?>

<?php

   $Petid = $_GET["PetID"];
   $PetName = $_GET["PetName"];
   $Species = $_GET["Species"];
   $Breed = $_GET["Breed"];
   $Age = $_GET["Age"];
   $Gender = $_GET["Gender"];
   $VetID = $_GET["VetID"];
   $MInfo = $_GET["MInfo"];


?>

<!DOCTYPE html>

    <head><title>MyPetProfiles</title>
      	<link rel = "stylesheet" href = "SeeCreatedPetProfilesCss.css">
    </head>
    <body>
	<div class = "Table2">

		<form action = "UpdatePetProfile.php" method = "GET">

            <table border = "1">
            	<tr>
            		<th style="background-color:brown;">Pet Profile ID:</th>
            		<th><input type = "text" name = "info0" value = "<?php echo "$Petid"; ?>"id = "PID" readonly></th>
            	</tr>
            	<tr>
            		<th style="background-color:sandybrown;">Petname:</th>
            		<th><input type = "text" name = "info1" value = "<?php echo "$PetName" ?>" id = "Pname"></th>
            	</tr>

            	<tr>
            		<th style="background-color:brown;">Species:</th>
            		<th><input type = "text" name = "info2" value = "<?php echo "$Species" ?>" id = "PSpecies"></th>
            	</tr>

            	<tr>
            		<th style="background-color:sandybrown;">Breed:</th>
            		<th><input type = "text" name = "info3" value = "<?php echo "$Breed" ?>" id = "PBreed"></th>
            	</tr>

            	<tr>
            		<th style="background-color:brown;">Age:</th>
            		<th><input type = "text" name = "info4" value = "<?php echo "$Age" ?>" id = "PAge"></th>
            	</tr>

            	<tr>
            		<th style="background-color:sandybrown;">Gender:</th>
            		<th><input type = "text" name = "info5" value = "<?php echo "$Gender" ?>" id = "PGender"></th>
            	</tr>

            	<tr>
            		<th style="background-color:brown;">Vet ID:</th>
            		<th><input type = "text" name = "info6" value = "<?php echo "$VetID" ?>" id = "VID"></th>
            	</tr>

            	<tr>
            		<th style="background-color:sandybrown;">More Info:</th>
            		<th><textarea  rows = "10" cols = "40" name = "info7" id = "PInfo"><?php echo "$MInfo" ?></textarea></th
            	</tr>

        </table>

        <input type = "submit" value = "Update" id = "bt3" name = "Update">
        </form>
     </div>   

    
    </body>

</html>

<?php
   mysqli_close($conn);
?>
