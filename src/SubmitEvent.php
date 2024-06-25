<?php
	include_once("configPet.php")
?>
<?php
	
	$EventName=$_POST["name"];
	$Description=$_POST["des"];
	$EventDate=$_POST["date"];
	$EventTime=$_POST["time"];
	$ticketPicce=$_POST["price"];
	
	
	$sql="insert into event(Event_ID,Event_Name,Description,Date,Time,Ticket_Price)
			values('','$EventName','$Description','$EventDate','$EventTime','$ticketPicce')";
	if(mysqli_query($conn,$sql)){
	echo "<script>alert('record inserted succesfully');</script>";
}
else{
	echo "<script>alert('error in insertion')</script>";
}
	mysqli_close($conn);
?>