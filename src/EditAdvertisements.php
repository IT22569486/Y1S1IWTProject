<?php
include_Once("configPet.php")
?>
<?php
	$Item_id =$_GET['ItemID'];
	$Item_name=$_GET['ItemName'];
	$Item_Des=$_GET['Descript'];
	$Unit_pric=$_GET['UnitPrice'];
	$Contact=$_GET['Contact'];
?>
<!DOCTYPE html>
<html>
<head>
		<title>Online Pet Care System</title>
	<link rel="stylesheet" href="noticeBoard.css">
	<script src="petcareJS.js"></script>
	
	

</head>
<body>
<h1 align="right">PetsStop</h1><br>
<center>
	<div>
		<form class="form1" action="SubmitUpdateAdvertisements.php" method="get" name="form2">
		<center>
		<h4>Edit Advertisement details</h4>
		<table border="0" width="25%">
			<tr>
				<td>Item Id</td>
				<td><input type="text" value="<?php echo "$Item_id"?>" name="field0" readonly></td>
			</tr>
			<tr>
				<td>Item Name</td>
				<td><input type="text" value="<?php echo "$Item_name"?>"name="field1" ></td>
			</tr>
			<tr>
				<td>Item Description</td>
				<td><textarea name="field2" value="<?php echo "$Item_Des"?>"></textarea></td>
			</tr>
			<tr>
				<td>Unit Price</td>
				<td><input type="text" value="<?php echo "$Unit_pric"?>"name="field3" ></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text"value="<?php echo "$Contact"?>" name="field4" ></td>
			</tr>
				<td></td>
				<td><input type="submit" value="Update" name="Submit1" ></td>
			</tr>
		</table>
		</center>
		</form>
	</div>
	</center>
	
</body>
</html>