<?php

// 保存变量，给后续程序使用
$argc = count($argv) ;

// 输入错误处理，提醒用户使用方法
if($argc<2) {
	echo 'usage: php cli-demo.php {action} {parametors}' , PHP_EOL ;
	exit();
}

// 确定用户想要访问的功能
$action = $argv[1] ;
switch($action) {
	case 'wordsort' :
		// 声明一个用来保存用户输入参数的数组
		$wordCollection = [] ;
		// 循环保存用户输入单词到数组变量
		for ($i=2; $i<$argc; $i++) {
			$wordCollection[] = $argv[$i] ;
		} 
		// 排序
		sort($wordCollection) ; // sort 是PHP内核提供的排序函数，字符串会按照字典顺序从小到大排序
		// 输出结果，循环输出排序后的结果
		echo sprintf('%d words:'.PHP_EOL, count($wordCollection)); // count 函数统计数组成员数量
		foreach($wordCollection as $_item) {
			echo $_item,PHP_EOL;
		}
		break;
	default:
		echo 'error: action not found',PHP_EOL;
		
}

// 小细节：CLI 程序最好在程序的最后输出一个特定信息，以标志程序执行完成
echo 'done',PHP_EOL;