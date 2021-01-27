<?php

#进行各种预先配置

#获取服务器配置
function getServerSite(){
    $res = Array();
    #两两一组，名称+端口/后缀
    $res['控制面板'] = ":8888";
    $res['博客'] = ":7001";
    $res['网盘'] = ":7002";
    $res['传感器'] = ":7017/d/DEWDSBZgk/new-dashboard-copy?orgId=1&refresh=5s";
    $res['下载'] = ":7005";
    $res['代码仓库'] = ":7006";
    $res['在线编程'] = ":8443";
    $res['Steam'] = ":7010";
    $res['影院'] = ":8096";
    $res['RSS'] = ":7015";
    $res['FRP面板'] = ":5500";
    return $res;
}

#获取静态游戏配置
function getServerGame(){
    $res = Array();
    #两两一组，名称+端口/后缀
    $res["IdleSpace"] = ":4001";
    $res["BrowserQuest-PHP"] = ":8787";
    return $res;
}

#获取服务器游戏配置
function getStaticGame(){
    $res = Array();
    #两两一组，名称+端口/后缀
    $res["darkroom"] = "/static_game/darkroom/?lang=zh_cn";
    $res["mikutap"] = "/static_game/mikutap/mikutap/";
    return $res;
}

#获取仓库配置
function getServerApp(){
    $res = Array();
    $res["机器学习 VS Flappy Bird"] = "/server_app/机器学习 VS Flappy Bird/source/";
    #两两一组，名称+端口/后缀
    return $res;
}

?>