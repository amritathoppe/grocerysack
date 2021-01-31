<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
 mysql_select_db('project');
  $name = $_POST['srch_term'];
$search_sql="SELECT * FROM products WHERE product_name LIKE '%".$name."%' AND product_store LIKE 'vasantham' ";
   $search_query=mysql_query($search_sql);
   $search_rs=mysql_fetch_assoc($search_query);
   $sql1='SELECT name FROM catergory';
    $retval = mysql_query( $search_sql, $conn );
	$retval1 = mysql_query( $sql1, $conn );
     if(! $search_sql ) {
      die('Could not get data: ' . mysql_error());
   }?>
   <!DOCTYPE html>
<html lang="en">
<head>
  <title>GrocerySack</title>
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
<?php
 while($row1 = mysql_fetch_array($retval1, MYSQL_NUM)) {
 echo'<li><a href="#">'.$row1[0].'</a></li>';
      
};?>
</ul>
<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Logged In</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2">
      
    </div>
    <br>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

      <?php
    echo'<div class="container col-sm-10">   <div class="row">';
   
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
      
    echo'<div class="col-sm-3">';
     echo' <div class="panel panel-primary">';
       echo' <div class="panel-heading"> '.$row[0] .' <br></div>';
       echo' <div class="panel-body"><img src="'.$row[2].'" class="img-responsive" style="width:100%" alt="Image"></div>';
      echo'  <div class="panel-footer"><p>Price(Rs.):'.$row[1].'  <button type="button" class="btn btn-default">';
    echo'  <span class="glyphicon glyphicon-shopping-cart"></span> Add</button><button type="button" class="btn btn-default">';
  echo'    <span class="glyphicon glyphicon-heart"></span> Wish</button><br>'; 
 
 echo'<a class="col-sm-1" href="#" data-toggle="popover" title="About" data-trigger="focus" data-content="'.$row[3].'">Description</a></div>';
     echo' </div></div>';

}	  
echo'</div> </div>'; 
   
   mysql_free_result($retval);
   //echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>

	
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
