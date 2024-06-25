<?php
   include_once 'configPet.php';
session_start();
if(!isset($_SESSION['E_Mail']))
	{
		header("location:loginmy.php");
		
	}
?>
<!DOCTYPE html>

      <head><title>MyPetProfiles</title>
      	    <link rel = "stylesheet" href = "SeeCreatedPetProfilesCss.css">


      </head>
      <body>
	  	<nav>
		<div class="header">
			<div class="navbar">
				<div class="logo">PetsStop</div>
				<ul>
					<li><a href="Hompage.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="ContactUs.php">Contact Us</a></li>
					<li><a href="FAQS.php">FAQ</a></li>
					<li><a href="store.php">Store</a></li>
					<li><a href="NoticeBoard.php">Notices</a></li>
					<li><a href="SeeCreatedPetProfiles.php">My Pet Profiles</a></li>
				</ul>
			</div>
			
		</div>
	
	</nav>
	<script type="text/javascript">
		window.addEventListener("scroll", function() {
			var header = document.querySelector(".header");
			header.classList.toggle("sticky", window.scrollY > 0);
		});
	</script>
	<br><br><br><br>
      	  <div class = Table1>
          <table border = "2">

          	<tr id = "First">
          		<th>PetProfileID</th>
          		<th>Name</th>
          		<th>Species</th>
          		<th>Breed</th>
          		<th>Age</th>
          		<th>Gender</th>
          		<th>AllowcatedVet'sID</th>
          		<th>MoreInfo</th>
          		<th colspan = "2">Customize</th>
          	</tr>

    <?php
	
	$out = "SELECT * FROM petprofile";
	
    $result = mysqli_query($conn, $out);

	if($result -> num_rows > 0){
		
		while($Arrr = $result->fetch_assoc()){

			//use & to concatenate
			
			echo "<tr span style='color: yellow;'><td>".$Arrr["Pet_Profile_ID"]."</td><td>". $Arrr["Pet_Name"]."</td><td>".
			$Arrr["Species"] . "</td><td>" . $Arrr["Breed"] . "</td><td>" . $Arrr["Age"] . "</td><td>". $Arrr["Gender"]. "</td><td>"
			.$Arrr["Vet_ID"]."</td><td>" .$Arrr["M_Info"]."</td></span>";


           echo "<td><a href = 'EditPetProfiles.php?PetID={$Arrr['Pet_Profile_ID']}&PetName={$Arrr['Pet_Name']}&Species={$Arrr['Species']}&Breed={$Arrr['Breed']}&Age={$Arrr['Age']}&Gender={$Arrr['Gender']}&VetID={$Arrr['Vet_ID']}&MInfo={$Arrr['M_Info']}'>

               <input type = 'submit'value='Edit' id = 'bt1'></td></a>";

           echo "<td><a href='DeletePetProfiles.php?PetID={$Arrr["Pet_Profile_ID"]}'>                
           <input type='button' value='Delete' id = 'bt2'></a></td></tr>";

        }

	}else{
		
           echo '<br><span style="color: red; font-size:20px;">Zero PetProfiles. Enter your Pet\'s Details!<Br></span>';

	}
	
    mysqli_close($conn);
		
		
		
    ?>
	
	
	
	</table>
    </div>

	 <a href = "PetProfileRegisterForm.html" ><button id = "bt3" style = "width:150px;">Enter more</button></a>

    </body>

</html>
