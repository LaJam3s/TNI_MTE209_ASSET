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
<div class="container-lg container-fluid"  data-aos="fade-up" data-aos-duration="1000">
	
	<h1>Employee List

	<button type="button" class="btn btn-sm btn-info">
  		<span class="badge bg-secondary"><?php echo $row; ?></span> records 
	</button>
	
	</h1>

	<div class="buttonInsert">
		<button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user-plus"></i> Insert</button>
	</div>
	
	<table class="table table-striped rounded overflow-hidden mt-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
	  <thead class="table-success">
		<tr>
		  <th scope="col">Student ID</th>
		  <th scope="col">Fullname</th>
		  <th scope="col">Email</th>
		  <th scope="col">Gender</th>
		  <th scope="col">Major</th>
		  <th scope="col"> </th>
		  <th scope="col"> </th>
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
		  <td><a href="updateForm.php?employee=<?php echo $record['emp_id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> Update</a></td>
		  <td><a onclick="return confirm('Deleting <?php echo $record['emp_fullname']; ?>')" href="delete.php?employee=<?php echo $record['emp_id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-user-minus"></i> Delete</a></td>		
		</tr>
		<?php } ?>
	  </tbody>
	</table>
	
</div>

	  
<!-- Modal Insert -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header" style="background-color:#BCFDBF;">
			<h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลพนักงาน</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<form action="insertsave.php" method="POST">
		<div class="modal-body">
			<div>
				<label class="form-label">ชื่อ นามสกุล</label>
				<input class="form-control" name="fullname" type="text">
			</div>
			<div class="mt-2">
				<label class="form-label">Email</label>
				<input class="form-control" name="email" type="email">
			</div>
			<div class="mt-2">
				<label class="form-label">เบอร์มือถือ</label>
				<input class="form-control" name="mobile" type="text">
			</div>
			<div class="mt-2">
				<label class="form-label">เพศ</label>
				<select class="form-select" name="gender">
					<option value="m">ผู้ชาย</option>
					<option value="f">ผู้หญิง</option>
				</select>
			</div>
			<div class="mt-2">
				<label class="form-label">สาขา</label>
				<select class="form-select" name="department">
					<?php
					$sql2 = "select * from department";
					$query2 = $db -> query($sql2);
					$row2  = $query2 -> num_rows;

					for( $d=1; $d<=$row2; $d++ ){
						$record2 = $query2 -> fetch_assoc();
					?>
					<option value="<?php echo $record2['dep_id']; ?>"><?php echo $record2['dep_name']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="reset" class="btn btn-warning">Clear</button>
			<button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> Insert</button>
		</div>
		</form>
		</div>
	</div>
</div>
  </body>
</html>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
<script> AOS.init(); </script>
