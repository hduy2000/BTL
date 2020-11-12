
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <?php 
    require'connect.php';
  	$id=$_GET['id'];

  	




     ?>
    <body>
    <form  action="user.php">
 		<div class="form-group">
		    <label for="email">Họ và tên:</label>
		    <input type="text" class="form-control" readonly>
		</div>
		<div class="form-group">
		    <label for="email">Địa chỉ:</label>
		    <input type="text" class="form-control" readonly>
		</div>
		<div class="form-group">
		    <label for="email">Số điện thoại:</label>
		    <input type="text" class="form-control" readonly>
		</div>
		<div class="form-group">
		    <label for="email">Email:</label>
		    <input type="text" class="form-control" readonly>
		</div>
		<a href="suagiaoan.php?id=<?php echo $id ?>" type="button" class="btn btn-info">Quản lý giáo án</a>
		
		<a href="suathongtin.php?id=<?php  echo $id ?>" type="button" class="btn btn-info">Sửa thông tin</a>
		<a href="themdetai.php?id=<?php echo $id ?>" type="button" class="btn btn-info">Thêm đề tài</a>
	</form>
    </body>
</html>