<?php
	//MVC流程
	//浏览者->1、调用控制器，对其发出指令
	//控制器->2、按照指令选取一个合适的模型
	//模型->3、按照控制器的指令取出数据
	//控制器->4、按照指令取出相对的视图
	//视图->5、把第三步取到的数据按照客户的要求的样子显示出来
	
	require_once('testController.class.php');
	require_once('testModel.class.php');
	require_once('testView.class.php');
	
	//浏览者->1、调用控制器，对其发出指令
	$testController =new testController();	
	$testController->show();
	

?>