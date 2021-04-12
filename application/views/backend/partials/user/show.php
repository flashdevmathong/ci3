

					<div class="card">
              <div class="card-header">
                <h3 class="card-title">ข้อมูลผู้ใช้งาน</h3>
				<?php
				 	if($this->session->flashdata('status')){
						echo "
							<div class='alert alert-success'>
								<h4>Success!</h4> 
								<p>You selected: ".$this->session->flashdata('status')."</p>
							</div>
						";
	 
					}
				
				?>
								<a href="<?= base_url('useradd')?>" class="btn btn-primary float-right">เพิ่ม</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>ชื่อผู้ใช้งาน</th>
                    <th>แผนก</th>
                    <th>ระดับ</th>
					<th>รูป</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
					<?php
					foreach ($listUser as $value) 
					{
						switch ($value->dep) {
							case "1":
								$dep = "ตลาด";
								break;
							case "2":
								$dep = "วิศวกรรม";
								break;
							case "3":
								$dep = "ผลิต";
								break;
							case "4":
								$dep = "บัญชี";
								break;
							case "5":
								$dep = "โฟร์แมน";
								break;
							case "6":
								$dep = "ไอที";
								break;
							default:
								$dep = "ไม่ระบุ";
						}
					?>
                			  <tr>
								<td><?= $value->name?></td>
								<td><?= $value->surname?></td>
								<td><?= $value->musername?></td>
								<td><?= $dep?></td>
								<td><?= $value->mlevel?></td>
								<td>
								  <img src="<?=base_url('dist/img/'.$value->picture.'')?>" alt="" width="50">
								</td>
								<td>
									<a href="<?= base_url('useredit/'.$value->mid)?>" class="btn btn-warning">แก้ไข</a>
									<a href="<?= base_url('userdelete/'.$value->mid.'/'.$value->picture)?>" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this item?');" >ลบ</a>
									<a href="<?= base_url('userpdf')?>" class="btn btn-primary">PDF</a>
									<a href="<?= base_url('userexcel')?>" class="btn btn-excel">Excel</a>
								</td>
                  			 </tr>
					<?php
						}	
					?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

		
		
		

	
  