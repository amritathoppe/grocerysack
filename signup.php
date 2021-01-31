<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
      
        <li><a href="#">Contact</a></li>
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
        <h3 align="center">Register</h3>
        <p align="center">Fill in details</p>

        <form name="register" action="insert_user.php" class="form-inline" method="post" onSubmit="">
            <table align="center" cellpadding="5" cellspacing="5"> <tr> <div class="form-group">
      <td align="left">  <label>Enter username </label></td>
          <td> &nbsp;&nbsp;  <input id="username" type="text" class="form-control" name="username" placeholder="Your name">
          </div><br><br></td></tr>
          <tr> <div class="form-group">
          <td align="left">  <label>Enter Password</label></td>
         <td> &nbsp;&nbsp;   <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password">
          </div><br><br></td></tr>
		  <tr><div class="form-group">
            <td align="left"><label>Re-Enter Password</label></td>
           <td> &nbsp;&nbsp;<input id="repassword" type="password" class="form-control" name="repassword" placeholder="Enter your password again">
          </div><br><br></td></tr>
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
         <tr><td></td><td> <input class="submit" name="submit" type="submit" value="Register"></td></tr></table>
         
		  </form>
        <hr>

    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>Featured products</p>
      </div>
      <div class="well">
        <p>Featured products</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>