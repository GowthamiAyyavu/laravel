<?php
//include("include/db.php");
$connection = mysqli_connect("localhost","root","","newproject");
//$db = mysqli_select_db();
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
if(isset($_POST['submit']))
{
	$sector = $_POST['sector'];
	$course = $_POST['course'];
	$state = $_POST['state'];
	$district = $_POST['district'];
	$project = $_POST['project'];
	$financial_year = $_POST['financial_year'];
	$s_name = $_POST['s_name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$s_date = $_POST['s_date'];
	$e_date = $_POST['e_date'];
	
	$sql = "INSERT INTO student_details (sector,course,state,district,project,financial_year,s_name,email,mobile,address,pincode,s_date,e_date) VALUES ('$sector','$course','$state','$district','$project','$financial_year','$s_name','$email','$mobile','$address','$pincode','$s_date','$e_date')";
	//echo $sql;
	$query = mysqli_query($connection,$sql);
	//$result = $connection->query($sql);
	if($query){
		echo "success";
		header('Location: index.php');
	}
}
?>
<script language="Javascript" src="js/jquery.js"></script>
<script type="text/JavaScript" src='js/state.js'></script>
<script type="text/JavaScript" src='js/validation.js'></script>

<form class="" id="" name="form" method="post" action="">
	<h3 class="heading-helper heading-helper--large heading-helper--left editContent"> Enter the below details:</h3>
	<div>
		<span id="error" style="color:red"></span>
	</div>
	<label> Sector Name *</label>
	<select class="sector" name="sector">
		<option value>--please select</option>
		<option value="example">example</option>
	</select></br></br>
	<label> Course Name *</label>
	<select class="course" name="course">
		<option value>--please select--</option>
		<option value="example1">example1</option>
	</select></br></br>
	
	<div id="selection">
		<label> State *</label>
        <select class="state" name="state" id="listBox" onchange='selct_district(this.value)'>
			<option value>--please select--</option>
		</select></br></br>
        <label> District *</label>
		<select class="district" name="district" id='secondlist'>
			<option value>--please select--</option>
		</select>
      </div></br>
	  
    <label> Project *</label>
    <select class="project" name="project">
		<option value>--please select--</option>
		<option value="project1">project1</option>
		<option value="project2">project2</option>
	</select></br></br>
	<label> Financial Year *</label>
    <select class="financial_year" name="financial_year">
		<option value>--please select--</option>
		<option value="2010-2011">2010-2011</option>
		<option value="2011-2012">2011-2012</option>
		<option value="2012-2013">2012-2013</option>
		<option value="2013-2014">2013-2014</option>
		<option value="2014-2015">2014-2015</option>
	</select></br></br>
	<label> Name *</label>
	<input class="s_name" type="text" name="s_name" placeholder="Name"></br></br>
	<label> Email *</label>
	<input class="email" name="email" type="email" placeholder="Email"></br></br>
	<label> Mobile *</label>
	<input class="mobile" name="mobile" type="tel" placeholder="Mobile"></br></br>
	<label> Address </label>
	<textarea class="" name="address" placeholder="Address"></textarea></br></br>
	<label> Pincode </label>
	<input class="" name="pincode" type="tel" placeholder="Pincode"></br></br>
	<label> Start Date *</label>
	<input class="s_date" name="s_date" type="date" placeholder="Start Date"></br></br>
	<label> End Date *</label>
	<input class="e_date" name="e_date" type="date" placeholder="End Date"></br></br>
	
	<input class="btn btn--decorated btn-warning btn-submit" id="student_form" name="submit" type="submit"></button>
</form>
