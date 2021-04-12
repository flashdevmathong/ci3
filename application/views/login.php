<!DOCTYPE html>
<html lang="en">

<head>
	<title>SNP POST TENSION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="dist/images/logo_snp.ico" />
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/util.css">
	<link rel="stylesheet" type="text/css" href="dist/css/main.css">

</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
	
				<form class="login100-form validate-form" action="<?= base_url('login')?>" method="POST">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					<?php
					if($this->session->flashdata('status'))
					{ 
					?>
						<div class="col-md-12">
							<div class="form-group">
					<div class="alert alert-danger">
					<?= $this->session->flashdata('status')?>
					</div>
					</div>
					</div>
					<?php
					}
					?>
					<div class="col-md-12">
						<div class="form-group">
							<label>UserName</label>
							<input type="text" name="musername" class="form-control" value="<?= set_value('musername'); ?>">
							<small ><?=  form_error('musername')?></small>
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" name="mpassword" class="form-control" value="<?= set_value('mpassword'); ?>">
							<small><?=  form_error('mpassword')?></small>
						</div>

						<button type="submit" class="btn btn-primary">เข้าระบบ</button>
					</div>
				</form>
				<div class="login100-more" style="background-image: url('dist/images/backgroup_snp.jpg');">
				</div>
			</div>
		</div>
	</div>

</body>
</html>
