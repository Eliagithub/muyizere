<?php
$server ="localhost";
$db ="ebus";
$user="root";
$password="";

$con=mysqli_connect($server,$user,$password,$db);
if($con){
    echo "wel done";
}
else{
    echo "Fail";
}

?>