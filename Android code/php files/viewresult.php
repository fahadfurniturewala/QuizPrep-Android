<?php 
require "conn.php";
//$user_name = "fahad@gmail.com";
//$user_pass = "1234";

$user_name = $_POST["username"];
$user_pass = $_POST["password"];
$mysql_qry = "select quiz_topic,score from Result as R join Quiz as Q on R.result_quiz_id=Q.quiz_id where username='jay27694@yahoo.com'";

$i = mysqli_query($conn ,$mysql_qry);


$json = array();

while ($row=mysqli_fetch_assoc($i))
{
$json[]=$row;
}

echo json_encode($json);

?>