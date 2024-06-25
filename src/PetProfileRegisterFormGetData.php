<?php

   include_once 'configPet.php';


?>


<?php

    $NAME = $_POST["PName"];
    $SPECIES = $_POST["PSpecies"];
    $BREED = $_POST["PBreed"];
    $AGE = $_POST["PAge"];
    $GENDER = $_POST["PGender"];
    $VID = $_POST["VID"];
    $PINFO = $_POST["PInfo"];
	
	

    $In = "INSERT INTO petprofile(Pet_Profile_ID,Pet_Name,Species,Breed,Age,Gender,Vet_ID,M_Info)  VALUES ('','$NAME','$SPECIES','$BREED','$AGE','$GENDER', '$VID','$PINFO')";

    if(mysqli_query($conn, $In)){


        echo "<Script>alert('Profile created successfully');</script>";


    }else{


        echo "<Script>alert('Profile unsuccessfull! Please Re-enter.');</script>";

    }
   
   

   mysqli_close($conn);


?>

<script>

    window.location.href = "PetProfileRegisterForm.html";
    
</script>
