<?php
require "conn.php";
//$quiztopic = "Class";
//$quizcourse ="CSE5321" ;
//$user = "patel";


$quiztopic = $_POST["topic"];
$quizcourse = $_POST["course"];
$user = $_POST["uname"];

$mysql_qry = "insert into Quiz(quiz_topic,course_id,creator_userid,verified_stat) values ('$quiztopic','$quizcourse','$user','Unverified')";
if($conn->query($mysql_qry)===TRUE)
{
echo "Quiz Created";
}
else {
echo " Unsuccessfull";
}

?>