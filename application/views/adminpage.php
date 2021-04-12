<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Document</title>
</head>

<body>
	<div class="card">
		<div class="card-header">
			<h3>Page Admin</h3>
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
	          <h1>id : <?= $this->session->userdata('auth_user')['id'];?></h1>
		      <h1>First Name : <?= $this->session->userdata('auth_user')['first_name'];?></h1>
			  <h1>Last Name : <?= $this->session->userdata('auth_user')['last_name'];?></h1>
			  <h1>Emai : <?= $this->session->userdata('auth_user')['email'];?></h1>
			  <h1>role : <?= $this->session->userdata('auth_user')['role'];?></h1>
		</div>
	</div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
