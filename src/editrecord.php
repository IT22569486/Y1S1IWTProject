<?php
    include_once'configPet.php';
?>
<?php
    $Vet_ID=$_GET['id'];
    $Firest_name=$_GET['fname'];
    $Last_name=$_GET['lname'];
    $DOB=$_GET['dob'];
    $Address=$_GET['Addrs'];
    $Salary=$_GET['Salc'];
    $Specialization=$_GET['spec'];
    $Email=$_GET['email'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add vet</title>
</head>
<body>

<style>

body {
    background-image: url('pexels-peng-louis-1643456.jpg');
    font-family: Verdana, sans-serif;
	margin:0;
	padding:0;
    background-size:cover;
    
    
}

.vdform form {
    background-color:rgba(0,0,0,0.4);
	width:40%;
	padding: 10px;
	font-size:17px;
	border-radius:10px;
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	margin-top:150px;
	
}
.date{
    color: aliceblue;
}
      
.vdform form input,textarea {
      
      background: transparent;
      margin-right: 30px;
      color: #ffffff;
      margin-right 20px;
      font-size: 20px;
}

</style>

    <div class = "vdform">
    <center><form action="submitVetUpdate.php" method="GET" name="form2">
        <table border="1" >
            <tr>
                <td>Vet ID</td>
                <td><input type="text" name="field0"value="<?php echo "$Vet_ID"?>" readonly></td>
            </tr>
            <tr>
                <td>First name</td>
                <td><input type="text" name="field1" value="<?php echo "$Firest_name"?>"></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td><input type="text" name="field2" value="<?php echo "$Last_name"?>"></td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="date" name="field3"value="<?php echo "$DOB"?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="field4" ><?php echo "$Address"?></textarea></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="number" name="field5" value="<?php echo "$Salary"?>"></td>
            </tr>
            <tr>
                <td>Specialization</td>
                <td><textarea name="field6" ><?php echo "$Specialization"?>"</textarea></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="field7" value="<?php echo "$Email"?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="update" ></td>
            </tr>
        </table>
    </form>
	</center>
    </div>
</body>
</html>