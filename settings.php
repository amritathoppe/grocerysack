
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("project", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from users where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
//header('Location: index.php'); // Redirecting To Home Page
}
?>
<?php

$conn = mysql_connect("localhost","root","");
mysql_select_db("project",$conn);
if(isset($_POST["Change"])) {
$result = mysql_query("SELECT * from users WHERE username='" . $_SESSION["login_user"] . "'");
$row=mysql_fetch_array($result);
if($_POST["curpassword"] == $row["password"]) {
mysql_query("UPDATE users set password='" . $_POST["newpassword"] . "' WHERE username='" . $_SESSION["login_user"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>
<?php
if(isset($_POST["Update"])) {

 if($_POST["fname"] == $row["first_name"]) {
mysql_query("UPDATE users set first_name ='" . $_POST["fname"] . "' WHERE username='" . $_SESSION["login_user"] . "'");}
 if($_POST["lname"] == $row["last_name"]) {
mysql_query("UPDATE users set last_name ='" . $_POST["lname"] . "' WHERE username='" . $_SESSION["login_user"] . "'");}

 if($_POST["address1"] == $row["address_1"]) {
mysql_query("UPDATE users set address_1 ='" . $_POST["address1"] . "' WHERE username='" . $_SESSION["login_user"] . "'");
}
 if($_POST["address2"] == $row["address_2"]) {
mysql_query("UPDATE users set address_2 ='" . $_POST["address2"] . "' WHERE username='" . $_SESSION["login_user"] . "'");
}
 if($_POST["city"] == $row["city"]) {
mysql_query("UPDATE users set city ='" . $_POST["city"] . "' WHERE username='" . $_SESSION["login_user"] . "'");
}
 if($_POST["state"] == $row["state"]) {
mysql_query("UPDATE users set state ='" . $_POST["state"] . "' WHERE username='" . $_SESSION["login_user"] . "'");}
 if($_POST["phone"] == $row["contact"]) {
mysql_query("UPDATE users set state ='" . $_POST["phone"] . "' WHERE username='" . $_SESSION["login_user"] . "'");}}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User settings</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>

</head>

<body>
<div id="setpanel">
<div  class="panel panel-primary col-sm-6"  >
<div class="panel-heading">User settings</div>
<div class="panel-body">

        <form name="Change" action="" class="form-inline" method="post" onSubmit="return validatePassword()">
            <table align="center" cellpadding="5" cellspacing="5"> 
		<tr>	<h4>Change password</h4><hr></tr>
			<div align="center" class="message"><?php if(isset($message)) { echo $message; } ?></div>
          <tr> <div class="form-group">
          <td align="left">  <label>Enter Current Password</label></td>
         <td> &nbsp;&nbsp;   <input id="curpassword" type="password" class="form-control" name="curpassword" placeholder="Enter your current password">
          </div><br><br></td></tr>
		  
		   <tr> <div class="form-group">
          <td align="left">  <label>Enter New Password</label></td>
         <td> &nbsp;&nbsp;   <input id="newpassword" type="password" class="form-control" name="newpassword" placeholder="Enter your new password">
          </div><br><br></td></tr>
		  
		  <tr><div class="form-group">
            <td align="left"><label>Re-Enter New Password</label></td>
           <td> &nbsp;&nbsp;<input id="renewpassword" type="password" class="form-control" name="renewpassword" placeholder="Re-Enter New Password">
          </div><br><br></td></tr>
		 <tr><td></td><td> <input class="submit" name="Change" type="submit" value="Change"><br><br></td></tr></form>
		
		 <form name="Update" action="" class="form-inline" method="post" onSubmit="">
		  <tr >	<td colspan="2"><h4>User account details</h4><hr></td></tr> 
        		  <tr> <div class="form-group">
            <td align="left"><label>Enter First name</label></td>
            <td> &nbsp;&nbsp;<input id="fname" type="text" class="form-control" name="fname" placeholder="Enter your firstname">
          </div><br><br></td></tr>
		  <tr>
		   <div class="form-group">
            <td align="left"><label>Enter Last name</label></td>
            <td> &nbsp;&nbsp;<input id="lname" type="text" class="form-control" name="lname" placeholder="Enter your lastname">
          </div><br><br></td></tr>
		   <tr>
		    <div class="form-group">
			<td align="left"><label>Enter Email</label></td>
            <td>&nbsp;&nbsp;<input id="email" type="text" class="form-control" name="email" placeholder="Enter your email">
			  </div><br><br></td></tr>
			 <tr>
			  <div class="form-group">
			  <td align="left"><label>Address Line 1</label></td>
            <td>&nbsp;&nbsp;<input id="address1" type="text" class="form-control" name="address1" placeholder="Address Line 1">
			  </div><br><br></td></tr>
			 <tr> <div class="form-group">
			 <td align="left"><label>Address Line 2</label></td>
            <td>&nbsp;&nbsp;<input id="address2" type="text" class="form-control" name="address2" placeholder="Address Line 2">
			  </div><br><br></td></tr>
			 <tr> <div class="form-group"><td align="left"><label>City</label></td>
            <td>&nbsp;&nbsp;<input id="city" type="text" class="form-control" name="city" placeholder="City">
			  </div><br><br></td></tr>
			 <tr> <div class="form-group"><td align="left"><label>State</label></td>
            <td>&nbsp;&nbsp;<input id="State" type="text" class="form-control" name="state" placeholder="State">
			  </div><br><br></td></tr>
				 <tr> <div class="form-group"><td align="left"><label>Pincode</label></td>
            <td>&nbsp;&nbsp;<input id="Pincode" type="text" class="form-control" name="pincode" placeholder="Pincode">
			  </div><br><br></td></tr>
			 <tr> <div class="form-group"><td align="left"><label>Contact </label></td>
            <td>&nbsp;&nbsp;<input id="Phone" type="text" class="form-control" name="phone" placeholder="Phone Number">
          </div><br><br></td></tr>
         <tr><td></td><td> <input class="submit" name="Update" type="submit" value="Update"></td></tr></table>
         
		  </form>
     

</div>
</div>
</div>
</body>
</html>
