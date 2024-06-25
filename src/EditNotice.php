<?php
include_Once("configPet.php")
?>
<?php
	$Notice_id =$_GET["NoticeID"];
	$Notice_name=$_GET['NoticeTopic'];
	$Notice_Des=$_GET['Descript'];
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
		<form class="form1" action="SubmitUpdateNotice.php" method="get" name="form2">
		<center>
		<h4>Edit Notice</h4>
		<table border="0" width="25%">
			<tr>
				<td>Notice Id</td>
				<td><input type="text" value="<?php echo "$Notice_id"?>" name="field0" readonly></td>
			</tr>
			<tr>
				<td>Notice Name</td>
				<td><input type="text" value="<?php echo "$Notice_name"?>"name="field1" ></td>
			</tr>
			<tr>
				<td>Notice Description</td>
				<td><textarea name="field2" value="<?php echo "$Notice_Des"?>"></textarea></td>
			</tr>
			<tr>
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