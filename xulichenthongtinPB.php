<?php
	$IDPB=$_REQUEST['txtIDPB'];
	$ten=$_REQUEST['txtPB'];
	$mota=$_REQUEST['txtmota'];
	$link=mysqli_connect("localhost", "root", "") or die("Could not connect: ".mysqli_error());
	mysqli_set_charset($link, 'utf8');
	$link_selected=mysqli_select_db($link, "DULIEU");
	$rs=mysqli_query($link, 'SELECT FROM PhongBan WHERE IDPB="'.$IDNV.'"');
	$row=mysqli_fetch_array($rs);
	if ($row==null)
		mysqli_query($link, 'INSERT INTO PhongBan (IDPB, TenPB, Mota) VALUES ("'.$IDPB.'", "'.$ten.'", "'.$mota.'")');
	mysqli_free_result($rs);
	mysqli_close($link);
	header("Location: capnhat.php");
?>