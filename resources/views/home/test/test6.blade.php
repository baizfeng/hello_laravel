<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单提交</title>
</head>
<body>
	<form action="{{route('test7')}}" method="post">
		姓名：<input type="text" name='name' value="" placeholder="请输入姓名"/>
		<input type="submit" value="提交"/>
	</form>
</body>
</html>