<?php
  include 'configPet.php';
  
?>


<!Doctype html>

<head>
    <link rel = stylesheet href = "viewBillinginfo.css">

    <title>Billing Details</title>
</head>
<body>

<style>
h1{
	
	text-align: Center;
	margin:0;
	font-size:2.6em;
	color:#4c3228;
	font-family:Times new roman;
	}
#btn-primary{

	width:80px;
	background-color:rgba(12, 201, 112, 0.4);
	border-color: black;
	padding:.20em;
	border-radius:.3em;
	font-weight:bold;
	font-size:1.1em;
	color:rgb(14, 14, 102);
	cursor:pointer;
}

#btn-primary:hover{
	background-color:#2D9CDB;
}

#del{
	width:80px;
	background-color:#E85757;
	border-color: black;
	padding:.20em;
	border-radius:.3em;
	font-weight:bold;
	font-size:1.1em;
	color:rgb(14, 14, 102);
	cursor:pointer;
	
}
#del:hover{
	background-color:#2D9CDB;
}

</style>


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
        <center>
		     <h1>Billing Details</h1>
             
        </center>

    <hr width = "100%" height = "20px">

    <center>
    <div class="productData" style="border-style: groove; border-color: DarkBlue;">
    <table border="1" width="100%">
    <tr>
        <th class="coll">Billing ID</th>
        <th class="coll">First Name </th>
		<th class="coll">Last Name</th>
		<th class="coll">Mobile No</th>
		<th class="coll">Email</th>
		<th class="coll">Address</th>
        <th class="coll">City</th>
        <th class="coll">State</th>
        <th class="coll">Zip Code</th>
        <th class="coll">Edit</th>
        <th class="coll">Delete</th>
	
   
	</tr>
	<?php
	
	$sql = "select*from billing_info";
	$result = $conn->query($sql);
	
	if ($result -> num_rows>0) {
		
		while($row = $result-> fetch_assoc())
        {
			
		echo"<tr><td>".$row["billing_id"]."</td>
		<td>".$row["f_name"]."</td>
		<td>".$row["l_name"]."</td>
		<td>".$row["mobile"]."</td>
		<td>".$row["email"]."</td>
        <td>".$row["address"]."</td>
        <td>".$row["city"]."</td>
        <td>".$row["state"]."</td>
		<td>".$row["zip_code"]."</td>";
        
		
        echo "<td><a href='editBilling.php?id={$row['billing_id']}&fname={$row['f_name']}&lname={$row['l_name']}&mob={$row['mobile']}&eml={$row['email']}&add={$row['address']}&cit={$row['city']}&stat={$row['state']}&zip={$row['zip_code']}'><input type='button' value='Edit' id='btn-primary'></a></td>";

        echo "<td><a href = deletebilling.php?id={$row['billing_id']}><input type = 'submit' value = 'Delete' id ='del'></td></a></tr>";
    }
	}else{
			
		echo "Empty Rows";
		}
	
	echo"</table>";
	mysqli_close($conn);

	
	?>
	
	
	</table>
    
	
	

</body>
</html>