<?php
	include_once("configPet.php")
?>
<?php
session_start();
	if(!isset($_SESSION['E_Mail']))
	{
		header("location:loginmy.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
	<title>Online Pet Care System</title>
	<link rel="stylesheet" href="noticeBoard.css">

	<script src="https://kit.fontawesome.com/95b76a116d.js" crossorigin="anonymous"></script>

</head>
<body>
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
	
<br><br><br><br><br><br><br><br>

<br><br>

<div class="main">

<div class="colm">
<h3>Upcomming Events</h3>
<button><a href="addEvent.html">Add Event</a></button>
 <?php
			$sql="select*from event
			where Date> CURDATE()";
			$result=$conn->query($sql);
			
			if($result->num_rows>0)
			{	
				while($row=$result->fetch_assoc())
				{
					echo "<fieldset><center><h4>".$row["Event_Name"]."</h4><cenetr><br><br>";
					echo "Event ID:".$row["Event_ID"]."<br><br>Event Name:".$row["Event_Name"]."<br><br>Description:".$row["Description"]."<br><br>Date:"
					.$row["Date"]."<br><br>Time:".$row["Time"]."<br><br>Ticket Price:".$row["Ticket_Price"];
				
					echo "</fieldset>";
					echo "<center><a href='EditEvent.php?EventID={$row['Event_ID']}&EventName={$row['Event_Name']}&Descript={$row['Description']}&Date={$row['Date']}&Time={$row['Time']}&TicketPrice={$row['Ticket_Price']}'><input type='button' class ='button' value='Edit'></a>";
					echo "<a href='DeleteEvent.php?EventID=" . $row['Event_ID'] . "'><input type='submit'  class ='button' value='Delete'></a></center>";
					}
			}
			
			else
			{
				echo "Empty Rows.";
			}
		?>
	
<br>

</div>

<div class="colm">

<h3>Advertisements</h3>
<button><a href="AddAdvertisement.html">Add Advertisement</a></button>
 <?php
			$sql2="select*from advertisement";
			$result=$conn->query($sql2);
			
			if($result->num_rows>0)
			{	
				while($row=$result->fetch_assoc())
				{
					
					echo "<fieldset style='font-color:white;'><center><h4>".$row["Item_name"]." for sale</h4><cenetr><br><br>";
					echo "Item ID:".$row["Item_ID"]."<br><br>Item Name:".$row["Item_name"]."<br><br>Description:".$row["Description"]."<br><br>Unit Pice:"
					.$row["Unit_Price"]."<br><br>Contact:".$row["Contacts"]."<br><br>";
				
					echo "</fieldset>";
					echo "<center><a href='EditAdvertisements.php?ItemID={$row['Item_ID']}&ItemName={$row['Item_name']}&Descript={$row['Description']}&UnitPrice={$row['Unit_Price']}&Contact={$row['Contacts']}'><input type='button'  class ='button'value='Edit'></a>          ";
					echo "<a href='DeleteAdvertisements.php?ItemID=" . $row['Item_ID'] . "'><input type='submit'  class ='button' value='Delete'></a></center>";
				}
			}
			else
			{
				echo "Empty Rows.";
				}
		?>
		
</script>
<br>

</div>
<div class="colm">
<h3>Notices</h3>
<button><a href="AddNotice.html">Add a Notce</a></button>

 <?php
			$sql="select*from notices";
			$result3=$conn->query($sql);
			if($result3->num_rows>0)
			{	
				while($row=$result3->fetch_assoc())
				{
					
					echo "<fieldset><center><h4>".$row["Notice_Topic"]."</h4><cenetr>";
					echo $row["Description"]."<br>";
				
					echo "</fieldset>";
					echo "<center><a href='EditNotice.php?NoticeID={$row['Notce_ID']}&NoticeTopic={$row['Notice_Topic']}&Descript={$row['Description']}'><input type='button'  class ='button' value='Edit'></a>          ";
					echo "<a href='DeleteNotice.php?NoticeID=" . $row['Notce_ID'] . "'><input type='submit'  class ='button' value='Delete'></a></center>";
				}
			}
		
			else
			{
				echo "Empty Rows.";
				}
				
				mysqli_close($conn);
		?>
	
<br>

</div>
</div>

<div>
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
	<h3>Links<div class="underline"><span></span></h3>
	<ul>
					<li><a href="Hompage.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="ContactUs.php">Contact Us</a></li>
					<li><a href="FAQS.php">FAQ</a></li>
					<li><a href="store.php">Store</a></li>
					<li><a href="NoticeBoard.php">Notices</a></li>
	</ul>
	</div>
	<div class="col">
	<h3>Newsletter<div class="underline"><span></span></h3>
	<form class= "end">
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
</div>
</div>



</body>
</html>