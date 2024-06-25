<?php
    include_once'configPet.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vet index</title>
    <link rel="stylesheet" href="vetindex.css">
	<script src="https://kit.fontawesome.com/95b76a116d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar">
        <div class="logo">PetsStop<br></div>
        <ul>
            <li><a href="adminHome.php">Home</a></li>
            <li><a href="#">Edit</a></li>
            <li><a href="addvet.html">Add vet</a></li>
        </ul>
    </div><br><br>
    <center>
    <table border = "1">
	<tr>
        <th>Vet_ID</th>
	    <th>First_name</th>
	    <th>Last_name</th>
	    <th>DOB</th>
		<th>Address</th>
		<th>Salary</th>
		<th>Specialization</th>
		<th>Email</th>
		<th>Edit</th>
        <th>Delete</th>
	</tr>
  
    <?php 
        $sql = "SELECT*from vet";
        $result=$conn->query($sql);

        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
               
               echo"<tr><td>".$row["V_ID"]."</td><td>".$row["First_name"]."</td><td>".$row["Last_name"]."</td><td>".$row["DOB"]."</td><td>".$row["Address"]."</td><td>".$row["Salary"]."</td><td>".$row["Specialization"]."</td><td>".$row["Email"]."</td>";
               echo "<td><a href='editrecord.php?id={$row['V_ID']}&fname={$row['First_name']}&lname={$row['Last_name']}&dob={$row['DOB']}&Addrs={$row['Address']}&Salc={$row['Salary']}&spec={$row['Specialization']}&email={$row['Email']}'><input type='submit' value='Edit'></a></td>";
               
               echo"<td><a href=deleteItems.php?id={$row['V_ID']}><input type = 'submit' value='Delete'></a></td></tr>";  
            }

        }
        else{
            echo "Empty Rows";


        }
        mysqli_close($conn);

    ?>
    </table>
    </center>
    
    <div class="foot">
    <footer>
            
        <div class="row">
        <div class="col">
        <img src="petlogo.png" class="logo">
        </div>
        <div class="col">
        <h3>Office<div class="underline"><span></span></div></h3>
        <p>No.458/3</p>
        <p>Gangarama road,Colombo-03</p>
        <p class="email">petsstopcare@gmail.com</p>
        <p>+94 077-4568238</p>
        <p>+94 011-2956758</p>
        </div>
        
        <div class="col">
        <h3>Newsletter<div class="underline"><span></span></h3>
        <form>
          <i class="fa-solid fa-envelope"></i>
          <input type="email" placeholder="Enter your email" required>
          <button type="submit"><i class="fas fa-arrow-right"></i></button>
        </form><br>
    
        <i class="fab fa-facebook-f fa-2x"></i>
        <i class="fab fa-instagram fa-2x"></i>
        <i class="fab fa-whatsapp fa-2x"></i>
        <i class="fab fa-twitter fa-2x"></i>
    
        </div>
        </div>
        <hr>
        <p class="copyright">Easy Tutorials © 2023 - All Rights Reserved</p>
    </footer>
    </div>
    
</body>
</html>