<?php
	$link = mysqli_connect('localhost','root','') or die('Could not connect:'.mysqli_error);
	mysqli_select_db($link,'DULIEU');
	mysqli_set_charset($link,'utf8');
	
?>

	<form method='post' id='userform' action='xulyxoa.php'>
	<table border ="1" width="100%">
	<caption><span style='font-weight:bold'>Dữ liệu phòng ban</span></caption>
	<tr>
			<th>IDNV</th>
			<th>Họ tên</th>
			<th>IDPB</th>
			<th>Địa chỉ</th>
			<th>Xóa</th>
	</tr>


<?php	
	$rs = mysqli_query($link,"SELECT * FROM nhanvien");
	while($row = mysqli_fetch_assoc($rs)){
		$ma = $row{"IDNV"};
		$ten = $row{"Hoten"};
		$pb = $row{"IDPB"};
		$diachi = $row{"Diachi"};
		$address = "xulyxoa.php?idnv=".$ma;

		echo "<tr>
			<td>{$ma}</td>
			<td>{$ten}</td>
			<td>{$pb}</td>
			<td>{$diachi}</td>
			<td><input type='checkbox' id='checkbox' name='check[]' value=$ma><a href=$address>xxx</a></td>
		</tr>";

	}
	echo "<tr>
			<td colspan='5' align='right'><input type='submit' name='xoa' value='Xóa' id='xoa'></td>
		</tr>";
	echo "</table>";
	echo "</form>";
	mysqli_free_result($rs);
	mysqli_close($link);

?>