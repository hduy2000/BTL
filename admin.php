<?php 
	require('connect.php');

	$query = "SELECT * FROM `user`";
	$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
	</style>
	<title>Quản lý cán bộ</title>
	<meta charset="utf-8">
	<style type="text/css">


	*{
			margin: 0;
		}
		.img{
			height: 50px;
			width: 50px;
		}
	</style>
</head>
<body>
		<a style="display:block;margin-bottom:10px;margin-top:10px" href="./add.php">Thêm giảng viên</a>
		<br>
		<table border="1" style="border-spacing: 0">
			<tr>
		        <th>Mã</th>
		        <th>Họ và tên</th>
		        <th>Giới tính</th>
		        <th>Địa chỉ</th>
		        <th>Số điện thoại</th>
		        <th>Email</th>
		        <th>username</th>
		    	<th>password</th>
		       	<th>Action</th>
		    </tr>
		    <?php 
		    	if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
				        <td>$row[magv]</td>
				        <td>$row[name]</td>
				        <td>$row[sex]</td>
				        <td>$row[addr]</td>
				        <td>$row[phone]</td>
				        <td>$row[email]</td>
				        <td>$row[username]</td>
				        <td>$row[password]</td>
				        <td> <a href='update.php?id=$row[magv]'>Sửa</a> | <a href='delete.php?id=$row[magv]'>Xóa</a></td>
			   		</tr>
				";
				}
			}
		    ?>
		</table>
</body>
</html>