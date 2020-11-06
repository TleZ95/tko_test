<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มการเดินรถ</title>
</head>

<body>
	
	<div class="container">
		<div style="margin-top: 100px;"></div>
		<h4>เพิ่มการเดินรถ</h4>
		
		<form action="form_add_train_table" method="post">

			<div class="card CardBackground-1">
				<div class="card-body" style="padding-bottom: 10px">
					ขบวนรถ
					<div class="borderline"></div>
					<div class="form-group">
						<label for="Select1">หมายเลขขบวน</label>
						<select class="form-control" id="Select1" name="train_id">
							<?php
								foreach($query->result_array() as $result) {
							?>
							<option><?php echo $result['train_number'] ?></option>
							<?php
								}
							?>
						</select>
					</div>
				</div>
			</div>
			
			<div class="card CardBackground-1">
				<div class="card-body" style="padding-bottom: 10px">
					สถานีต้นทาง
					<div class="borderline"></div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="Input1">ชื่อสถานี</label>
								<input type="text" class="form-control" id="Input1" placeholder="ชื่อสถานีต้นทาง" name="departure_station_name">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="Input1">เวลาออก</label>
								<input type="time" class="form-control" id="Input1" placeholder="หมายเลขขบวน" name="departure_train_out_time">
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="card CardBackground-1">
				<div class="card-body" style="padding-bottom: 10px">
					จุดพัก
					<div class="borderline"></div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="Input1">เวลาถึง</label>
								<input type="time" class="form-control" id="Input1" placeholder="หมายเลขขบวน" name="break_train_come_time">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="Input1">เวลาออก</label>
								<input type="time" class="form-control" id="Input1" placeholder="หมายเลขขบวน" name="break_train_out_time">
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="card CardBackground-1">
				<div class="card-body" style="padding-bottom: 10px">
					สถานีปลายทาง
					<div class="borderline"></div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="Input1">ชื่อสถานี</label>
								<input type="text" class="form-control" id="Input1" placeholder="ชื่อสถานีปลายทาง" name="terminal_station_name">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="Input1">เวลาออก</label>
								<input type="time" class="form-control" id="Input1" placeholder="หมายเลขขบวน" name="terminal_train_come_time">
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