<?php
	include_once("configPet.php")
?>

<?php

$email=$_POST["email"];
$sql0="select * from registration where  Email='".$email."';";
$result=$conn->query($sql0);

if($result->num_rows>0){
	echo "<script>alert('Your email already registered');</script>";
	
}

else{
$fname = $_POST["firstName"];
$lname=$_POST["lastName"];
$DOB=$_POST["DOB"];
$Mobile=$_POST["phoneNumber"];

$Address=$_POST["address"];
$Password=$_POST["pwd"];


$sql ="insert into registration(RegID,Fisrst_Name,Last_name,DOB,Mobile,Email,Address,Password)values
('','$fname','$lname','$DOB','$Mobile','$email','$Address','$Password')";


if(mysqli_query($conn,$sql)){
	
	header("location:loginmy.php");
	echo "<script>alert('record inserted succesfully');</script>";
	
}
else{
	echo "<script>alert('error in insertion')</script>";
}
mysqli_close($conn);
}
?>