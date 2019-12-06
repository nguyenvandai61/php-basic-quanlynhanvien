<?php
	$link=mysqli_connect("localhost", "root", "") or die("Could not connect: ".mysqli_error());
	$link_selected=mysqli_select_db($link, "DULIEU");
	$rs=mysqli_query($link, "SELECT IDPB FROM PHONGBAN");
	echo
		'<form method="post" action="XulichenthongtinNV.php">
			<table>
				<caption>Thêm thông tin nhân viên</caption>
				<tr>
					<td>IDNV:</td>
					<td><input type="text" name="txtIDNV"></td>
				</tr>
				<tr>
					<td>Họ tên:</td>
					<td><input type="text" name="txtHoten"></td>
				</tr>
				<tr>
					<td>IDPB:</td>
					<td><select name="selIDPB">';
	while ($row=mysqli_fetch_array($rs))
		echo '<option value="'.$row['IDPB'].'">'.$row['IDPB'].'</option>';
	echo
		'			</select></td>
				</tr>
				<tr>
					<td>Địa chỉ:</td>
					<td><input type="text" name="txtDiachi"></td>
				</tr>
			</table>
			<table>
				<tr>
					<td><input type="submit" value="Chèn" name="chen"></td>
					<td><input type="button" value="Reset"></td>
				<tr>
			</table>
		';
	mysqli_free_result($rs);
	mysqli_close($link);
?>