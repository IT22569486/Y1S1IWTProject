<?php
  include 'configPet.php';
  
?>


<!Doctype html>

<head>
    <link rel = stylesheet href = "storeView.css">

    <title> My Cart</title>
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

#btn-main{
	
	background-color:#4e2d20;
	border-color: black;
	padding:.40em;
	border-radius:.3em;
	font-weight:bold;
	font-size:1.1em;
	color:#fff;
	cursor:pointer;
	display:block;
	margin:40px auto 80px auto;
	font-size:1.6em;
}

#btn-link{

	width:150px;
	background-color:rgba(0,0,0,0.4);;
	border-color: black;
	padding:.20em;
	border-radius:.3em;
	font-weight:bold;
	font-size:1.1em;
	color:rgb(14, 14, 102);
	cursor:pointer;
	margin-left:1200px;
	margin-top:100px;
}
</style>


    <<body>
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
	<br><br><br><br><br>
    
        <center>
		     <h1>Shopping cart</h1>
             
        </center>

    <hr width = "100%" height = "20px">

    <center>
    <div class="productData tbl" style="border-style: groove; border-color: DarkBlue;">
    <table border="1" width="100%">
    <tr>
        <th class="coll">Product ID  </th>
        <th class="coll">Product Type  </th>
		<th class="coll">Product Code</th>
		<th class="coll">Product Name</th>
		<th class="coll">Quantity</th>
		<th class="coll">Specifications</th>
        <th class="coll">Edit</th>
        <th class="coll">Delete</th>
	
   
	</tr>
	<?php
	
	$sql = "select*from cart_item";
	$result = $conn->query($sql);
	
	if ($result -> num_rows>0) {
		
		while($row = $result-> fetch_assoc())
        {
			
		echo"<tr><td>".$row["product_id"]."</td>
		<td>".$row["product_type"]."</td>
		<td>".$row["product_code"]."</td>
		<td>".$row["product_name"]."</td>
		<td>".$row["quantity"]."</td>
		<td>".$row["specifications"]."</td>";
		
        echo "<td><a href='editCart.php?ID={$row['product_id']}&type={$row['product_type']}&code={$row['product_code']}&name={$row['product_name']}&qty={$row['quantity']}&speci={$row['specifications']}'><input type='button' value='Edit' id= 'btn-primary'></a></td>";

        echo "<td><a href = deleteCartitem.php?ID={$row['product_id']}><input type = 'submit' value = 'Delete' id = 'del'></td></a></tr>";
    }
	}else{
			
		echo "Empty Rows";
		}
	
	echo"</table>";
	mysqli_close($conn);

	
	?>
	
	
	</table>
	</div>
	
	<div>
	<a href= 'billing.html'><button id='btn-main' type='button'>Confirm Order</button></a>
		
	</div>

	<a href= 'storeform.html'><button id='btn-link' type='button'>ADD ITEMS</button></a>
		
	</div>


</body>
</html>