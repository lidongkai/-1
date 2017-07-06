<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>多图片上传尝试</title>
	<script type="text/javascript" charset="utf-8" src="ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="lang/zh-cn/zh-cn.js"></script>
</head>
<body>
	
	<form method="post" action="2.php">
		标题:<input type="text" name="imgName">
		内容名:<input type="text" name="conName">
		<center>
				<script id="editor" type="text/plain" style="width:950px;height:350px;"></script>
			<script type="text/javascript">
				var ue = UE.getEditor('editor');
			</script>
		</center>	
		<input type="submit" value="提交">	
	</form>
</body>
</html>