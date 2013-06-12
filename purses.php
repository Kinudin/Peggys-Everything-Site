<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peggys Everything | Purses</title>
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
				<a href="shop_generalBag.php">
				<img src="images/genBag.jpg" alt="150x75" /> 
				<span class="prodName">General Bag</span><br>
				<span class="prodPrice">$15.00</span>
				</a>
			</div>
				<div class="item">
				<a href="shop_beadedBags.php">
				<img src="images/beadedBags.jpg" alt="150x75" /> 
				<span class="prodName">Beaded Goodness</span><br>
				<span class="prodPrice">$15.00</span>
				</a>
			</div>
			<div class="item">
				<a href="shop_wallBag.php">
				<img src="images/wallBag.jpg" alt="150x75" /> 
				<span class="prodName">Hang on the Wall Bag</span><br>
				<span class="prodPrice">$15.00</span>
				</a>
			</div>
			<div class="item">
				<a href="shop_fashionBag.php">
				<img src="images/fashionBag.jpg" alt="150x75" /> 
				<span class="prodName">Random Fashion Bag</span><br>
				<span class="prodPrice">$15.00</span>
				</a>
			</div>
		</div>
	</div>
	<script src="script.js"></script>

</body>
</html>