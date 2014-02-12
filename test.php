<?php
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	//Step1.获取JSON字符串
	$contents = file_get_contents("http://junda.100steps.net/booksearch/aaaaa");
	echo $contents;
	echo "<br/><br/><br/>";
	
	//Step2.接受一个 JSON 格式的字符串并且把它转换为 PHP 变量
	$object = json_decode($contents);
	print_r($object);

	//Step3.处理数据
	echo '<br/><br/>';
//	echo $object->results[1]->title;
?>