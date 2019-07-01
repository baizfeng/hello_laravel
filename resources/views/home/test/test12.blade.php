<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="/home/test/test12" method="post">
		<p>姓名：<input type="text" name="name" value=""></p>
		<p>年龄：<input type="text" name="age" value=""></p>
		<p>邮箱：<input type="email" name="email" value=""></p>
		{{csrf_field()}}
		<input type="submit" value="提交">
	</form>
</body>
</html>
