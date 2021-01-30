<?php

$color_set = Array();
$color_set[0] = 'var(--color-calendar-graph-day-bg)';
$color_set[1] = 'var(--color-calendar-graph-day-L1-bg)';
$color_set[2] = 'var(--color-calendar-graph-day-L2-bg)';
$color_set[3] = 'var(--color-calendar-graph-day-L3-bg)';
$color_set[4] = 'var(--color-calendar-graph-day-L4-bg)';

$month_set[0] = "Jan";
$month_set[1] = "Feb";
$month_set[2] = "Mar";
$month_set[3] = "Apr";
$month_set[4] = "May";
$month_set[5] = "Jun";
$month_set[6] = "Jul";
$month_set[7] = "Aug";
$month_set[8] = "Sep";
$month_set[9] = "Oct";
$month_set[10] = "Nov";
$month_set[11] = "Dec";

function output_month($month_set,$begin_index)
{
    $x = 55;
    $gap = 52;
    $begin = ((int)date('m',$begin_index) - 1);
    $week = ((int)date('d',$begin_index)/4);
    $str ='
    <text x="'.($x).'" y="15" class="month">'.($month_set[($begin) % 12]).'</text>';
    //如果不是第一周，不显示
    if($week != 1){
        $str = "";
    }
    //定位第一周坐标
    $x = $x - $gap * ($week % 4 - 1);
    $str2 = '
    <text x="'.($x + $gap).'" y="15" class="month">'.($month_set[($begin+1) % 12]).'</text>
    <text x="'.($x + $gap * 2).'" y="15" class="month">'.($month_set[($begin+2) % 12]).'</text>
    <text x="'.($x + $gap * 3).'" y="15" class="month">'.($month_set[($begin+3) % 12]).'</text>
    <text x="'.($x + $gap * 4).'" y="15" class="month">'.($month_set[($begin+4) % 12]).'</text>
    <text x="'.($x + $gap * 5).'" y="15" class="month">'.($month_set[($begin+5) % 12]).'</text>
    <text x="'.($x + $gap * 6).'" y="15" class="month">'.($month_set[($begin+6) % 12]).'</text>
    <text x="'.($x + $gap * 7).'" y="15" class="month">'.($month_set[($begin+7) % 12]).'</text>
    <text x="'.($x + $gap * 8).'" y="15" class="month">'.($month_set[($begin+8) % 12]).'</text>
    <text x="'.($x + $gap * 9).'" y="15" class="month">'.($month_set[($begin+9) % 12]).'</text>
    <text x="'.($x + $gap * 10).'" y="15" class="month">'.($month_set[($begin+10) % 12]).'</text>
    <text x="'.($x + $gap * 11).'" y="15" class="month">'.($month_set[($begin+11) % 12]).'</text>';
    
    $str3 = ' <text x="'.($x + $gap * 12).'" y="15" class="month">'.($month_set[($begin + 12) % 12]).'</text>';
    //如果是第一周，不显示
    if($week == 1){
        $str3 = "";
    }

    $str4 = '
    <text text-anchor="start" class="wday" dx="20" dy="27" style="display: none;">Sun</text>
    <text text-anchor="start" class="wday" dx="20" dy="41">Mon</text>
    <text text-anchor="start" class="wday" dx="20" dy="51" style="display: none;">Tue</text>
    <text text-anchor="start" class="wday" dx="20" dy="67">Wed</text>
    <text text-anchor="start" class="wday" dx="20" dy="76" style="display: none;">Thu</text>
    <text text-anchor="start" class="wday" dx="20" dy="93">Fri</text>
    <text text-anchor="start" class="wday" dx="20" dy="100" style="display: none;">Sat</text>';

    return $str.$str2.$str3.$str4;
}

function output($color_array, $color_set){

    $prefix = '';
    $postfix = '';

    $translate_x = 18;
    $x = 14;
    $length = count($color_array);
    $str = "";
    for ($i=27; $i<$length; $i = $i+7)
    {
		$str = $str.'<g transform="translate('.$translate_x .', 0)">';
		
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="0" fill="'.$color_set[$color_array[$i]].'"></rect>';
        if($i + 1 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="13" fill="'.$color_set[$color_array[$i+1]].'"></rect>';
        if($i + 2 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="26" fill="'.$color_set[$color_array[$i+2]].'"></rect>';
        if($i + 3 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="39" fill="'.$color_set[$color_array[$i+3]].'"></rect>';
        if($i + 4 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="52" fill="'.$color_set[$color_array[$i+4]].'"></rect>';
        if($i + 5 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="65" fill="'.$color_set[$color_array[$i+5]].'"></rect>';
        if($i + 6 >= $length)
        {
            break;
        }
		$str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="78" fill="'.$color_set[$color_array[$i+6]].'"></rect>';
		
		$str = $str.'</g>';
		
	    $translate_x = $translate_x + 14;
	    $x = $x-1;
		
    }
    return $prefix.$str.'</g>'.$postfix;
}
