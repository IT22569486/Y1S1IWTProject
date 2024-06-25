<?php
	include_once'configPet.php';
?>
<?php

		$item_Id=$_GET['ItemID'];
	
	$querry="delete 
	from advertisement
	where Item_Id='$item_Id'";
	
		$dele=mysqli_query($conn,$querry);
		
		if($dele){
			echo "<scripat>alert('Record Deleted.')</script>";
		}
		else{
			echo "<scripat>alert('Record not deleted.')</script>";
		}
	
	mysqli_close($conn);
?>