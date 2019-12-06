<?php
	$error = "";
	
		$error = "";
		$link = mysqli_connect("localhost", "root", "")
			or die("Khong the ket noi db");
		mysqli_set_charset($link, 'utf8');
		mysqli_select_db($link, "DULIEU");
			$sql = "select * from nhanvien";
			$result = mysqli_query($link, $sql);
			
			echo "<table border='1px' width='100%'>";
			echo "<caption> Dữ liệu bảng nhân sự </caption>";
			echo "<tr>
					<th>Id</th>
					<th>Họ tên</th>
					<th>Id phòng ban</th>
					<th>Địa chỉ</th>
				</tr>";
			
			while($row = mysqli_fetch_assoc($result)) {
				$idnv = $row['IDNV'];
				$hoten = $row["Hoten"];
				$idpb = $row["IDPB"];
				$diachi = $row["Diachi"];
				echo "<tr>
						<td>{$idnv}</td>
						<td>{$hoten}</td>
						<td>{$idpb}</td>
						<td>{$diachi}</td>
					</tr>";
			};
			echo "</table>";
	
		
		
		mysqli_close($link);
	
?>
