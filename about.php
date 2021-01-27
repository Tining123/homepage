
<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="images/head_icon.png">
<title>瓦尔哈拉空间站 | 关于 </title>
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
				<li><a href="index.php">首页</a></li>
				<li><a href="portfolio.php">合集</a></li>
				<li class="active"><a href="about.php">关于</a></li>
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
		<h2>空间站起源</h2>
		<h3>Cogito ergo sum</h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
			<!-- start about -->
			<div class="about">
					 <div class="cont-grid-img img_style">
			     		<img src="images/stone.jpg" alt="">
			     	</div>
			       <div class="cont-grid">
					       	<h4>燃烧的石头 / 自然的信号 / 最后的孤岛 / 藏秘的资料</h4>
					       	<p class="para">2016年，一向喜欢将艺术设计和科学技术融为一起的艺术家 Aram Bartholl 设计出了这样一块石头，命名为“Keepalive”。 </p>
					       	<p class="para">这块石头重达 1.5 吨，石头内隐藏了一个火力供电的 Wi-Fi 路由器和 U 盘。在石头附近点燃火，通过火燃烧产生的内能可以激活石头内置的 Wi-Fi 和 USB 驱动，岩石内网可由 DIY 匿名文件盒共享，用户可以通过手机获取、浏览并下载存储在 USB 驱动里一些现代生存指南。</p>
					       	<p class="para">Aram Bartholl 是在桑迪飓风导致整个城市电力系统瘫痪时目睹了人们利用火炉给电子设备充电以保持通讯畅通而激发得到灵感，创造了这款火力 Wi-Fi 岩石。同时他希望人们可以通过 Keepalive 能够体验到原始文明和现代文明之间的差距，重拾野外生存的基本技能。 </p>
							<p class="para">“Keepalive 并不是简化人们的生活，它是在反乌托邦理念下诞生的艺术品。不过我们说不好未来会不会有使用它的一天。”</p>
					</div>
			      	<div class="clear"></div>
			</div>
			<!-- end about -->
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