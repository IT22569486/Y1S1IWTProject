<?php
	include_once'configPet.php';
?>
<?php

	if($_GET["Submit1"]){
		
		$item_id=$_GET["field0"];
		$item_name=$_GET["field1"];
		$desc=$_GET["field2"];
		$UpriseC=$_GET["field3"];
		$Contact=$_GET["field4"];
		
	
	$querry="update advertisement set 
				
				Item_name='$item_name',
				Description='$desc',
				Unit_Price='$UpriseC',
				Contacts='$Contact'
				where Item_Id=$item_id";
	
		$data=mysqli_query($conn,$querry);
		
		if($data){
			echo "<scripat>alert('Record updated.')</script>";
		}
		else{
			echo "<scripat>alert('Error inupdate.')</script>";
		}
	}
	mysqli_close($conn);
?>