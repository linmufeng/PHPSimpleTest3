<?php
$num = rand(1,50);//��ȡ1��50�������
$info = "";//��ʾ��Ϣ
switch($num){
    case 1:
		$info = "��ϲ�㣡����һ�Ƚ���";
		break;
	case 2:
		$info = "��ϲ�㣡���˶��Ƚ���";
		break;
 	case 3:
		$info = "��ϲ�㣡�������Ƚ���";
		break;
	default:
		$info = "���ź�����û���н���";
}
 echo $info; //����Ƿ��н�
?>