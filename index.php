<?php
$num = rand(1,50);//获取1至50的随机数
$info = "";//提示信息
switch($num){
    case 1:
		$info = "恭喜你！中了一等奖！";
		break;
	case 2:
		$info = "恭喜你！中了二等奖！";
		break;
 	case 3:
		$info = "恭喜你！中了三等奖！";
		break;
	default:
		$info = "很遗憾！你没有中奖！";
}
 echo $info; //输出是否中奖
?>