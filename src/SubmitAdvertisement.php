<?php
	include_once("configPet.php")
?>
<?php
	
	$ItemName=$_POST["name"];
	$Description=$_POST["des"];
	$UnitPrice=$_POST["Uprice"];
	$Contacts=$_POST["contact"];
	
	
	$sql="insert into advertisement(Item_ID,Item_name,Description,Unit_Price,Contacts)
			values('','$ItemName','$Description','$UnitPrice','$Contacts')";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('record inserted succesfully');</script>";
}
else{
	echo "<script>alert('error in insertion')</script>";
}
	mysqli_close($conn);
?>