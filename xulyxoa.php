<?php
	$check;
	if (isset($_POST['check'])) 
		{ $check=implode(", ", $_POST['check']);
		print_r($check);
		$check = ($_POST['check']); 
		$link = mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL MySQL");
		mysqli_query($link,"SET CHARACTER SET 'utf8'");
		mysqli_select_db($link,"DULIEU");
	 foreach ($check as $check=>$idnv) {
             $sql = "DELETE FROM nhanvien WHERE IDNV = '$idnv' ";
			echo $sql;
			$result = mysqli_query($link,$sql);
     }
	}
	header('location:xoa.php'); 
	
?>
<script>
	 let checkboxes = document.getElementById('checkbox');
	  document.getElementById('checkbox').onchange = function () {
	 for (let item of checkboxes) {
               
            }
</script>