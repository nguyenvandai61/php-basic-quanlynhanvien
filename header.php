<html>
<head>
	<style> 
		#login-wrapper {
			display: inline;
			
		}
		
		#login-form {
			display: inline-block;
			float: right;
		}
		
		#message-hello {
			display: inline-block;
			background-color: #FFFFFF;
			float: right;
			padding: 10px;
		}
	</style>
</head>
		<body style='background-color: #171626 '>
			<img src='logo.jpg' height='95%'/>
			<?php 
				session_start();
				if (!isset($_SESSION['username'])) {
					
				 echo '<div id="login-wrapper">
							<iframe id="login-form" src="login.php"  scrolling="no" frameborder="NO">
						</iframe>
						<div style="clear: both"></div>
						</div>
						';
				 echo '';
				}
				else {?>
				
				<p id="message-hello"> Xin chào, 
						<?php echo $_SESSION['username']?> 
						<a href='xulidangxuat.php' target='_top' onclick=""> Thoát</a>	
				</p>
					
			<?php
					
				}
			?>
		</body>
		

</html>