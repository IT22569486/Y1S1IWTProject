<?php
	include_once'configPet.php';
?>
<?php

	if($_GET["Submit1"]){
		
		$Notice_ID=$_GET["field0"];
		$Notice_name=$_GET["field1"];
		$descrip=$_GET["field2"];
		
		
	
	$querry="update notices set 
				
				Notice_Topic='$Notice_name',
				Description='$descrip'
				where Notce_ID=$Notice_ID";
	
		$data=mysqli_query($conn,$querry);
		
		if($data){
			echo "<script>alert('Record updated.')</script>";
		}
		else{
			echo "<script>alert('Error inupdate.')</script>";
		}
	}
	mysqli_close($conn);
?>