
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
<!-- back to top -->
<style>
    .back-to-top {
      display: none;
      /* 默认是隐藏的，这样在第一屏才不显示 */
      position: fixed;
      /* 位置是固定的 */
      bottom: 20px;
      /* 显示在页面底部 */
      right: 30px;
      /* 显示在页面的右边 */
      z-index: 99;
      /* 确保不被其他功能覆盖 */
      border: 1px solid #5cb85c;
      /* 显示边框 */
      outline: none;
      /* 不显示外框 */
      background-color: #fff;
      /* 设置背景背景颜色 */
      color: #5cb85c;
      /* 设置文本颜色 */
      cursor: pointer;
      /* 鼠标移到按钮上显示手型 */
      padding: 10px 15px 15px 15px;
      /* 增加一些内边距 */
      border-radius: 10px;
      /* 增加圆角 */
    }

    .back-to-top:hover {
      background-color: #5cb85c;
      /* 鼠标移上去时，反转颜色 */
      color: #fff;
    }
  </style>
  <button class="js-back-to-top back-to-top" title="回到头部">︽</button>
  <script>
    $(function() {
      var $win = $(window);
      var $backToTop = $('.js-back-to-top');
      // 当用户滚动到离顶部100像素时，展示回到顶部按钮
      $win.scroll(function() {
        if ($win.scrollTop() > 100) {
          $backToTop.show();
        } else {
          $backToTop.hide();
        }
      });
      // 当用户点击按钮时，通过动画效果返回头部
      $backToTop.click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 200);
      });
    });
  </script>
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
			$("a").on('click', function(event) {
				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
				// Prevent default anchor click behavior
				event.preventDefault();

				// Store hash
				var hash = this.hash;

				// Using jQuery's animate() method to add smooth page scroll
				// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 300, function(){

					// Add hash (#) to URL when done scrolling (default click behavior)
					window.location.hash = hash;
				});
				} // End if
				});
		});
		</script>
</head>
<!-- 字体设计代码段 -->
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
	.appp{
		text-align: center;
		font-size: large;
		font-family: "'微软雅黑','Helvetica Neue',Helvetica,Arial,sans-serif";
		font-weight: bolder;
	}
	body,html{
		scroll-behavior: initautoial;
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
				<li><a href="status.php">状态</a></li>
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
	                <li class="nav-item"><a href="status.php">状态</a></li>
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
		<h3>We are all, we are one</h3>
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
			<div class="span_of_4" style="text-align: center; margin-top:-5%">
				<div class="span1_of_4">
					<p class="bg" style="padding: 4%; margin-top: 8%; color:black;">快速跳转</p>
				</div>
				<div class="span1_of_4">
					<a href="#site"><span class="bg"><p style="color:black;">站点合集</p></span></a>
				</div>
				<div class="span1_of_4">
					<a href="#game"><span class="bg"><p style="color:black;">游戏合集</p></span></a>
				</div>
				<div class="span1_of_4">
					<a href="#app"><span class="bg"><p style="color:black;">应用合集</p></span></a>
				</div>
			</div>
			<div class="clear"></div>
			<!-- end popup -->
				<?php
					include("content.php");
					include("function.php");
					print('<hr id="site" /><div class = "appp" ><p>站点：</p></div>
                    <hr />');
					prepare_server_app($server_site,$server_site_arr,"");
					prepare_server_app($static_server_site,$static_server_site_arr,"/server_site/");
					print(ouput_server_app());
					$GLOBALS["app"] = Array();
					print('<hr id="game" /><div class = "appp" ><p>游戏：</p></div>
                    <hr />');
					prepare_server_app($server_game,$server_game_arr,"/server_game/");
					prepare_server_app($static_game,$static_game_arr,"/static_game/");
					print(ouput_server_app());
					$GLOBALS["app"] = Array();
					print('<hr id="app" /><div class = "appp" ><p>应用：</p></div>
                    <hr />');
					prepare_server_app($server_app,$server_app_arr,"/server_app/");
					print(ouput_server_app());
					$GLOBALS["app"] = Array();
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
					<li><a href="status.php">状态</a></li>
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