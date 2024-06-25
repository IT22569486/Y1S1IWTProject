<?php
	include_once 'configPet.php';
?>
<?php

	if($_GET['submit']){
		
		$b_id = $_GET["dat0"];
		$b_fname = $_GET["dat1"];
		$b_lname = $_GET["dat2"];
		$b_mob = $_GET["dat3"];
		$b_emil = $_GET["dat4"];
        $b_add = $_GET["dat5"];
        $b_cit = $_GET["dat6"];
        $b_stat = $_GET["dat7"];
		$b_zip = $_GET["dat8"];
		
		$query =   "UPDATE billing_info SET 
					f_name ='$b_fname',
					l_name ='$b_lname',
					mobile ='$b_mob',
					email='$b_emil',
                    address ='$b_add',
                    city ='$b_cit',
                    state ='$b_stat',
					zip_code='$b_zip' WHERE billing_id = '$b_id'";
					
		$data2 = mysqli_query($conn,$query);
		
		if($data2){
			echo "<script>alert('Record Updated!!')</script>";
          
			echo "<script>window.location.href = 'viewBillinginfo.php';</script>";
		}else{
			echo "<script>alert('Error in Update!!')</script>";
         
		}
		
	}
	mysqli_close($conn);

?>
