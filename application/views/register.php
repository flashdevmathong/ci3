<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Document</title>
</head>
<body>
	       <div class="card">
	
		   <div class="card-header">
			    <h3>register Form</h3>
				 <?php
				 if($this->session->flashdata('status'))
				 { 
				 ?>
				 <div class="alert alert-success">
				  <?= $this->session->flashdata('status')?>
				 </div>
				<?php
                 }
		    	?>
			</div>
		
		    <div class="card-body">
			      <form action="<?= base_url('register')?>" method="POST">
			            <div class="row">
						 <div class="col-md-6">
						   <label for="">First name</label>
						   <input type="text" name="first_name" class="form-control" value="<?= set_value('first_name'); ?>">
						   <small><?=  form_error('first_name')?></small>
						 </div>
						 <div class="col-md-6">
						   <label for="">Last Name</label>
						   <input type="text" name="last_name" class="form-control" value="<?= set_value('last_name'); ?>"> 
						   <small><?=  form_error('last_name')?></small>
						 </div>
						 <div class="col-md-6">
						   <label for="">Email <Address></Address></label>
						   <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>">
						   <small><?=  form_error('email')?></small>
						 </div>
						 <div class="col-md-6">
						   <label for="">Password</label>
						   <input type="password" name="password" class="form-control" value="<?= set_value('password'); ?>">
						   <small><?=  form_error('password')?></small>
						 </div>
						 <div class="col-md-6">
						   <label for="">Confirm Password</label>
						   <input type="password" name="cpassword" class="form-control" value="<?= set_value('cpassword'); ?>">
						   <small><?=  form_error('cpassword')?></small>
						 </div>
						 <div class="col-md-12">
					
						   <input type="submit" class="btn btn-primary px-5 mt-2">
						 </div>
						</div>
						</form>
			</div>
		   </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

