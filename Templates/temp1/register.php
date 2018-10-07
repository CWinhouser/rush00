<html>
	<meta charset: UTF-8>
	<body>
		<link rel="stylesheet" href="form.css">
		<form action="../insertuser.php" method="POST">
			<h2>Sign Up</h2>
			<p>
			<label for="username" class="floatLabel">Username</label>
			Username: <input name="username" type="text">
			</p>
			<p>
			<label for="password" class="floatLabel">Password</label>
			Password: <input id="password" name="password" type="password">
			</p>
			<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password">
			</p>
			</p>
			<p>
			<input type="submit" value="Create My Account">
			</p>
		</form>
		</body>
</html>
