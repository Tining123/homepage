<?php

#用于预备HTML输出格式的文件

#返回循环内容
function print_list($class, $pic,$url,$title){
    $t1 = '<a href="'.$url.'" target="_blank">';
	$t2 = '		<div class="portfolio '.$class.'" data-cat="'.$class.'">';
	$t3 = '				<div class="portfolio-wrapper">				
							<img src="images/'.$pic.'"  alt="Image 2" />';
	$t4 = '					<div class="label">
							<div class="label-text">
								<p class="text-title">'.$title.'</p>';
	$t5 = '							<span class="text-category">'.$class.'</span>
							</div>
							<div class="label-bg"></div>
						</div>
					</div>
				</div>		
			</a>';
			
	return $t1.$t2.$t3.$t4.$t5;
}


#返回分类内容
function print_filter($type){
    $t1 = '<li><span class="filter" data-filter="'.$type.'">All</span></li> /';
}

#返回总的分类内容
function print_filter_all($arr){
    $length = count($arr);
    $type = "";
    for ($i=0; $i<$length; $i++)
    {
        $type = $type.$arr[0];
    }
    $t1 = '<li><span class="filter active" data-filter="'.$type.'">All</span></li> /';
	return $t1;
}

#输出APP页面循环内容
function print_app($pic,$url,$title){
	$t1 = '	<li>
				<a  href="'.$url.'" target="_blank">
					<img src="images/'.$pic.'"  alt="Image 2" />
					<p style="text-align:center; color:black">'.$title.'</p>
				</a>					
			</li>';
	return $t1;
}


?>