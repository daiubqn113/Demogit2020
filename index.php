<?php $j=1; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.4.1-dist/css/style.css">
	<style>
		.img{
			width: 500px;
			height: 300px;
		}
		.img img{
			width: 50%;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php for ($i=1; $i < 11 ; $i++) { ?>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<a href="" class="thumbnail" >
					<div class="img"><img src="img/anh<?php echo $i; ?>.jpg"  alt=""></div>
					<h4>Hình Ảnh <?php echo $i; ?></h4>
				</a>
				<button type="submit" class="btn btn-info" data-toggle="modal" data-target="#exampleModalable-<?php echo $i;?>">Click me</button>
			</div>

			<div class="modal fade" id="exampleModalable-<?php echo $i;?>" role = "dialog">
				<div class="modal-dialog" role = "document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 >Hình ảnh <?php echo $i; ?></h5>
									        
						</div>
						<div class="modal-body">
							<p>Infomation images.</p> 
							<img src="img/anh<?php echo $i;?>.jpg" alt="">
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
	<?php } ?>
	</div>


		<script src="bootstrap-3.4.1-dist/js/jquery.min.js" type="text/javascript"></script>
		<script src="bootstrap-3.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
	

