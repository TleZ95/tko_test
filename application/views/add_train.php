<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มขบวน</title>
</head>

<body>
	
	<div class="container">
		<div style="margin-top: 100px;"></div>
		<h4>เพิ่มขบวน</h4>
		
		<form action="form_add_train" method="post">
			
			<div class="card CardBackground-1">
				<div class="card-body" style="padding-bottom: 10px">
					เพิ่มขบวน
					<div class="borderline"></div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="Input1">หมายเลขขบวน</label>
								<input type="number" class="form-control" id="Input1" placeholder="หมายเลขขบวน" name="train_id">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="Select1">ชนิดขบวน</label>
								<select class="form-control" id="Select1" name="train_type">
								  	<option>รถธรรมดา</option>
								  	<option>รถดีเซลราง</option>
								  	<option>รถด่วนดีเซลราง</option>
								  	<option>รถดีเซลราง</option>
								</select>
						  	</div>
						</div>
					</div>
				</div>
			</div>
			
			<div align="center">
				<div style="max-width: 300px">
					<button type="submit" class="Button-Style btn btn-block btn-success">เพิ่มข้อมูล</button>
				</div>
			</div>
			
		</form>
		
	</div>
	
</body>
</html>