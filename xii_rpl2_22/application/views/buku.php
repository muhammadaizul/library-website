<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Perpustakaan-Online</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('aset/css/style.css');?>">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.html" id="logo"><img src="<?php echo base_url ('aset/images/logo.png');?>" alt="logo"></a>
			<ul>
				<li>
					<a href="<?php echo base_url ('index.php/welcome/index');?>">HOME</a>
				</li>
				<li>
					<a href="<?php echo base_url ('index.php/welcome/about');?>">ABOUT US </a>
				</li>
				<li>
					<a href="<?php echo base_url ('index.php/welcome/catalog'); ?>">CATALOG</a>
				</li>
				<li>
					<a href="<?php echo base_url ('index.php/welcome/login'); ?>">LOGIN</a>
				</li>
				<li class="current">
					<a href="<?php echo base_url ('index.php/welcome/buku');?>">BUKU</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div>
			<form action="index.html">
				<h2>Send A Message</h2>
				<label for="name"><span>Your Name:</span>
					<input type="text" id="name">
				</label>
				<label for="emailad"><span>Email Address:</span>
					<input type="text" id="emailad">
				</label>
				<label for="message"><span class="message">Message:</span>
					<textarea name="message" id="message" cols="30" rows="10"></textarea>
				</label>
				<input type="submit" class="send" value="Send">
			</form>
			<div>
				<h2>Contact Details</h2>
				<ul>
					<li>
						<b>Location</b>
						<span>:</span>
						<p>
							JL.Raya Selatan Wangon No.128 Kec.Wangon 57136 Kab.Banyumas
						</p>
					</li>
					<li>
						<b>Phone</b>
						<span>:</span>
						<p>
							+0285 - 747 -9907 -28
						</p>
					</li>
					<li>
						<b>Email</b>
						<span>:</span>
						<p>
							kang.izzul@gmail.com	
						</p>
					</li>
					<li>
						<b>Social</b>
						<span>:</span>
						<div>
							<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook" target="_blank">facebook</a>
							<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter" target="_blank">twitter</a>
							<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus" target="_blank">google&#43;</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<p>
			&copy; Copyright 2014. All rights reserved.
		</p>
	</div>
</body>
</html>