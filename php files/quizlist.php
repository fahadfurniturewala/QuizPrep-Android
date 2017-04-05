<?php 
require "conn.php";
//$user_name = "fahad@gmail.com";
//$user_pass = "1234";

$user_name = $_POST["username"];
$user_pass = $_POST["password"];
$mysql_qry = "select quiz_topic,creator_userid,timestamp,verified_stat from Quiz where course_id='CSE5324'";

$i = mysqli_query($conn ,$mysql_qry);


$json = array();

while ($row=mysqli_fetch_assoc($i))
{
$json[]=$row;
}

echo json_encode($json);

?>