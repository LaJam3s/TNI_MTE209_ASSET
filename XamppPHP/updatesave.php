<meta charset="UTF-8">
<?php
if( !isset( $_POST['fullname'] ) ){
    echo "<script>window.location='index.php';</script>";
    exit();
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$department = $_POST['department'];


$employee = $_POST['employee']; //hidden


include('connect.php');


$sql = "update employee set emp_fullname='$fullname',
                            emp_email='$email',
                            emp_mobile='$mobile',
                            emp_gender='$gender',
                            dep_id='$department'
                        where emp_id=$employee";
$query = $db -> query($sql);
?>
<script>
    alert('Success');
    window.location='index.php';
</script>



