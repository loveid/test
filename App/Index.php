<?php
	header("Content-Type: text/html; charset=utf-8");
	echo '类:'.$_GET['app'].'<br />方法:'.$_GET['act'];
	echo '<br />传输的数据：<br />';
	$json = $_GET['json'];
	$json = json_decode($json,true);
	print_r($json);
	//访问地址
	//http://127.0.0.1:8888/test/User/userInfo/{"username":"zhangxu","userpwd":"123456"}/
	
	$a = array(
		'aaa'=>'123',
		'bbb'=>'456',
		'ccc'=>'789',
		'ddd'=>'000'
	);
	
	

asd($a);

function asd($array){
	extract($array);
	echo $aaa;
}	
?>