
<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="images/head_icon.png">
<title>瓦尔哈拉空间站 | 合集 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="calendar/src/css/style.css" rel="stylesheet" type="text/css">
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

	/* 文字靠左 */
	.left-text p{
		text-align: center;
		padding: 2%;;
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
		});
		</script>
</head>
<!-- 自定义内容 -->
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
	.content{
		padding-top: 2%;
	}
	.bg{
		color: black;
	}
	.contrib-column{
		font-family: "'微软雅黑','Helvetica Neue',Helvetica,Arial,sans-serif";
	}
	text
	{
		font-size: 10px;
		font-family: 'Cutive Mono', monospace;
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
				<li ><a href="portfolio.php">合集</a></li>
				<li class="active"><a href="status.php">状态</a></li>
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
		<h2>空间站运行状态</h2>
		<h3>Construction conpleted</h3>
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
			<hr /><div class = "appp"><p>核心运算模块-维护监控面板</p></div><hr />
			<div class="calendar">
				<div class="border py-2 graph-before-activity-overview">
					<div class="js-calendar-graph mx-md-2 mx-3 d-flex flex-column flex-items-end flex-xl-items-center overflow-hidden pt-1 is-graph-loading graph-canvas calendar-graph height-full text-center" data-graph-url="/users/IonicaBizau/contributions?to=2021-01-27" data-url="/IonicaBizau" data-from="2020-01-26 00:00:00 UTC" data-to="2021-01-27 23:59:59 UTC" data-org="">
						<svg width="100%" class="js-calendar-graph-svg" viewBox="0 0 722 112">
						<g transform="translate(10, 20)" data-hydro-click="{&quot;event_type&quot;:&quot;user_profile.click&quot;,&quot;payload&quot;:{&quot;profile_user_id&quot;:2864371,&quot;target&quot;:&quot;CONTRIBUTION_CALENDAR_SQUARE&quot;,&quot;user_id&quot;:null,&quot;originating_url&quot;:&quot;https://github.com/users/IonicaBizau/contributions&quot;}}" data-hydro-click-hmac="c29bb84527b62dafc7ab4208ed2db21ea4195839d541da829d109a8d172bee42">
						<?php
							include("calendar/src/content.php");
						?>

						</g></svg>
					</div>
					<div class="contrib-footer clearfix mt-1 mx-3 px-3 pb-1">
						<div class="contrib-legend text-gray" title="A summary of pull requests, issues opened, and commits to the default and gh-pages branches.">
						Less
							<ul class="legend">
								<li style="background-color: var(--color-calendar-graph-day-bg)"></li>
								<li style="background-color: var(--color-calendar-graph-day-L1-bg)"></li>
								<li style="background-color: var(--color-calendar-graph-day-L2-bg)"></li>
								<li style="background-color: var(--color-calendar-graph-day-L3-bg)"></li>
								<li style="background-color: var(--color-calendar-graph-day-L4-bg)"></li>
							</ul>
						More
						</div>
					</div>
					<div class="contrib-column contrib-column-first table-column"style="border-bottom: 1px solid #ddd"><span class="text-muted">过去一年的贡献量</span>
                               <span class="contrib-number">总计 <?php print($total); ?></span>
					<span class="text-muted"><?php print(output_total_date($firstday,$today)); ?></span></div>
					<div class="contrib-column contrib-column-first table-column" style="border-left: 1px solid #ddd;border-bottom: 1px solid #ddd"><span class="text-muted">当前部署应用量</span>
                               <span class="contrib-number">
								   <?php
										 include('content.php');
										 include('function.php');
										 prepare_server_app($server_site,$server_site_arr,"");
										 prepare_server_app($static_server_site,$static_server_site_arr,"/server_site/");
										 $server_count = count($GLOBALS["app"]);
										 prepare_server_app($server_game,$server_game_arr,"/server_game/");
										 prepare_server_app($static_game,$static_game_arr,"/static_game/");
										 $game_count = count($GLOBALS["app"]) - $server_count;
										 prepare_server_app($server_app,$server_app_arr,"/server_app/");
										 $app_count = count($GLOBALS["app"])- $server_count - $game_count;
										 print('总计 '.count($GLOBALS["app"]));
								   ?>
							   </span>
					<span class="text-muted"><?php print("站点:".$server_count." / 娱乐:".$game_count." / 应用".$app_count); ?></span></div>	
					<div class="contrib-column contrib-column-first table-column" style="border-left: 1px solid #ddd;border-bottom: 1px solid #ddd"><span class="text-muted">最长持续贡献时间</span>
                               <span class="contrib-number"><?php print($max_length); ?> 天</span>
					<span class="text-muted"><?php print(output_total_date($the_begin_day,$the_end_day)); ?></span></div>	
					<!--
						<div class="span_of_4">
							<div class="span1_of_4">
								<p>状态维护<p>
								<span class="bg">It is a long established</span>
							</div>
							<div class="span1_of_4">
								<p>应用自检查<p>
								<span class="bg">It is a long established</span>
							</div>
							<div class="span1_of_4">
								<p>应用自检查<p>
								<span class="bg">服务器状态：良好</span>
							</div>
							<div class="span1_of_4">
								<p>应用自检查<p>
								<span class="bg">服务器状态：良好</span>
							</div>
						</div>
					-->
				</div>
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
					<li><a href="portfolio.php">状态</a></li>
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