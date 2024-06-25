
<!DOCTYPE html>	
<html>
<head>
	<title>Online Pet Care System</title>
	<link rel="stylesheet" href="noticeBoard.css">
	<script src="petcareJS.js"></script>


</head>
<body>


<h1 align="right">PetsStop</h1><br>
<form class="form1" action="submitRegistration.php" method="POST" onsubmit="return checkPassword()">
	First Name<br></br>
	<input type="text" name="firstName" placeholder="First Name" required><br></br>
	
	Last Name<br></br>
	<input type="text" name="lastName" placeholder="Last Name" required><br></br>
	
	Gender<br></br>
	Male<input type="radio" name="Gender" value="male"checked>
	
	Female<input type="radio" name="Gender" value="female"><br></br>
	
	Mobile Number<br></br>
	<input type="phone" name="phoneNumber" placeholder="phoneNo" pattern="[0-9]{10}" required><br></br>
	
	E-mail Address<br></br>
	<input type="e-mail" name="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br></br>
	
	Address<br></br>
	<textarea name="address" rows="4" cols="50"></textarea><br></br>
	
	DOB<br></br>
		<select name="Choose a dat">
			
			<option value="1">1</option>
			<option value="Choose a date" selected>Choose a date</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
		<select name="mnth" value="Month">
			<option value="Choose a Month" selected>Choose a month</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<select name="yr" value="Year">
			<option value="Choose a Year" selected>Choose a year</option>
			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
		</select><br></br>
			
		
	Password
	<input type="password" name="pwd" id="pwdf" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br></br>
	
	Re-enter password
	<input type="password" name="pwdre" id="pwdl" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br></br>
	
	<input type="checkbox"id="checkbox1" class="inputStyle" onclick="enableButton()">Accept privacy policy and terms.<br></br>
	
	<input type="submit"id="submit1" value="Submit" disabled><br></br>
	</form>

</body>
</html>