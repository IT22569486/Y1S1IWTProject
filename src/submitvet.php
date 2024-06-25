<?php

include_once 'configPet.php';

?>

<?php

$vid=$_POST['vid'];
$fname = $_POST['vfname'];
$lname = $_POST['vlname'];
$dob = $_POST['dob'];
$address = $_POST['addrs'];
$salary = $_POST['sal'];
$spec = $_POST['spec'];
$email = $_POST['mail'];


 
//maken sure to input table names samorder in database table


$sql = "INSERT INTO vet(V_ID, First_name ,Last_name ,DOB , Address ,Salary,Specialization,Email	) VALUES('$vid','$fname','$lname','$dob','$address','$salary','$spec','$email')";


if(mysqli_query($conn,$sql)){
	
	echo "<script>alert('Record saved succesfully')</script>";
	header("location:vetindex.php" );
	
}else{
	
	echo "<script>alert('Record saved unsuccesfully!')</script>";
}



mysqli_close($conn);

?>