<html>
	<head>
		<meta name="description" content="contact">
		<meta name="author" content="Nanesko Watson">
		<link rel="stylesheet" href="styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
	<?php include('header.php'); ?>
		<div class="container">
			<div class="page pB">
				<div class="pageItem">
					<h2>Contact Us</h2>
					<div class="contacts">
						<img src="images/instagram_icon.png" width="40px">
						<img src="images/facebook_icon.png" width="40px">
					</div>
				</div>
				<div class="pageItem blue">
					<form name="contact" id="contact" action="" method="post">
					<label for="name">Your Name: </label><br>
					<input type="text" name="name"/><br>
					<label for="email">Email: </label><br>
					<input type="text" name="email" placeholder="johndoe@gmail.com"/><br>
					<label for="query">Your query: </label><br>
					<input type="text" name="query"/><br>
					<button type="submit">Send</button>
				</form>
				</div>
			</div>
			<div class="page wrapping pYC">	
				<div class="title">
					<h2>FAQ</h2>
				</div>
				<div class="pageRow">
					<div class="rowTitle">
						<h4>How can I contribute to the publication?</h4>
					</div>
					<div class="rowDesc">
						<p>You can contribute as a writer or an artist.</p>
					</div>
				</div>
				<div class="pageRow">
					<div class="rowTitle">
						<h4>Will you ever sell T-Shirts?</h4>
					</div>
					<div class="rowDesc">
						<p>We may choose to sell T-Shirts in the future. Keep a look out!</p>
					</div>
				</div>
				<div class="pageRow">
					<div class="rowTitle">
						<h4>How often do you take applications?</h4>
					</div>
					<div class="rowDesc">
						<p>This is a bi-monthly project, so we do a 
						round of applications 6 times a year. We start applications 3 
						months in advance so that we can make sure everything is 
						complete before that month's issue is to be published.</p>
					</div>
				</div>
			</div>
		</div>
	<?php include('footer.php'); ?>
	</body>
</html>