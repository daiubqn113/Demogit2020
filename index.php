<?php 
	require("config.php");

	$district = mysqli_query($conn, "Select * from nv4_vi_location_district");
	$province = mysqli_query($conn, "Select * from nv4_vi_location_province");
	$ward = mysqli_query($conn, "Select * from nv4_vi_location_ward");

	if($_SERVER["REQUEST_METHOD"] == "POST"){
	$error = array();
		//Validate
    if(empty($_POST['name'])){
        $error['name'] = 'Bạn chưa nhập tên';
    }else{
    	$name = $_POST['name'];
    }

    if(empty($_POST['phone'])){
        $error['phone'] = 'Bạn chưa nhập số điện thoại';
    }else{
    	$phone = $_POST['phone'];
    }

    if(empty($_POST['email'])){
        $error['email'] = 'Bạn chưa nhập email';
    }else{
    	$email = $_POST['email'];
    }

    if(empty($_POST['province'])){
        $error['province'] = 'Bạn chưa nhập Tỉnh';
    }else{
    	$province = $_POST['province'];
    }

    if(empty($_POST['district'])){
        $error['district'] = 'Bạn chưa nhập Quận';
    }else{
    	$district = $_POST['district'];
    }

	if(empty($_POST['ward'])){
        $error['ward'] = 'Bạn chưa nhập Xã';
    }else{
    	$ward = $_POST['ward'];
    }
		
    $query = mysqli_query($conn, "INSERT INTO information (name, phone, email, province, district, ward) values 
    	('$name', '$phone', '$email', '$province', '$district', '$ward')");
		echo "<pre>";
		print_r("INSERT INTO information (name, phone, email, province, district, ward) values ('$name', '$phone', '$email', '$province', '$district', '$ward')");	
		echo "</pre>";

		if($query){
			header('location: form_tinh_thanh.php');
      }else{
         mysqli_error($conn);
      }

}

    


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.4.1-dist/css/style.css">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="" method="POST" role="form">
				<legend>Mời bạn điền thông tin</legend>
			
				<div class="form-group">
					<label for="">Họ và tên</label>
					<input type="text" class="form-control" name="name" placeholder="Mời bạn nhập họ tên">
					<span class="alert-success">
						<?php echo isset($error['name']) ? $error['name'] : ''; ?>
					</span>
				</div>
				<div class="form-group">
					<label for="">Điện thoại</label>
					<input type="text" class="form-control" name="phone" placeholder="Mời bạn nhập điện thoại">
					<span class="alert-success">
					<?php echo isset($error['phone']) ? $error['phone'] : ''; ?>
					</span>
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Mời bạn nhập email">
					<span class="alert-success">
					<?php echo isset($error['email']) ? $error['email'] : ''; ?>
					</span>
				</div>
				<div class="form-group">
					<label for="">Địa chỉ</label>
					<div class="form-group">
						<div class="col-md-4">
						<select name="province" id="input" class="form-control" required="required">
						<option value="">--Chọn tỉnh thành--</option>
							<?php foreach ($province as $key => $TT) :?>
							<option value="<?php echo $TT['id']?>"><?php echo $TT['title'] ?></option>
						<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-4">
						<select name="district" id="input" class="form-control" required="required">
						<option value="">--Chọn Quận/Huyện--</option>
						<?php foreach ($district as $key => $QH) :?>
							<option value="<?php echo $QH['id']?>"><?php echo $QH['title'] ?></option>
						<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-4">
						<select name="ward" id="input" class="form-control" required="required">
						<option value="">--Chọn Xã--</option>
							<?php foreach ($ward as $key => $X) :?>
								<option value="<?php echo $X['id']?>"><?php echo $X['title'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					</div>
				</div>
			
				<div class=""><hr/></div>
			
				<div class="container">
					<div class="row">
						<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Lưu</button>
					</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="bootstrap-3.4.1-dist/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap-3.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
	

