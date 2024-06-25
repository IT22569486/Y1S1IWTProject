<?php

    include_once 'configPet.php';

?>

<?php

    $PetID = $_GET['PetID'];

    $Del = "Delete from petprofile where Pet_Profile_ID = '$PetID'";

    $Delete = mysqli_query($conn,$Del);



    mysqli_close($conn);



    if($Delete){

    	echo '<script>alert("Pet Profile Deleted!");</script>';

    }
?>

<script>

    window.location.href = "SeeCreatedPetProfiles.php";
    
</script>