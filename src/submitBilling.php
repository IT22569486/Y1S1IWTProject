<?php
	include_once'configPet.php';
?>

<?php
	
	$fname= $_POST["info1"];
	$lname = $_POST["info2"];
	$mob = $_POST["info3"];
	$eml = $_POST["info4"];
	$add = $_POST["info5"];
    $cit = $_POST["info6"];
    $sat = $_POST["info7"];
    $zcode = $_POST["info8"];
	
	
$sql ="insert into billing_info(billing_id,f_name,l_name,mobile,email,address,city,state,zip_code) values
('','$fname','$lname','$mob','$eml','$add','$cit','$sat','$zcode')";

//execute the query
if(mysqli_query($conn,$sql)){
	
	echo "<script>alert('record inserted successfully')</script>";
	echo "<script>window.location.href = 'viewBillinginfo.php';</script>";
}
else{
	echo "<script>alert('error in insertion')</script>";
}
mysqli_close($conn);


?>