<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Title </title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="styles.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,400' rel='stylesheet' type='text/css'>

	 <script src="jquery.js"></script>
</head>
<body>
<!-- 	<div class="tagLine">
		<a href="index.html"><h1>Peggy's Everything</h1>
		<h6>Your world is beautiful, carry it.</h6>
		</a>
	</div> -->
	<?
	include 'includes/_header.php';
	?>


<div class="container">
	<div class="shoppingMenu">
		<img src="images/shoppingcart.jpg" alt="150x75">
		<h4>All products</h4>
		<ul>
			<li><a href="bags.html">Bags</a></li>
			<li><a href="teacozies.html">Tea Cozies</a></li>
			<li><a href="purses.html">Purses</a></li>
			<button onclick="addItem()">Add To Cart!</button>
		</ul>
	</div>
	<div class="leftColumn">
		<div class="productImage">
			<img src="http://dummyimage.com/300x300/000/fff" alt="The picture of the purse goes in this place." id="bigImage">
			<img src="http://dummyimage.com/50x50/000/fff" alt="The picture of the purse goes in this place.">
			<img src="http://dummyimage.com/50x50/000/fff" alt="The picture of the purse goes in this place.">
			<img src="http://dummyimage.com/50x50/000/fff" alt="The picture of the purse goes in this place.">

		</div>
		<h3>Random Fashion Bag</h3>
			<p>The archetypal tote is made of sturdy cloth, perhaps with thick leather at handles or bottom; leather versions often have a pebbled surface. Common fabrics include heavy canvas, possibly dyed, or treated to resist moisture and mold. Jute is another traditional material, though less popular. In recent decades, heavy nylon and other easy-care synthetics have become common, although these may degrade with prolonged sun-exposure. Many of today's inexpensive/free totes are often made from recycled matter, from minimally-processed natural fibers, or from byproducts of processes that refine organic materials.</p>
			<h3>Details</h3>
			<ul>
				<li>Carries two gallons of milk, no problem!</li>
				<li>Designed to be reversable, so you don't have to be seen wwith the same ba gin public two days in a row.</li>
				<li>Eco Friendly materials</li>
			</ul>
			</p>

		<div class="reviews">
		<blockquote>
			The Reveiw Goes in Here! Create more by making more blockquotes
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, fugit voluptatibus dolores suscipit incidunt culpa harum aliquid ipsam obcaecati magni.
		<footer>Reviewers Name Here</footer>
		</blockquote>
		<blockquote>
			The Reveiw Goes in Here! Create more by making more blockquotes
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, illum ut laborum totam deserunt voluptatibus vel facere alias repellendus harum enim optio doloribus officiis quibusdam quisquam cumque eveniet nesciunt non amet dignissimos magni sequi hic natus maxime laboriosam reiciendis numquam dolor? Maiores distinctio mollitia cumque minima quae accusamus sint. Veritatis!
		<footer>Reviewers Name Here</footer>
		</blockquote>
		<blockquote>
			The review goes here!
		<footer>Reviewers Name Here</footer>
		</blockquote>
		<blockquote>
			The review goes here!
		<footer>Reviewers Name Here</footer>
		</blockquote>
		<blockquote>
			The review goes here!
		<footer>Reviewers Name Here</footer>
		</blockquote>
		</div>
		</div>

	</div>
	<script src="script.js"></script>

</body>
</html>