		<?php
	   $dbhost = 'localhost';
	   $dbuser = 'root';
	   $dbpass = '';
	   
	   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
	   
	   if(! $conn ) {
		  die('Could not connect: ' . mysql_error());
	   }
	   
	   $sql = 'SELECT product_name,product_price,product_image,product_details,product_store FROM products where product_store="kannan"';
	   $sql1='SELECT name FROM catergory';
	
		   mysql_select_db('project');
	   $retval = mysql_query( $sql, $conn );
		 $retval1 = mysql_query( $sql1, $conn );
	   if(! $retval ) {
		  die('Could not get data: ' . mysql_error());
	   }?>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE product_code='" . $_GET["product_code"] . "'");
			$itemArray = array($productByCode[0]["product_code"]=>array('product_name'=>$productByCode[0]["product_name"], 'product_code'=>$productByCode[0]["product_code"], 'quantity'=>$_POST["quantity"], 'product_price'=>$productByCode[0]["product_price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["product_code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["product_code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["product_code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Grocerysack</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
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
</HEAD>
<BODY>

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
		   <form class="navbar-form"  action="search_allhealthdrink.php" method="post">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search" name="srch_term" id="srch_term">
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					
				</div>
			</div>
	 </form>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Logged In</a></li>
			<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
	<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
	
		  </ul>
		</div>
	  </div>
	</nav>
	
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="allhealth.php?action=empty">Empty Cart</a></div> 
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Price</strong></th>
<th><strong>Action</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td><strong><?php echo $item["product_name"]; ?></strong></td>
				<td><?php echo $item["product_code"]; ?></td>
				<td><?php echo $item["quantity"]; ?></td>
				<td ><?php echo "Rs.".$item["product_price"]; ?></td>
				<td><a href="allhealth.php?action=remove&product_code=<?php echo $item["product_code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["product_price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "Rs.".$item_total; ?></td>
</tr>
</tbody>
</table>		
  <?php
}
?>
</div>
<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM products where product_cater='health' ORDER BY product_id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="allhealth.php?action=add&product_code=<?php echo $product_array[$key]["product_code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["product_image"]; ?>"></div>
			<div><strong><br><br><br><?php echo $product_array[$key]["product_name"]; ?></strong></div>
			<div class="product-price"><?php echo "Rs.".$product_array[$key]["product_price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
			}
	}
	?>
</div>
</BODY>
</HTML>