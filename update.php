<?php 
require 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM `user` WHERE id ='$id'");
$row=mysqli_fetch_assoc($query);
 ?>

<!DOCTYPE html>	
<html>
<head>
	<title>Editing MySQL Data</title>
	<link rel="stylesheet" href="style.css"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="wrap">
	<form method="POST" class="form" enctype="multipart/form-data" action="xl_update.php">
	<h2>Sửa thành viên</h2>
	<a href="admin.php">Trở về</a><br>

	
	<label for="name">Tên cán bộ:</label> <input type="text" value="<?php echo $row['name']; ?>" name='name'><br/>
	<label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br/>
	<label>Địa chỉ: <input type="text" value="<?php echo $row['addr']; ?>" name="addr"></label><br/>
	<label for="sex">Giới tính: </label>
	            <select name="sex">
	            	<option value="Nam">Nam</option>
    				<option value="Nữ">Nữ</option>
	            </select><br/>
	<label>Phone: <input type="text" value="<?php echo $row['sdt']; ?>" name="phone"></label><br/>
	<label>Username: <input type="text" value="<?php echo $row['username']; ?>" name="username"></label><br/>
	<label>Password: <input type="text" value="<?php echo $row['password']; ?>" name="password"></label><br/>

	
	<input type="submit" value="Lưu" name="update_user">
	</form>
</div>
</body>
</html>
