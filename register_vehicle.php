
<?php 
include("connect.php");

//Get employees
$get_emp = $conn->prepare("SELECT id,fname,lname FROM employees ORDER BY fname ASC");
$get_emp->execute();
$rows = $get_temp->fetchAll(PDO::FETCH_ASSOC);

?>
<style>
.body{
	background:#C70039;
	color:#ffffff;
	
}
#content{
	background:#581845;
	color:#ffffff;
	padding: 10px;
	margin:10px;
	border: 2px solid #DAF7A6;
}

</style>
<html>
	<head>
	<title>XYZ Welcome</title>
	</head>
<p><h2>Add New Vehicle</h2></p>
	<body class="body">
		<div id="content">		
		<div id="form_section">
<table>
  <tr>
    <td>Number plate:</td>
    <td><input  name="no_plate"  type="text"/></td>
  </tr>
  <tr>
    <td>Model:</td>
    <td><input  name="model"  type="text"/></td>
  </tr>
  <tr>
    <td>Year of Purchase:</td>
    <td><input  name="yop"  type="text"/></td>
  </tr>
  <tr>
    <td>Vehicle Cost:</td>
    <td><input  name="vehicle_cost"  type="text"/></td>
  </tr>
  <tr>
  <td>Employment Number</td>
  <td><select name="emp_id">
   <option value="1"> 1 </option>
   <option value="2"> 2 </option>
   <option value="3"> 3 </option>
   <option value="4"> 4 </option>
   <option value="5"> 5 </option>
   <option value="6"> 6 </option>
   <option value="7"> 7 </option>
   <option value="8"> 8 </option>
   <option value="9"> 9 </option>
   <option value="10"> 10 </option>
   <option value="11"> 11 </option>
   <option value="12"> 12 </option>
   <option value="13"> 13 </option>
   </select> </td>
  </tr>
  <tr>
  <td></td>
   <td><input type="submit" name="save" value="Save"></td>
  </tr>
</table>


    </div>
		
		<div>&copy </div>
		</div>

	</body>

</html>