<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="images/head_icon.png">
<title> 瓦尔哈拉空间站 | 首页 </title>
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
<!-- start gallery -->
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
			
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
		});
	</script>
<style>
 .button,
 .button-success,
 .button-error,
 .button-warning,
 .button-secondary {
	font-family: "'微软雅黑','Helvetica Neue',Helvetica,Arial,sans-serif";
	font-size: 13px!important;
	height: 30px;
	line-height: 18px!important;
	padding: 3px 18px;
	display: inline-block;
	vertical-align: middle;
	font-weight: normal;
	border-radius: 3px;
	margin: 0 8px 0 3px;
	border: 1px solid #3383da;
	color: #ffffff;
	background-color: #3383da;
	cursor: pointer;
 }

 .button-success {
	 background: rgb(28, 184, 65); /* this is a green */
 }

 .button-error {
	 background: rgb(202, 60, 60); /* this is a maroon */
 }

 .button-warning {
	 background: rgb(223, 117, 20); /* this is an orange */
 }

 .button-secondary {
	 background: rgb(66, 184, 221); /* this is a light blue */
 }


</style>
</head>
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
				<li class="active"><a href="index.php">首页</a></li>
				<li><a href="portfolio.php">合集</a></li>
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
			<!-- 手机下可查看的搜索栏位扩展 -->
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
	<div class="header_btm">
		<div class="h_left">
			<h2>欢迎接驳瓦尔哈拉空间站，请选择登录舱</h2>
			<h3>部分接口可能需要权限认证以进一步访问，详情请咨询管理人员</h3>
		</div>
		<div class="soc_icons" >
				<ul >
					<li><img src='images/icon1.png'></li>
					<li><img src='images/icon2.png'></li>
					<li><img src='images/icon3.png'></li>
					<li><img src='images/icon4.png'></li>
					<div class="clear"></div>
				</ul>	
				<h2>Deck Supporting </h2>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
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
		<!-- start gallery  -->
		<!-- data cat 是分类，data-fitler是分类集，不是单分类-->
		<!-- 进行目录准备 -->
		<?php 
			include("content.php")
		?>
			<div class="container">
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="static_game server_game server_site"><a href="/portfolio.php"><button type="button" class="button-success">更多内容请访问合集页面</button></a></span></li>
						<!--
						<li><span class="filter active" data-filter="static_game server_game server_site">All</span></li> /
						<li><span class="filter" data-filter="server_site">server_site</span></li> /
						<li><span class="filter" data-filter="server_game static_game">game</span></li> /
						<li><span class="filter" data-filter="static_game">static_game</span></li> /
						<li><span class="filter" data-filter="server_game">server_game</span></li> 
						<!-->
					</ul>
		<div id="portfoliolist">
			<?php
				include("function.php");
				print(output_server_site($server_site_arr));
				print(output_static_game($static_server_site,$static_server_site_arr,'server_site'));
				#print(output_server_game($server_game_arr));
				#print(output_static_game($static_game,$static_game_arr,'static_game'));
		    ?>
		</div>
	</div><!-- end container -->
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