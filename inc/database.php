<?php

$servername='localhost';
$username='root';
$password='';
$database='portfolio';
if (!($conn=mysqli_connect($servername, $username,$password , $database))){
    echo mysqli_error($conn);
}
?>
