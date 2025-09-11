<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
	  
	  <link href="aos-master/dist/aos.css" rel="stylesheet">
	<script src="aos-master/dist/aos.js"></script>

    <title>Web Design and Development</title>

	<style>
		.container-md , .container-fluid{ position:relative; }
		.buttonInsert{ position:absolute; right:12px; top:10px; }
	</style>
  </head>	
    <?php
  include('connect.php');
  $sql = "select * from employee e, department d where e.dep_id=d.dep_id";
  $query = $db -> query($sql);
  $row = $query -> num_rows;
  ?>
  <body>
<div class="container-lg container-fluid"  data-aos="fade-up" data-aos-duration="800">
	
	<h1>รายชื่อพนักงาน

	<button type="button" class="btn btn-sm btn-info">
  		จำนวน <span class="badge bg-secondary"><?php echo $row; ?></span> คน 
	</button>
	
	</h1>
	
	<table class="table table-striped mt-4"  data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
	  <thead class="table-primary">
		<tr>
		  <th scope="col">รหัสพนักงาน</th>
		  <th scope="col">ชื่อ นามสกุล</th>
		  <th scope="col">Email</th>
		  <th scope="col">เพศ</th>
		  <th scope="col">เบอร์มือถือ</th>
		  <th scope="col">แผนก</th>
		</tr>
	  </thead>
	  <tbody>
		<?php
		for( $i=1; $i<=$row; $i++ ){
			$record = $query -> fetch_assoc();

			if( $record['emp_gender']=="m" ){
				$gender = "ผู้ชาย";
			}else {
				$gender = "ผู้หญิง";
			}

		?>
		<tr>
		  <th><?php echo $record['emp_id']; ?></th>
		  <td><?php echo $record['emp_fullname']; ?></td>
		  <td><?php echo $record['emp_email']; ?></td>
		  <td><?php echo $gender; ?></td>
	      <td><?php echo $record['dep_name']; ?></td>
		  <td><a href="#" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> Update</a></td>
		  <td><a href="#" class="btn btn-danger btn-sm"><i class="fas fa-user-minus"></i> Delete</a></td>		
		</tr>
		<?php } ?>
	  </tbody>
	</table>
	
</div>

	  
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script> AOS.init(); </script>
