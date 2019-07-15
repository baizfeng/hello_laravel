<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		//jQuery的页面载入事件
		$(function() {
			//给按钮绑定点击事件
			$('#btn').click(function() {
				// 发送ajax请求
				$.get('/home/test/test17',function (data) {
					console.log(data)
				},'json');
			})
		});
	</script>
</head>
<body>
	<input type="button" value="点我" id="btn"/>
</body>
</html>
