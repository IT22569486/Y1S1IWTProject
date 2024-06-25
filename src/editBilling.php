<?php
	include_once 'configPet.php';
?>

<?php
//index.php values are taken to this page
	
	$bid = $_GET["id"];
	$bfname = $_GET["fname"];
	$blname = $_GET["lname"];
	$bmob = $_GET["mob"];
    $beml = $_GET["eml"];
    $badd = $_GET["add"];
    $bcit = $_GET["cit"];
    $bstat = $_GET["stat"];
	$bzip = $_GET["zip"];


?>
<!DOCTYPE html>

<html>
<head>
    <title>Update Billing Info</title>
 
</head>
<body>

<style>
    body{
	background-image:url('billi.jpg');
	margin:0;
	padding:0;
    background-size:cover;

}
.header {
	background: linear-gradient(#3d251e, #80471C);
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	border-bottom-left-radius: 60px;
	padding: 10px 10px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	transition: 0.6s;
	z-index: 100000;
}

.header.sticky {
	padding: 5px 100px;
	background: #000;
}

.header.sticky .logo,
.header.sticky ul li a {
	color: white;
}

.header .navbar {
	display: flex;
	align-items: center;
}

.header .navbar .logo {
	font-size: 36px;
	font-weight: bold;
	color: white;
	margin-right: 20px;
}

.header .navbar ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	display: flex;
}

.header .navbar ul li {
	margin-left: 15px;
	font-size: 20px;
}

.header .navbar ul li a {
	display: block;
	color: white;
	text-decoration: none;
	font-family: Arial;
	font-weight: bold;
	padding: 10px;
	transition: 0.6s;
	text-align: center;
}


.form{

	background-color:rgba(0,0,0,0.4);
	width:40%;
	padding: 10px;
	font-size:17px;
	border-radius:10px;
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#fff;
	margin:40px;
	
	

}


label{

    font-family: sans-serif;
    font-style: big;
    font-size:17px;
	

}

input#id,#fname,#lname,#mobi,#emai,#addr,#city,#state,#zipc{

	width:350px;
	border:1px solid;
	border-radius:3px;
	outline:0;
	padding:7px;
	

}

input#submit{

	width:100px;
	padding:5px;
	font-size:16px;
	border-radius:3px;
	background-color:rgba(255,50,0,0.8); 
	color:#fff;
	cursor:pointer;
	border:1px solid rgba(255,255,255,0.3);
	box-shadow:1px 1px 5px rgba(0,0,0,0.3);
}



#submit:hover {

	background-color:rgba(50, 106, 230, 1);

}
</style>

<br>
<center>
<h1>Update Billing Details</h1>
</center>
<center>
	
	<form action ="submitBillupdate.php" method="GET" name ="form3" class = "form">
	
	
	
		<label>Billing ID</label><br><br>
		<input type = "text"  name = "dat0" id="id" value ="<?php echo "$bid"?>" readonly><br><br>
	
		<label>First Name</label><br><br>
		<input type = "text"  name = "dat1" id="fname" value ="<?php echo "$bfname"?>" required><br><br>
	
        <label>Last Name</label><br><br>
		<input type = "text"  name = "dat2" id="lname" value ="<?php echo "$blname"?>" required><br><br>

        <label>Mobile Number</label><br><br>
		<input type = "phone"  name = "dat3" id="mobi" pattern="[0-9]{10}" value ="<?php echo "$bmob"?>" required><br><br>

        <label>Email</label><br><br>
		<input type = "email"  name = "dat4" id="emai" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value ="<?php echo "$beml"?>" required><br><br>
        
        <label>Address</label><br><br>
		<input type = "text"  name = "dat5" id="addr" value ="<?php echo "$badd"?>" required><br><br>

        <label>City</label><br><br>
		<input type = "text"  name = "dat6" id="city" value ="<?php echo "$bcit"?>" required><br><br>
	
        <label>State</label><br><br>
		<input type = "text" name = "dat7" id="state" value ="<?php echo "$bstat"?>" required><br><br>

        <label>Zip Code</label><br><br>
		<input type = "text" name = "dat8" id="zipc" value ="<?php echo "$bzip"?>"><br><br>
		I accept terms & conditions <input type="checkbox" id="checkboxSt"  onclick="enableSubmitAddtoStore()"><br><br>
	    <input type= "submit" value = "Update" name = "submit" id ="submit" disabled></td>
	
	</form>
	</center>
	<script>
	function enableSubmitAddtoStore(){
    if(document.getElementById("checkboxSt").checked){
        document.getElementById("submit").disabled=false;
    }
    else{
        document.getElementById("submit").disabled=true;
    }
	}
    </script>
</body>
</html>