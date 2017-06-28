##二期项目CMS管理系统编码规范

###一. 代码规范
	   为了本次项目代码的工整和标准化，保证开发的有效性和合理性，使我们的代码看起开高大上，指定此规范。

       1.文件格式
	   对于只含有 php 代码的文件，我们将在文件结尾处忽略掉 "?>" 。这是为了防止多余的空格或者其它字符影响到代码。
	
       2.缩进
	   使用TAB键进行缩进，每个TAB键位4个空格。

	   3.变量命名
	   多单词命名均按照驼峰命名法执行，且尽量有关联 

	   4.全局常量命名
		使用英文名词、动词命名，所有单词字母均为大写字母，单词之间使用_分割。
		实例：
		define('HOST','localhost');

	   5.数组变量命名
		使用英文名词、动词命名，所有单词字母均为小写字母，单词后均拼接_array。
		实例：
			$user_array = array();

	   6.对象变量命名
		使用英文名词、动词命名，所有单词字母均为小写字母，单词后拼接_obj。
		实例：
			$user_obj = new userLogin();

	   7.对象变量命名
		php代码编写要求所有的变量均需要先申明后使用，否则会有错误信息，对于数组，在使用一个不确定的key时，比如先进行isset()的判断，然后再使用；比如下面的代码：
		$array ＝ array();
		$var ＝ isset($array[3]) ? $array[3] : “”；

	   8.函数声明方式
		使用英文名词、动词命名，首字母大写，多单词以驼峰法命名，声明每个传参数据类型、含义，函数方法功能。
		实例：
		
		/**
		 * 随机值
		 * @param init min 最小值 
		 * @param init max 最大值
	     */
		function rand(min,max)
		{
			return mt_rand(min,max);
		}

	 
	   9.大括号 {} 使用规则
		大括号放于关键词后方并换行
		实例：
		if($res)
		{
			...	
		}

	   10.逻辑注释
		  逻辑语句注释常用 // ，多行注释使用 /*	*/;
		实例： 
		
		// 检测结果
		if（$res == true）
		{
			...
		}

		/** 检测结果是否存在，不存在
		进行跳转操作
		 */
		if($res == false)
		{
			...
		}
	   11.namespace 以及 use 声明
		namespace 声明后 必须 插入一个空白行。
		
		所有 use 必须 在 namespace 后声明。
		
		每条 use 声明语句 必须 只有一个 use 关键词。
		
		use 声明语句块后 必须 要有一个空白行。
		
		例如：
		
		<?php
		namespace Vendor\Package;
		
		use FooClass;
		use BarClass as Bar;
		use OtherVendor\OtherPackage\BazClass;
		
		// ... additional PHP code ...
	  
###二. 程序文件名 目录名

	   1.文件命名
		使用英文名词、动词命名，所有单词字母均为小写字母。
		实例：
			index.php
	  
       2.目录命名
	 	使用英文名词、动词命名，所有单词字母均为小写字母或首字母大写。
		实例：
			admin Admin 

       3.类文件命名
	   类文件都是以“.class.php“为后缀，且类文件名只允许字母，使用驼峰法命名，并且首字母大写
	   例如：DbMysql.class.php