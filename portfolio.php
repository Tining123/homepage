
<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="images/head_icon.png">
<title>瓦尔哈拉空间站 | 合集 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
</head>
<style>
	a img
	{ 
		margin-bottom: 0%;
	}
	a p:hover
	{ 
		color:black;
		background-color:dimgrey;
	}
	a p
	{ 
		margin-top: 0;
		margin-bottom: 1%;
	}
</style>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="images/logo.png" alt=""/></a></h1>
		</div>
		<div class="h_right">
			<ul class="menu">
				<li><a href="index.php">首页</a></li>
				<li class="active"><a href="portfolio.php">合集</a></li>
				<li><a href="about.php">关于</a></li>
			</ul>
			<div id="sb-search" class="sb-search">
				<form action="portfolio.php">
					<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
					<input class="sb-search-submit" type="submit" value="">
					<span class="sb-icon-search"></span>
				</form>
			</div>
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="index.php">首页</a></li>
	                <li class="nav-item"><a href="portfolio.php">合集</a></li>
	                <li class="nav-item"><a href="about.php">关于</a></li>
	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
		<h2>空间站功能合集</h2>
		<h3>We are all, We are one</h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
			<!-- start popup -->
			<div id="small-dialog" class="mfp-hide">
				<div class="pop_up">
				 	<h2>Lorem Ipsum is simply dummy text of the printing and industry</h2>
				 	<img src="images/zoom.jpg" title="image-name">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
					<a class="btn" href="details.html">Read more</a>
				</div>
			</div>
			<!-- end popup -->
				<?php
					include("content.php");
					include("function.php");
					prepare_server_app($server_site,$server_site_arr,"");
					prepare_server_app($server_game,$server_game_arr,"/server_game/");
					prepare_server_app($static_game,$static_game_arr,"/static_game/");
					prepare_server_app($server_app,$server_app_arr,"/server_app/");
					print(ouput_server_app());
				?>
		</div>
	</div>
</div>
</div>
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<div class="footer_top">
			<div class="f_nav1">
				<ul>
				<li><a href="index.php">首页</a></li>
					<li><a href="portfolio.php">合集</a></li>
					<li><a href="about.php">关于</a></li>
				</ul>
			</div>
			<div class="copy">
				<p class="link"><span>© All rights reserved | <a href="http://www.itining.com/" target="_blank" title="瓦尔哈拉空间站">瓦尔哈拉空间站</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
</body>
</html>