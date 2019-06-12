<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>验证码</title>
</head>
<body>
	<form method="post" action="form.php">
	<label><input type="text" name="code" size="8" maxlength="4"></label>
		<label><img src="text.php" onclick="javascript:this.src='text.php?tm='+Math.random();"></label><br>
		<input type="submit" value="登录" name="send" />
		<input type="reset" value="重新输入" />
	</form>
</body>
</html>