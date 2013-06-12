<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peggys Everything | Tea Cozies</title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="styles.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,400' rel='stylesheet' type='text/css'>

	 <script src="jquery.js"></script>
</head>
<body>
	<?
	include 'navigation.php';
	?>
	<div class="container">
		<div class="shoppingMenu">
			<img src="images/shoppingcart.jpg" alt="150x75">
			<h4>All products</h4>
			<ul>
				<li><a href="bags_shop.php">Bags</a></li>
				<li><a href="teacozies.php">Tea Cozies</a></li>
				<li><a href="purses.php">Purses</a></li>
			</ul>
		</div>
		<div class="shopPage">
			<div class="item">
				<a href="shop_skulldetail.php"><img src="images/skullCozy.jpg" alt="171x228" /> 
				<span>Skull Cozy</span><br>
				<span class="prodPrice">$15.00</span>
				</a>
			</div>
			<div class="item">
				<a href="shop_cherrydetail.php"><img src="images/cherryCozy.jpg" alt="150x75" /> 
				<span>Cherry Cozy</span><br>
				<span class="prodPrice">$15.00</span>
				</a>
			</div>

			<div class="item">
				<a href="shop_edcdetail.php"><img src="images/EDCCozy.jpg" alt="150x75" /> 
				<span class="prodName">EDC (Earth Day Cozy)</span><br>
				<span class="prodPrice">$15.00</span>
				</a>
			</div>
			<div class="item">
				<a href="shop_grannyteashop.php"><img src="images/grannysTeaShop.jpg" alt="150x75" /> 
				<span class="prodName">Granny's Tea Shop</span><br>
				<span class="prodPrice">$15.00</span>
				</a>
			</div>
		</div>
	</div>
	<script src="script.js"></script>

</body>
</html>