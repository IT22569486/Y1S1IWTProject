<?php
	include_once'configPet.php';
?>
<?php

	if($_GET["Submit1"]){
		
		$Event_id=$_GET["field0"];
		$Event_name=$_GET["field1"];
		$Event_Des=$_GET["field2"];
		$Event_Date=$_GET["field3"];
		$Event_Time=$_GET["field4"];
		$Ticket_price=$_GET["field5"];
	
	
	
	$querry="update event set 
				Event_Name='$Event_name',
				Description='$Event_Des',
				Date='$Event_Date',
				Time='$Event_Time',
				Ticket_Price='$Ticket_price'
				where Event_ID=$Event_id";
	
		$data=mysqli_query($conn,$querry);
		
		if($data){
			echo"<script>alert('Record updated.')</script>";
		}
		else{
			echo "<script>alert('Error inupdate.')</script>";
		}
	}
	mysqli_close($conn);
?>