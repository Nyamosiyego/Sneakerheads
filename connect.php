<?php
$servername="localhost";
$username="root";
$password="";
$dbname="apparels";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
die("Connection Failed".mysqli_connect_error());
}
echo "Connection successful";


?>