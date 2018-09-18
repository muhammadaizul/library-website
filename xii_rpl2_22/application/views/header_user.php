<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Perpustakaan-Online</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('aset/css/style.css');?>">
	<link rel ="shortcut icon" href="<?php echo base_url('aset/images/logo.png');?>">

</head>
<body>
	<div id="header">
		<div>
			<a href="index.html" id="logo"><img src="<?php echo base_url ('aset/images/logo.png'); ?>" alt="logo"></a>
			<ul>
				<li >
					<a href="<?php echo base_url ('index.php/welcome/home_user');?>">HOME</a>
				</li>
				<li>
					<a href="<?php echo base_url ('index.php/katalog_user');?>">KATALOG </a>
				</li>
				<li>
					<a href="<?php echo base_url ('index.php/katalog_user/download'); ?>">DOWNLOAD COVER</a>
				</li>
				<li>
					<a href="<?php echo base_url ('index.php/user/form_pass'); ?>">GANTI PASSWORD</a>
				</li>
				<li>
					<a href="<?php echo base_url ('index.php/proseslogin/logout');?>">LOGOUT</a>
				</li>
			</ul>
		</div>
	</div>
