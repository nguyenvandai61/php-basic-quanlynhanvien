<?php
	echo "hello";
	if(isset($_GET['back'])) {
		header('location: capnhat.php');
	}
	
	$idpb = $_GET['idpb'];
	$tenpb = $_REQUEST['tenpb'];
	$mota = $_REQUEST['mota'];
		$link = mysqli_connect("localhost", "root", "")
			or die("Khong the ket noi db");
		mysqli_set_charset($link, 'utf8');
		mysqli_select_db($link, "DULIEU");
			$sql = "UPDATE `phongban` SET `Tenpb` = '$tenpb', `Mota` = '$mota' WHERE `phongban`.`IDPB` = '$idpb'";
			$result = mysqli_query($link, $sql);
			
		echo $sql;
		mysqli_close($link);
		header('location: capnhat.php');
		
?>
