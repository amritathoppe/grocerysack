
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   
 $sql1 = 'SELECT * FROM catergory';
   mysql_select_db('project');
  
 $retval1 = mysql_query( $sql1, $conn );
        if(! $retval1 ) {
      die('Could not get data: ' . mysql_error());
   }?>
<?php
session_start();
$conn = mysql_connect("localhost","root","");
mysql_select_db("project",$conn);
$result = mysql_query("SELECT * from users WHERE username='" . $_SESSION["login_user"] . "'");
$row=mysql_fetch_array($result);
$var=0;
if(count($_POST)>0) {

if($_POST["address1"] != $row["address_1"]) {
mysql_query("UPDATE users set address_1 ='" . $_POST["address1"] . "' WHERE username='" . $_SESSION["login_user"] . "'");
$var=1;
}
 if($_POST["address2"] != $row["address_2"]) {
mysql_query("UPDATE users set address_2 ='" . $_POST["address2"] . "' WHERE username='" . $_SESSION["login_user"] . "'");$var=1;

}
 if($_POST["city"] != $row["city"]) {
mysql_query("UPDATE users set city ='" . $_POST["city"] . "' WHERE username='" . $_SESSION["login_user"] . "'");$var=1;

}
if($_POST["state"] != $row["state"]) {
mysql_query("UPDATE users set state ='" . $_POST["state"] . "' WHERE username='" . $_SESSION["login_user"] . "'");$var=1;

}
 if($_POST["pincode"] != $row["pincode"]) {
mysql_query("UPDATE users set pincode ='" . $_POST["pincode"] . "' WHERE username='" . $_SESSION["login_user"] . "'");$var=1;

}
 if($_POST["phone"] != $row["contact"]) {
mysql_query("UPDATE users set contact='" . $_POST["phone"] . "' WHERE username='" . $_SESSION["login_user"] . "'"); $var=1;

}
if($var==1 )
$message = "Details updated  successfully!";
else
 $message = "Nothing updated";

}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Update</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <link rel="stylesheet" type="text/css" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
  
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">GrocerySack&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
<?php
 while($row1 = mysql_fetch_array($retval1, MYSQL_NUM)) {
 echo'<li><a href="'.$row1[1].'">'.$row1[0].'</a></li>';
      
};?>
      </ul>
	   <form class="navbar-form"  action="searchresults.php" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch_term" id="srch_term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
 </form>


      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
        <a class="dropdown-toggle " data-toggle="dropdown"> <span class="glyphicon glyphicon-user" ></span> My account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
       <li><a href="change.php">Change password</a></li>
      <li><a href="update.php">Update details</a></li>   
        </ul>
      </li>
   
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>

<div id="setpanel"> 
<div  class="panel panel-primary col-sm-6"  >
<div class="panel-heading">Update User Account Settings</div>
<div class="panel-body">

		 <form name="Update" action="" class="form-inline" method="post" onSubmit="">
		<table align="center" cellpadding="5" cellspacing="5">   <tr >	<td colspan="2"><h4>User account details</h4><hr></td></tr> 
					<div align="center" class="message"><?php if(isset($message)) { echo $message; } ?></div>

      			 <tr>
			  <div class="form-group">
			  <td align="left"><label>Address Line 1</label></td>
            <td>&nbsp;&nbsp;<input id="address1" value="<?php echo $row["address_1"]; ?>"type="text" class="form-control" name="address1" placeholder="Address Line 1">
			  </div><br><br></td></tr>
			 <tr> <div class="form-group">
			 <td align="left"><label>Address Line 2</label></td>
            <td>&nbsp;&nbsp;<input id="address2" value="<?php echo $row["address_2"]; ?>" type="text" class="form-control" name="address2" placeholder="Address Line 2">
			  </div><br><br></td></tr>
			 <tr> <div class="form-group"><td align="left"><label>City</label></td>
            <td>&nbsp;&nbsp;<input id="city" value="<?php echo $row["city"]; ?>"type="text" class="form-control" name="city" placeholder="City">
			  </div><br><br></td></tr>
			 <tr> <div class="form-group"><td align="left"><label>State</label></td>
            <td>&nbsp;&nbsp;<input id="state" value="<?php echo $row["state"]; ?>"type="text" class="form-control" name="state" placeholder="State">
			  </div><br><br></td></tr>
				 <tr> <div class="form-group"><td align="left"><label>Pincode</label></td>
            <td>&nbsp;&nbsp;<input id="pincode" value="<?php echo $row["pincode"]; ?>" type="text" class="form-control" name="pincode" placeholder="Pincode">
			  </div><br><br></td></tr>
			 <tr> <div class="form-group"><td align="left"><label>Contact </label></td>
            <td>&nbsp;&nbsp;<input id="phone" value="<?php echo $row["contact"]; ?>"type="text" class="form-control" name="phone" placeholder="Phone Number">
          </div><br><br></td></tr>
         <tr><td><a href="dashboard.php" >Back To Dashboard </a></td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="submit" name="Update" type="submit" value="Update"></td></tr></table>
         
		  </form>
		  </div></div></div></div>
</body>
</html>
