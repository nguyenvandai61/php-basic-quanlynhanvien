<?php
	$error = "";
		$link = mysqli_connect("localhost", "root", "")
			or die("Khong the ket noi db");
		mysqli_set_charset($link, 'utf8');
		mysqli_select_db($link, "DULIEU");
			$sql = "select * from phongban";
			$result = mysqli_query($link, $sql);
			
			echo "<table border='1px' width='100%'>";
			echo "<caption> Dữ liệu bảng phòng ban </caption>";
			echo "<tr>
					<th>Id</th>
					<th>Tên phòng ban</th>
					<th>Mô tả</th>
					<th>Cập nhật</th>
					<th>Danh sách nhân viên</th>
				</tr>";
			
			
			while($row = mysqli_fetch_assoc($result)) {
				$idpb = $row['IDPB'];
				$tenpb = $row["Tenpb"];
				$mota = $row["Mota"];
				
				$address1 = "form_capnhat_pb.php?idpb=$idpb";
				$address2 = "xemthongtinnvpb.php?pb='".$idpb."'";
				echo "<tr>
						<td>{$idpb}</td>
						<td>{$tenpb}</td>
						<td>{$mota}</td>
						<td><a href=$address1>...</a></td>
						<td>
							<a href=$address2>xxx</a>
						</td>
					</tr>";
			};
			echo "</table>";
	
		
		
		mysqli_close($link);
	
?>
