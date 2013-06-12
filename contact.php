<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peggy's Everything</title>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,400' rel='stylesheet' type='text/css'>

	<script src="jquery.js"></script>
	<script src="script.js"></script>

</head>
<body>
	<?
	include 'navigation.php';
	?>

	<div class="container">

		<div class="leftColumn">

			<h3>Contact Us!</h3>
			<p>
				Want something special?
				<br><br>
				Find out what's happening in your area, or if you just wanted to drop us a line to say how extremely awesome the bags are. 
				<br><br>
				Maybe Peggy's Everything will be at a Farmers Market near you, so you could check out the extreme quality while you're in town.
			</p>
		</div>
		<div class="rightColumn" style="position: absolute;margin-left: 500px; width: 500px;">
			<form id="payment">
	            <h1>Contact Form :</h1>
	            <label>
	               <span>Full name</span>
	               <br>
	               <input type="text" class="input_text" name="name" placeholder="Full Name" id="name"/>
	            </label><br>
	             <label>
	               <span>Email</span>
	               <br>
	               <input type="text" class="input_text" name="email" placeholder="Whats your email address" id="email"/>
	            </label><br>
	             <label>
	                <span>Subject</span><br>
	                <input type="text" class="input_text" name="subject" placeholder="Subject"id="subject"/>
	            </label>
	            <label><br>
	                <span>Message</span><br>
	                <textarea class="message" name="feedback" id="feedback" placeholder="What can I help you with?" maxlength="400"></textarea>
	                <br>
	                <input type="button" class="button" value="Send away!" onClick=submitPressed();>
	            </label>
            </form>
		</div>
	</div>
</body>
</html>