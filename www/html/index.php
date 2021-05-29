<?php
require_once 'connection.php';
$conn = mysqli_connect($host,$user,$password,$db);
if($conn->connect_error){
echo 'failed' . $conn->connect_error;
}
echo 'hooray';
?>
