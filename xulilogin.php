<?php
	session_start();
	ob_start();
	$message = '';
	$user = $_POST['username'];
	$pass = md5($_POST['password']);
	
	
	if ($user == '' || $pass== '') {
		$_SESSION['message'] = 'Nhập đầy đủ thông tin!';
		header('location: index.php');
		return;
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "do trong";
		$link = mysqli_connect("localhost", "root", "")
			or die("Khong the ket noi db");
			mysqli_set_charset($link, 'utf8');
			mysqli_select_db($link, "DULIEU");
			// Kiem tra admin
			$sql = "select * from admin";
			$result = mysqli_query($link, $sql);
			while(($row =  mysqli_fetch_assoc($result))) {
				echo $row['user'];
				if ($user == $row['username'] && $pass == md5($row['password'])) {
					$_SESSION["username"] = $user;
					echo $_SESSION["username"];
					header('location: index.php');
					mysqli_close($link);
					return;
				}
			}
			$_SESSION['message'] = 'Đăng nhập thất bại!';
			header('location: index.php');
		mysqli_close($link);
	}
	
	ob_end_flush();
?>