<?php
	include_once'configPet.php';
?>
<?php

		$notice_Id=$_GET['NoticeID'];
	
	$querry="delete 
	from notices
	where Notce_ID='$notice_Id'";
	
		$dele=mysqli_query($conn,$querry);
		
		if($dele){
			echo "<scripat>alert('Record Deleted.')</script>";
		}
		else{
			echo "<scripat>alert('Record not deleted.')</script>";
		}
	
	mysqli_close($conn);
?>