<?php

	if (isset($_GET['']))
	$error = "";
	$pb = $_GET['idpb'];
	echo $pb;
		$link = mysqli_connect("localhost", "root", "")
			or die("Khong the ket noi db");
		mysqli_set_charset($link, 'utf8');
		mysqli_select_db($link, "DULIEU");
			$sql = "select * from phongban where idpb = '$pb'";
			$result = mysqli_query($link, $sql);
					
			if($row = mysqli_fetch_assoc($result)) {
				$idpb = $row['IDPB'];
				$tenpb = $row["Tenpb"];
				$mota = $row["Mota"];
				$address = "xulicapnhat.php";
?>
					
					<form align="center" action="<?php echo $address;?>">
						<input type="hidden" name="idpb" value="<?php echo $idpb;?>"/>
						<table border="1" align="center">
							<tr>
								<td>
									Tên phòng ban
								</td>
								<td>
									<input type='text' name='tenpb' value='<?php echo $tenpb;?>'></br>
								</td>
							</tr>
							
							<tr>
								<td>
									Mô tả
								</td>
								<td>
									<input type='text' name='mota' value='<?php echo $mota;?>'/></br>
								</td>
							</tr>
						</table>
						<input type='submit' value='Xác nhận'/>
						<input type='submit' name='back' value='Trở về'/>	
						
				</form>


<?php
			}
		
		mysqli_close($link);	
?>
