<?php
#该页面进行常量准备，并且由html页面调用

#引用配置内容函数
include("configure.php");
include("tools.php");

#获取配置文件
$server_site_arr = getServerSite();
$server_game_arr = getServerGame();
$static_game_arr = getStaticGame();
$server_app_arr = getServerApp();

#扫描两种游戏库和APP

$server_game_temp = scandir(__DIR__."/server_game");
$static_game_temp = scandir(__DIR__."/static_game");
$server_app_temp = scandir(__DIR__."/server_app");

$server_site = dic_key_to_arr($server_site_arr);
$server_game = build_dic($server_game_temp);
$static_game = build_dic($static_game_temp);
$server_app = build_dic($server_app_temp);

#图片坐标
$GLOBALS["pic"] = 1;
#仓库数据存储
$GLOBALS["app"] = Array();

?>