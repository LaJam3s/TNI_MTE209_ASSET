<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbName = "2413211596";
 
    $db = new mysqli($host,$username,$pass,$dbName);
 
    if( $db -> connect_errno > 0 ){
        die( $db -> connect_error );
        exit();
    }
 
    if ( !$db -> set_charset("utf8") ) {
        die("utf8 : ". $db->error);
        exit();
    }
?>