<?php
require_once("dbcontroller.php");
include("connect.php");
if(isset($_POST["ok"]))
{
	$uname=$_POST["name"];
	$country=$_POST["country"];
	$state=$_POST["state"];
	$district=$_POST["district"];
	$sql1="INSERT INTO tbl_user(name,country,state,district) VALUES ('$uname','$country','$state','$district')";
	$result1=mysqli_query($con,$sql1);
}
	
$db_handle = new DBController();
$query ="SELECT * FROM tbl_country";
$results = $db_handle->runQuery($query);
?>
<html>
<head>

<head>
<style>


.demoInputBox {padding: 10px;border: #bdbdbd 1px solid;border-radius: 4px;background-color: #FFF;width: 20%;}

</style>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getState.php",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
		getCity();
	}
	});
}


function getDistrict(val) {
	$.ajax({
	type: "POST",
	url: "getDistrict.php",
	data:'state_id='+val,
	success: function(data){
		$("#city-list").html(data);
	}
	});
}

</script>
</head>
<body>
<form action="#" method="post">
<div class="frmDronpDown">
<div class="row">
<label>Name:</label></br>
<input type="text" name="name" size=20 /></br>
<label>Country:</label><br/>
<select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);">
<option value disabled selected>Select Country</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["cid"]; ?>"><?php echo $country["cname"]; ?></option>
<?php
}
?>
</select>
</div>
<div class="row">
<label>State:</label><br/>
<select name="state" id="state-list" class="demoInputBox" onChange="getDistrict(this.value);">
<option value="">Select State</option>
</select>
</div>
<div class="row">
<label>District:</label><br/>
<select name="district" id="city-list" class="demoInputBox">
<option value="">Select City</option>
</select></br>
<input type="submit" name="ok" value="ok" /></br>
</div>
</div>
</form>
</body>
</html>