<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "general_registration";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn){
    echo "Connected";
}else{
    echo "Not Connected";
};

?>