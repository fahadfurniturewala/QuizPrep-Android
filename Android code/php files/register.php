<?php
require "conn.php";
//$username = "jay@gmail";
//$name = "Jay";
//$password = "123";
//$user_type = "Student";

$username = $_POST["username"];
$name = $_POST["name"];
$password = $_POST["password"];
$user_type = $_POST["user_type"];
$mysql_qry = "insert into Users(username,Name,password,User_type) values ('$username','$name','$password','$user_type')";
if($conn->query($mysql_qry)===TRUE)
{
echo "Registered";
}
else {
echo " Unsucessfull";
}

?>