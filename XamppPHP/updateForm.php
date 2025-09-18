<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
	  
	<link href="aos-master/dist/aos.css" rel="stylesheet">
	<script src="aos-master/dist/aos.js"></script>

    <title>Update Form</title>
	  
    <style>
        .buttonSpace{ margin-right:20px !important; }
    </style>
  </head>
<?php
include('connect.php');

// Get Value ahh
$employee = $_GET['employee'];


include('connect.php');


$sql = "select * from employee
        where emp_id=$employee";
$query = $db -> query($sql);


$record = $query -> fetch_assoc();



?>
  <body>
      <h3 class="text-center mt-2 display-6 fs-3"   data-aos="fade-up" data-aos-duration="800">แก้ไขข้อมูลพนักงาน</h3>
        <div class="col-sm-9 col-md-7 col-lg-6 mx-auto p-4 border rounded-3 bg-light mt-4"  data-aos="fade-up"  data-aos-delay="400" data-aos-duration="1000">
            <form action="updatesave.php" method="POST">
                <div>
                    <label class="form-label">ชื่อ นามสกุล</label>
                    <input value="<?php echo $record['emp_fullname']?>" class="form-control" name="fullname" type="text">
                </div>
                <div class="mt-3">
                    <label class="form-label">Email</label>
                    <input value="<?php echo $record['emp_email']?>" class="form-control" name="email" type="email">
                </div>
                <div class="mt-3">
                    <label class="form-label">Mobile</label>
                    <input value="<?php echo $record['emp_mobile']?>" class="form-control" name="mobile" type="text">
                </div>
                <div class="mt-3">
                    <label class="form-label">เพศ</label>
                    <select class="form-select" name="gender">
                        <option value="m">ผู้ชาย</option>
                        <option value="f">ผู้หญิง</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label class="form-label">แผนก</label>
                    <select class="form-select" name="department">
                        <?php
                        $sql2 = "select * from department";

                        $result2 = $db -> query($sql2);

                        $row2 = $result2 -> num_rows;

                        for( $m=1; $m<=$row2; $m++ ){
                            $record2 = $result2 -> fetch_assoc();
                        ?>
                        <option value="<?php echo $record2['dep_id'] ?>">
                            <?php echo $record2['dep_name'] ?>
                        </option>
                        <?php } ?>
				</select>
                </div>
                <div class="mt-4 text-end">
                    <button onclick="history.back();" type="button" class="btn btn-secondary buttonSpace"><i class="fas fa-angle-double-left"></i> Back</button>
                    <button type="reset" class="btn btn-warning buttonSpace"><i class="fas fa-undo"></i> Undo Data</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-user-edit"></i>  Submit Data</button>
                </div>
            </form>
        </div>


  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script> AOS.init(); </script>