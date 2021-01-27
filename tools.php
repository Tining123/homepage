<?php
#该页面制作content页面使用的工具函数

#构建目录数组
function build_dic($arr){
    $res = Array();
    $length = count($arr);
    for ($i=2; $i<$length; $i++)
    {
        array_push($res,$arr[$i]);
    }
    return $res;
}

#字典数组的key转普通数组
function dic_key_to_arr($arr){
    $res = Array();
    $str = "";

    foreach ($arr as $key => $value) {
        array_push($res,$key);
    }

    return $res;
}

#字典数组的value转普通数组
function dic_value_to_arr($arr){
    $res = Array();
    $str = "";

    foreach ($arr as $key => $value) {
        array_push($res,$value);
    }

    return $res;
}

?>