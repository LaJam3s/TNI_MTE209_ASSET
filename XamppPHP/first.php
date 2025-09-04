<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $num1 = 159;
    $num2 = 9;
    $text = "Test";
    $month = array('0',
                    'Jan','Feb','Mar','Apr',
                    'May','Jun','Jul','Aug',
                    'Sep','Oct','Nov','Dec');
?>
<body>
    $num1 = <?php echo $num1; ?> <br>
    $num2 = <?php echo $num1; ?> <br>
    $text = <?php echo $num1; ?> <br>

    $num1 + $num2 = <?php echo $num1 + $num2; ?> <br>
    $num1 - $num2 = <?php echo $num1 - $num2; ?> <br>
    $num1 * $num2 = <?php echo $num1 * $num2; ?> <br>
    $num1 / $num2 = <?php echo ceil($num1 / $num2); ?> <br>
    $num1 . $num2 = <?php echo $num1 . $num2; ?> <br>

    <select>
        <?php
            for ( $i=1;  $i<=12; $i++ ){
        ?>
        <option <?php if( $i==date('n') ){ echo "selected"; } ?> > <?php echo $month[$i];?> </option>
        <?php } ?>
    </select> <br>

    Today = <?php echo date("l j, F Y"); // 4 September 2025 ?> <br>


</body>
</html>