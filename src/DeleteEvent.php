<?php
	include_once'configPet.php';
?>
<?php

		$Event_Id=$_GET['EventID'];
	
	
	$querry="delete 
	from event
	where Event_ID='$Event_Id'";
	
		$dele=mysqli_query($conn,$querry);
		
		if($dele){
			echo "<scripat>alert('Record Deleted.')</script>";
		}
		else{
			echo "<scripat>alert('Record not deleted.')</script>";
		}
	
	mysqli_close($conn);
?>