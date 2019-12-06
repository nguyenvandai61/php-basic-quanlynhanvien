<?php
	$IDNV=$_REQUEST['txtIDNV'];
	$hoten=$_REQUEST['txtHoten'];
	$IDPB=$_REQUEST['selIDPB'];
	$diachi=$_REQUEST['txtDiachi'];
	$link=mysqli_connect("localhost", "root", "") or die("Could not connect: ".mysqli_error());
	mysqli_set_charset($link, 'utf8');
	$link_selected=mysqli_select_db($link, "DULIEU");
	$rs=mysqli_query($link, 'SELECT FROM NHANVIEN WHERE IDNV="'.$IDNV.'"');
	$row=mysqli_fetch_array($rs);
	if ($row==null)
		mysqli_query($link, 'INSERT INTO NHANVIEN (IDNV, Hoten, IDPB, Diachi) VALUES ("'.$IDNV.'", "'.$hoten.'", "'.$IDPB.'", "'.$diachi.'")');
	mysqli_free_result($rs);
	mysqli_close($link);
	header("Location: capnhat.php");
?>