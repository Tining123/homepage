<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');

include('config.php');

#返回颜色
#get the color index,0-5
function colorIndex($contribute,$max){
    if($contribute == 0)
    {
        return 0;
    }
    else if ($contribute == $max){
        return 4;
    }
    else if($contribute >= $max / 3 * 2){
        return 3;
    }
    else if($contribute >= $max/3){
        return 2;
    }
    else return 1;
}

#输出总时间
function output_total_date($firstday,$today){
    return date('Y-m-d',$firstday)." - " . date('Y-m-d',$today);
}


//Call api
//访问API接口
$html = file_get_html($url);

//load json
//加载json
//The json is an array, odd index is Unix timestamp,even index is contribution
//这个json是一个数组，为contribute*2的数量，单数为timestamp，双数为contribute
$data = json_decode($html,true);

//build the dic of date and number, count the biggest contribute
//制作一个日期和贡献对照的表，并且统计最大数字
$data_dic = Array(); 
$max = 0;

//keep the day but not time
//仅保留日期，不保留时间
foreach($data as $key => $value){
    $temp = Array();
    foreach($value as $key2 => $value2){
        array_push($temp,$value2);
    }
    if($temp[1] > $max)
    {
        $max = $temp[1];
    }
    $data_dic[date('Y-m-d',$temp[0])] = $temp[1];
}
//get last sunday and today
#获取最近的上周日
$last_sunday =strtotime("last sunday");
$today = strtotime("today");

//get the 52 week ago before the last sunday 
#获取上周日的52周之前
$firstday = strtotime("-52 week",$last_sunday);
#$firstday = strtotime("-1 day",$firstday);
//set the color index into Array
//算出color坐标
$color_array = Array();

//总贡献量
$total = 0;
//计算最长贡献时间
$begin = $fitstday;
$max_length = 0;
$now_count;
$the_begin_day = $firstday;
$the_end_day = $firstday;

//make the color Array
//制作color坐标
for($now = $firstday; $now < $today; $now = strtotime("+1 day",$now)){

    if(!array_key_exists(date('Y-m-d',$now),$data_dic))
    {
        //如果为0，记录终点
        $the_end_day = $now;
        //重置count
        $now_count = 0;

        array_push($color_array,0);
    }
    else{
        //如果是第一天则记录起点
        if($now_count == 0)
        {
            $the_begin_day = $now;
        }
        //如果有效贡献则增加贡献天数
        $now_count = $now_count + 1;
        if($now_count >= $max_length)
        {
            $max_length = $now_count;
        }

        $contri = $data_dic[date('Y-m-d',$now)];
        $total = $contri + $total;
        array_push($color_array,colorIndex($contri,$max));
    }
}
//如果终点小于起点，判断终点为今天
if($the_end_day < $the_begin_day)
{
    $the_end_day = $today;
}

include("precontext.php");
print(output($color_array, $color_set).output_month($month_set,$firstday));

?>