<meta charset="UTF-8">
<?php
if( !isset( $_POST['fullname'] ) ){
    echo "<script>window.location='index.php';</script>";
    exit();
}


//รับค่าจากแบบฟอร์ม
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$department = $_POST['department'];


include('connect.php');


$sql = "insert into employee(emp_fullname, emp_email,
                             emp_mobile, emp_gender,
                             dep_id, lastupdate )
                      values('$fullname','$email',
                             '$mobile','$gender',
                             '$department', now() )";
$query = $db -> query($sql);
?>
<script>
    alert('Success');
    window.location='index.php';
</script>

