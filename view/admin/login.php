<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
      <link rel="stylesheet" href="<?php echo "{$url}asset/css/login_admin.css" ?>">
      <link rel="shortcut icon" href="<?=$url."asset/img/favicon.png"?>">
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1><img src="<?php echo "{$url}asset/img/logo.png" ?>" alt=""></h1>
			</div>

			<div class="login-form">
				<form action="" method="post">
					<div class="control-group">
					<input type="text" class="login-field" name="username" placeholder="username" id="login-name" autofocus="">
					<label class="login-field-icon fui-user" for="login-name"></label>
					</div>

					<div class="control-group">
					<input type="password" class="login-field" name="password" placeholder="password" id="login-pass">
					<label class="login-field-icon fui-lock" for="login-pass"></label>
					</div>

					<button class="btn btn-primary btn-large" name="tombol" type="submit">Login</button>
					<!-- <a class="btn btn-primary btn-large btn-block" href="" name="tombol">Login</a> -->
				</form>
			</div>
		</div>
	</div>
</body>
  
  
</body>
</html>
