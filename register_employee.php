<?php
include"connect.php";

//Get employees
$get_emp = $conn->prepare("SELECT id, fname,lname FROM employees ORDER BY fname ASC");
$get_emp->execute();
$rows = $get_temp->fetchAll(PDO::FETCH_ASSOC);

?>


<style>
.body{
	background:#F95B39;
	color:#ffffff;
	
}
#content{
	background:#C70039;
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
<p><h2>Welcome to Our Platform</h2></p>
	<body class="body">
		<div id="content">		
		<div id="form_section">

			
<table>
  <tr>
    <td>Employee No:</td>
    <td><input  name="empno"  type="text"/></td>
  </tr>
  <tr>
    <td>First Name:</td>
    <td><input  name="fname"  type="text"/></td>
  </tr>
  <tr>
    <td>Last  Name:</td>
    <td><input  name="lname"  type="text"/></td>
  </tr>
  <tr>
    <td>Salary:</td>
    <td><input  name="salary"  type="text"/></td>
  </tr>
  <tr>
  <td> Employment Date:</td>
  
  <td> <input date_date_set="emp_date" type="date"></td>
  
  </tr>
  <tr>
    <td>Employment Type</td>
 <td><select name="emptype">
		<option value="Permanent">Permanent</option>
		<option value="Tempo">Tempo</option>
		<option value="Contract"> Contract</option>
		</select></td>
  </tr>
  <tr>
    <td></td>
   <td><input type="submit" name="save" value="Save"></td>
  </tr>
</table>
  

    </div>
		
		<div>&copy 2019 </div>
		</div>

	</body>

</html>