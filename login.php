
<html >
	<head>
		<title> Login </title>
		<style>
			.group {
				display: 'inline';
				margin-bottom: 5px;
			}
			
			#sign-in-form {
				background-color: #a5b6d1;
				padding: 20;
				
				border-radius: 8px;
			}
			.sign-in-txt-input {
				border-radius: 4px;
			}
			#err-login {
				margin: 0;
				color: red;
				font-size: 10pt;
			}
		</style>
	</head>
	 <body >
			<form class="sign-in-htm" id="sign-in-form" action="xulilogin.php" method="POST" target='_top'>
				<div class="group">
					<label for="user" class="label">Tài khoản </label>
					<input class="sign-in-txt-input" id="user" name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Mật khẩu&nbsp</label>
					<input class="sign-in-txt-input" id="pass" name="password" type="password" class="input" data-type="password">
				</div>
			
				<div class="group">
					<input type="submit" class="button" value="Đăng nhập">
				</div>
				<p id='err-login'>
					<?php
						session_start();
						if (isset($_SESSION['message']))
						{
							echo $_SESSION['message'];
							unset($_SESSION['message']);
						}
					?>
				</p>
				<div class="foot-lnk">
					<a href="#forgot">Quên mật khẩu?</a>
				</div>
			</div>
			
	</div>
		</div>
	</body>
</html>