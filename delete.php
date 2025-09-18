<meta charset="UTF-8">
<?php
if( !isset( $_GET['employee'] ) ){
    echo "<script>window.location='index.php';</script>";
    exit();
}


$employee = $_GET['employee'];


include('connect.php');


$sql = "delete from employee where
        emp_id=$employee";
$query = $db -> query($sql);
?>
<script>
    alert('Success');
    window.location='index.php';
</script>

