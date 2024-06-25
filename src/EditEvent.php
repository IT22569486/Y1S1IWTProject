<?php
include_Once("configPet.php")
?>
<?php
	$Event_id =$_GET["EventID"];
	$Event_name=$_GET["EventName"];
	$Event_Des=$_GET["Descript"];
	$Event_Date=$_GET["Date"];
	$Event_Time=$_GET["Time"];
	$Ticket_price=$_GET["TicketPrice"];
?>
<!DOCTYPE html>
<html>
<head>
		<title>Online Pet Care System</title>
	<link rel="stylesheet" href="noticeBoard.css">
	<script src="petcareJS.js"></script>
	
	

</head>
	<body>
	<h1 align="right">PetsStop<h1><br><br>
	<center>
	<div>
		<form class="form1" action="SubmitUpdateEvent.php" method="get" name="form2">
		
		<center>
		<h4>Edit Event details</h4>
		<table border="0" width="25%">
			<tr>
				<td>Event Id</td>
				<td><input type="text" value="<?php echo "$Event_id"?>" name="field0" readonly></td>
			</tr>
			<tr>
				<td>Event Name</td>
				<td><input type="text" value="<?php echo "$Event_name"?>"name="field1" ></td>
			</tr>
			<tr>
				<td>Event Description</td>
				<td><textarea name="field2" ><?php echo "$Event_Des"?></textarea></td>
			</tr>
			<tr>
				<td>Date</td>
				<td><input type="text" value="<?php echo "$Event_Date"?>"name="field3" ></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type="text"value="<?php echo "$Event_Time"?>"name="field4" ></td>
			</tr>
			<tr>
				<td>Ticket Price</td>
				<td><input type="text" value="<?php echo "$Ticket_price"?>"name="field5" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update" name="Submit1" ></td>
			</tr>
		</table>
		</center>
		</form>
	</div>
	
</body>
</html>