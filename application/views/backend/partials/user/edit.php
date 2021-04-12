<div class="card card-default">
	<div class="card-header">
		<h3 class="card-title">แก้ไขผู้ใช้งาน</h3>
	</div>
	<?php
				if(validation_errors()){
		    		echo "
		    			<div class='alert alert-danger'>
			    			<h4>Error!</h4>
			    			<p>".validation_errors()."</p>
			    		</div>
		    		";
 
		    	}
 
		   
	    	?>
	<div class="card-body">
		<form action="<?= base_url('userupdate')?>" method="POST" enctype="multipart/form-data">
			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label>ชื่อจริง</label>
						<input class="form-control" name="name" value="<?=$name?>">

					</div>

				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>นามสุกล</label>
						<input class="form-control" name="surname" value="<?=$surname?>">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>ชื่อผู้ใช้งาน</label>
						<input class="form-control" name="musername" value="<?=$musername?>">
					
					</div>

				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>รหัสผ่าน</label>
						<input class="form-control" name="mpassword" value="<?=$mpassword?>">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>เบอร์โทร</label>
						<input class="form-control" name="tel" value="<?=$tel?>">
					
					</div>

				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>email</label>
						<input type="email" class="form-control" name="email" value="<?=$email?>">
					</div>
				</div>
           

				<div class="col-md-6">
					<div class="form-group">
						<label>แผนก</label>
						<select class="form-control" name="dep"  >
							<option >กรุณาเลือก</option>
							<?php
						
						foreach ($listdep as $key => $value)
							{
								if($dep == $value[0])
								{
									echo '<option value="'.$value[0].'" selected>'.$value[1].'</option>';
						        }
								else{
									echo '<option value="'.$value[0].'">'.$value[1].'</option>';
								}
							}
					?>

						</select>
					
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>ระดับ</label>
						<select class="form-control" name="mlevel" >
							<option>กรุณาเลือก</option>
							<?php
						      for ($i=1; $i <= 4 ; $i++) { 
						      if($mlevel == $i)
							  {
								echo '<option value="'.$i.'" selected>'.$i.'</option>';
							  }
							  else
							  {
								echo '<option value="'.$i.'">'.$i.'</option>';
				
							  }
						  }
				     	?>

						</select>
					
					</div>
				</div>
            
				<div class="col-md-12">
					<div class="form-group">
						<input type="file" name="picture"  value="<?=$picture?>">
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
					<input type="hidden" value="<?=$mid?>" name="mid">
					<input type="hidden" name="picture2" value="<?=$picture?>">
					<input type="submit" value="แก้ไขข้อมูล" class="btn btn-primary">
					</div>
				</div>


			</div>
		</form>
	</div>
</div>
