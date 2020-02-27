<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="livingroom.php">Living Room</a>
				</li>
				<li>
					<a href="bedroom.php">Bedroom</a>
				</li>
				<li>
					<a href="kitchen.php">Kitchen</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li class="selected">
					<a href="login.php">Sign Up</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div>
			<div class="body" id="contact">
				<div id="sidebar">
					<div class="body">
						<img src="images/abc.jpg" alt="Img">
						<div class="contact">
							<p>
								For Order and Inquiries Please Call: <b>999-091-2864</b> Or you can visit us at: <b>Showroom No. 7, Inner Circle, CP, New Delhi 110001</b>Or just Email us instead at: <b class="email">info@interiorkings.com</b>
							</p>
						</div>
					</div>
				</div>
				<div id="main">
					<h1>Sign In</h1>
					
					<form action="insert1.php" method="post">
						<label>Email</label>
						<input type="text" name="email">
						<label>Password</label>
						<input type="text" name="password">
						<input type="submit" value="Log In" class="btn1">
						<p>Didin't have an account. <a href="signup.php">Create one</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Visit our Showroom</h4>
					<a href="gallery.php"><img src="images/show-room.png" alt="Img"></a>
					<p>
						Showroom No. 7, Inner Circle<br> CP, New Delhi 110001<br> 999-091-2864<br><br> <a href="index.php">info@interiorkings.com</a>
					</p>
				</div>
				<div>
					<h4>Most Popular Brands</h4>
					<ul class="posts">
						<li>
							<p>
								<a href="https://www.pepperfry.com/brands/casacraft.html?cat=3&type=clp_living_room_popular_brands_block1">CASACRAFT</a> CasaCraft offers the best in comfort, with elan. The collection consists of a series of modern designs.
							</p>
						</li>
						<li>
							<p>
								<a href="https://www.pepperfry.com/brands/woodsworth.html?type=clp_living_room_popular_brands_block2">WOODSWORTH</a> Woodsworth epitomizes the idea of bringing exceptional value with distinctive furniture for your home.
							</p>
						</li>
						<li>
							<p>
								<a href="https://www.pepperfry.com/brands/mintwud.html?cat=0&type=clp_living_room_popular_brands_block4">MINTWUD</a> Mintwud presents a wide showcase of modern furniture that is designed to seamlessly blend with your interiors.
							</p>
						</li>
					</ul>
				</div>
				<div>
					<form action="#" method="post" id="newsletter">
						<h4>Contact Us</h4>
						<a href="signup.php"><input type="submit" value="Sign Up" class="btn2"></a><br><br>
						<a href="contact.php"><input type="submit" value="Give Feedback" class="btn2"></a>
					</form>
					<div id="connect">
						<h4>Social Media</h4>
						<a href="http://facebook.com/kartiksingh287" target="_blank" class="facebook"></a> <a href="http://instagram.com/kartik287" target="_blank" class="instagram"></a> <a href="https://twitter.com/kartiksingh287" target="_blank" class="twitter"></a>
					</div>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="livingroom.php">Living Room</a>
				</li>
				<li>
					<a href="bedroom.php">Bedroom</a>
				</li>
				<li>
					<a href="kitchen.php">Kitchen</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="login.php">Sign Up</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2020. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>