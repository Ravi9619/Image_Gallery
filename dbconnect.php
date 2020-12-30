<?php
$servername = "localhost";
$username = "padmin1";
$password = "Ravi0978@";
$dbname = "users";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    //  echo "Connection Established<br>";
}else{
    die("Sorry! failed to connect");
}
?>