<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตารางการเดินรถ</title>
</head>

<body>
	
	<div class="container">
		<div style="margin-top: 100px;"></div>
		<h4>ตารางการเดินรถ</h4>
		
		<div class="card CardBackground-1">
		  	<div class="card-body">
				ตารางการเดินรถ
				<div style="margin-bottom: 20px"></div>
<!--				<div class="borderline"></div>-->
				<table class="table">
				 	<thead>
						<tr>
						  	<th scope="col">ขบวน</th>
						  	<th scope="col">ชนิดขบวน</th>
						  	<th scope="col">สถานีต้นทาง</th>
							<th scope="col">เวลาออก</th>
							<th scope="col">ถึงสถานีพัก</th>
							<th scope="col">ออกสถานีพัก</th>
							<th scope="col">สถานีปลายทาง</th>
							<th scope="col">เวลาถึง</th>
						</tr>
				  	</thead>
					<tbody>
						<?php
							foreach($query->result_array() as $result) {
						?>
						<tr>
						  	<th scope="row"><?php echo $result['train_number'] ?></th>
						  	<td><?php echo $result['train_type'] ?></td>
						  	<td><?php echo $result['departure_station_name'] ?></td>
							<td><?php echo $result['departure_train_out_time'] ?></td>
							<td><?php echo $result['break_train_come_time'] ?></td>
						  	<td><?php echo $result['break_train_out_time'] ?></td>
							<td><?php echo $result['terminal_station_name'] ?></td>
							<td><?php echo $result['terminal_train_come_time'] ?></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
	
</body>
</html>