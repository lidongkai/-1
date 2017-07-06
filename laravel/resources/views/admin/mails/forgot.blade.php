<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>忘记密码</title>
</head>
<body>
	<form action="{{ url('/admin/sendemail') }}" method="post">
		{{ csrf_field() }}
		邮箱:<input type="email" name="email" value="{{ old('email') }}"><br>
		<button>找回密码</button>
	</form>
</body>
</html>