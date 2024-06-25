<?php
	include_once 'configPet.php';
?>
<?php

	if($_GET['submit']){
		
		$p_id = $_GET["txt0"];
		$p_type = $_GET["txt1"];
		$p_code = $_GET["txt2"];
		$p_name = $_GET["txt3"];
		$quanti = $_GET["txt4"];
		$specfi = $_GET["txt5"];
		
		$sql = 	    "UPDATE cart_item SET 
					product_type ='$p_type',
					product_code ='$p_code',
					product_name='$p_name',
					quantity='$quanti',
					specifications='$specfi' WHERE product_id = '$p_id'";
					
		$data = mysqli_query($conn,$sql);
		
		if($data){
			echo "<script>alert('Record Updated!!')</script>";
echo "<script>window.location.href = 'storeView.php';</script>";
			
		}else{
			echo "<script>alert('Error in Update!!')</script>";

		}
		
	}
	mysqli_close($conn);

?>
