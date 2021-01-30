<?php
#临近输入的函数聚合
#改页面用于存放html页面直接调用的函数

include("pretext.php");

#输出静态游戏的内容
function output_static_game($arr,$info,$class){
    $length = count($arr);
    $str = "";
    for ($i=0; $i<$length; $i++)
    {
        $url = "http://".$_SERVER['HTTP_HOST']."/".$class."/".$arr[$i];
        #判断是否存在信息
        if(array_key_exists($arr[$i],$info))
        {
            $url = "http://".$_SERVER['HTTP_HOST'].$info[$arr[$i]];
        }
        $str = $str.print_list($class, $GLOBALS["pic"].".jpg" , $url ,$arr[$i]);
        $GLOBALS["pic"] = $GLOBALS["pic"] + 1;
    }
    return $str;
}


#准备输出服务器应用
function prepare_server_app($arr,$info,$class){
    $length = count($arr);
    $str = "";
    $search = $_GET["search"];

    for ($i=0; $i<$length; $i++)
    {
        $url = "http://".$_SERVER['HTTP_HOST'].$class.$arr[$i];
        #判断是否存在信息
        if(array_key_exists($arr[$i],$info))
        {
            $url = "http://".$_SERVER['HTTP_HOST'].$info[$arr[$i]];
        }
        $str = print_app($GLOBALS["pic"].".jpg" , $url ,$arr[$i]);
        
        
        $GLOBALS["pic"] = $GLOBALS["pic"] + 1;
        if(!empty($search)){ 
            $low_class = '          '.((string)strtolower($class)).'          ';
            $low_key = '          '.((string)strtolower($arr[$i])).'          ';
            $low_search = ((string)strtolower($search));
            if(strpos($low_class,$low_search) == false && strpos($low_key,$low_search) == false ){
                continue;
            }
        }
        array_push($GLOBALS["app"],$str);
    }
}



#输出服务器应用
function ouput_server_app(){
    #进行每四个一组的循环输出
    $length = count($GLOBALS["app"]);
    if($length == 0){
        //如果为空则输出未找到的提示
        $str = "<p style='font-size:large;text-align:center;color:dimgrey'><b>抱歉，服务器未找到相关资料</b><p>";
        return $str;
    }
    
    $str = "";
    $i=0;
    for (; $i<$length; $i++)
    {
        #如果是第一个，则加上前缀
        if($i % 4 == 0)
        {
            $str = $str.'<ul class="folio_list">';
        }
        $str = $str.$GLOBALS["app"][$i];
        #如果下一个是第四个，则加上后缀
        if(($i+1) % 4 == 0)
        {
            $str = $str.'<div class="clear"></div></ul>';
        }
    }

    #如果不是恰好以第四个结束，补充后缀
    if(($i) % 4 != 0)
    {
        $str = $str.'<div class="clear"></div></ul>';
    }

    return $str;
}

#输出服务器游戏的内容
function output_server_game($arr){
    $length = count($arr);
    $str = "";

    foreach ($arr as $key => $value) {
        $url = "http://".$_SERVER['HTTP_HOST'].$value;
        $str = $str.print_list("server_game", $GLOBALS["pic"].".jpg" , $url ,$key);
        $GLOBALS["pic"] = $GLOBALS["pic"] + 1;
    }

    return $str;
}

#输出服务器站点
function output_server_site($arr){
    $length = count($arr);
    $str = "";

    foreach ($arr as $key => $value) {
        $url = "http://".$_SERVER['HTTP_HOST'].$value;
        $str = $str.print_list("server_site", $GLOBALS["pic"].".jpg" , $url ,$key);
        $GLOBALS["pic"] = $GLOBALS["pic"] + 1;
    }

    return $str;
}

?>

