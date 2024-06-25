<?php
	include_once 'configPet.php';
?>

<?php
//index.php values are taken to this page
	
	$Pid = $_GET["ID"];
	$Ptype = $_GET["type"];
	$Pcode = $_GET["code"];
	$Pname = $_GET["name"];
	$quanti = $_GET["qty"];
	$spec = $_GET["speci"];


?>
<!DOCTYPE html>

<html>
<head>
    <title>Update Cart</title>
	
</head>
<body>



<style>
    body{
	background-image:url('market.webp');
	margin:0;
	padding:0;
    background-size:cover;

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

input#id,#type,#code,#name,#qty{

	width:350px;
	border:1px solid;
	border-radius:3px;
	outline:0;
	padding:7px;
	

}

#spec{
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
<center>
<h1>Update Cart Details</h1>
</center>
<center>
	
	<form action ="submitupdate.php" method="GET" name ="form2" class = "form">
	
	
	
		<label>Product Id</label><br><br>
		<input type = "text"  name = "txt0" id="id" value ="<?php echo "$Pid"?>" readonly><br><br>
	
    
		<label>Product Type</label><br><br>
		<input type = "text"  name = "txt1" id="type" value ="<?php echo "$Ptype"?>"><br><br>
	
	
        <label>Product Code</label><br><br>
		<input type = "text"  name = "txt2" id="code" value ="<?php echo "$Pcode"?>"><br><br>
	
        <label>Product Name</label><br><br>
		<input type = "text"  name = "txt3" id="name" value ="<?php echo "$Pname"?>"><br><br>
	
        <label>Quantity</label><br><br>
		<input type = "text" name = "txt4" id="qty" value ="<?php echo "$quanti"?>"><br><br>
	
        <label>Specifications</label><br><br>
		<textarea  cols= "21" id="spec" name="txt5" ><?php echo "$spec"?></textarea><br><br>
		I accept terms & conditions <input type="checkbox" id="checkboxSt"  onclick="enableSubmitAddtoStore()"><br><br>
	    <input type= "submit" value = "Update" name = "submit" id ="submit" disabled ></td>
	
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