<?php
	include_once("configPet.php")
?>
<?php
	
	$NoticeTopic=$_POST["topic"];
	$Description=$_POST["des"];
	
	
	
	$sql="insert into notices(Notce_ID,Notice_Topic,Description)
			values('','$NoticeTopic','$Description')";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('record inserted succesfully');</script>";
}
else{
	echo "<script>alert('error in insertion')</script>";
}
	mysqli_close($conn);
?>