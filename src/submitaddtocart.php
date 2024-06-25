<?php
	include_once("configPet.php")
?>
<?php
	
	$type = $_POST["txt1"];
	$code = $_POST["txt2"];
	$name = $_POST["txt3"];
	$qty = $_POST["txt4"];
	$spec = $_POST["txt5"];
	
	
$sql ="insert into 
cart_item(product_id, product_type,product_code,product_name, quantity,specifications)values 
('','$type','$code','$name','$qty','$spec')";

//execute the query
if(mysqli_query($conn,$sql)){
	
	echo "<script>alert('record inserted successfully')</script>";
	echo "<script>window.location.href = 'storeView.php';</script>";
}
else{
	echo "<script>alert('error in insertion')</script>";
}
mysqli_close($conn);


?>