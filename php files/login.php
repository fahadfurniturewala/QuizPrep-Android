<?php 
require "conn.php";
//$user_name = "fahad@gmail.com";
//$user_pass = "1234";

$user_name = $_POST["username"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from Users where username='$user_name' and password='$user_pass'";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) == 1) {
echo "Logged in";
}
else {
echo "login not Successfull ";
}

?>