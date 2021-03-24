<?php
use frontend\models\Prayer;
use frontend\models\User;
	$request=Prayer::find()->all();	
?>
<!DOCTYPE html>
<html>
<head>
	<title>prayer requests</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container card shadow">
	<div class="row mt-4" id='create-prayer'>
		<a class='btn btn-success' href='create' >ADD A PRAYER REQUEST</a>
	</div>
		<div class="row">
		<?php foreach($request as $single) {?>
			<div class="col-lg-4 col-xs-12 text-center social-box">
					<div class="box">
                        <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3><?=$single->title?></h3>
						</div>
						<div class="box-text">
							<span><?=$single->description?></span>
						</div>
					</div>
			</div>
		<?php }?>
			
		</div>
	</div>
</body>
</html>