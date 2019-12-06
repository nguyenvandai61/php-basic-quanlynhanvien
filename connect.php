<?php
	$error = "";
	
	function login($user, $pass) {
		$error = "";
		$link = mysqli_connect("localhost", "root", "")
			or die("Khong the ket noi db");
		mysqli_set_charset($link, 'utf8');
		mysqli_select_db($link, "DULIEU");
		
		// Check login
		$sql = "select * from user where username = '$user'
				and password = '$pass'";
		$result = mysqli_query($link, $sql);
		$count = mysqli_num_rows($result);
		
		// Login thành công
		if ($count == 1) {
			header("Location: http://google.com.vn");
			$sql = "select * from Table1";
			$result = mysqli_query($link, $sql);
			
			echo "<table border='1px' width='100%'>";
			echo "<caption> Dữ liệu bảng nhân sự </caption>";
			echo "<tr>
					<th>Mã số</th>
					<th>Họ tên</th>
					<th>Ngày sinh</th>
					<th>Nghề nghiệp</th>
				</tr>";
			
			while($row = mysqli_fetch_assoc($result)) {
				$maso = $row['maso'];
				$hoten = $row["hoten"];
				$ngaysinh = $row["ngaysinh"];
				$nghenghiep = $row["nghenghiep"];
				echo "<tr>
						<td>{$maso}</td>
						<td>{$hoten}</td>
						<td>{$ngaysinh}</td>
						<td>{$nghenghiep}</td>
					</tr>";
			};
			echo "</table>";
		}
		else {
			$error = "Tài khoản và mật khẩu không hợp lệ!";
		}
		
		
		mysqli_close($link);
	}
?>
