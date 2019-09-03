
<?php
include("connect.php");

//Get employees
//$get_emp = $conn->prepare("SELECT id, fname,lname FROM employees ORDER BY fname ASC");
//$get_emp->execute();
//$rows = $get_temp->fetchAll(PDO::FETCH_ASSOC);

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
<p><h2>Register Brands</h2></p>
	<body class="body">
		<div id="content">		
		<div id="form_section">
<table>
  <tr>
    <td>Quantity:</td>
    <td><input  name="quantity"  type="text"/></td>
  </tr>
  
  <tr>
  <td>Brand ID</td>
  <td><select name="brand_id">
   <option value="1"> 1 </option>
   <option value="2"> 2 </option>
   <option value="3"> 3 </option>
   <option value="4"> 4 </option>
   <option value="5"> 5 </option>
   <option value="6"> 6 </option>
   <option value="7"> 7 </option>
   <option value="8"> 8 </option>
   <option value="9"> 9 </option>
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