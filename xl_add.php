<?php 
	
	require 'connect.php';

	$magv= $_POST['magv'];
	$username = $_POST['username'];

	$query = "SELECT * FROM `user` WHERE magv = '$magv'";

	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	if ($row) {
		echo "
 	<script type='text/javascript'>
 		alert('Mã giảng viên hoặc tên đăng nhập đã tồn tại mời nhập lại');
 	
 	</script>";

 	

		# code...
	}

	
	



	

//Đóng database
$conn->close();
 ?>
