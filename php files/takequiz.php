<?php 
require "conn.php";
//$user_name = "fahad@gmail.com";
//$user_pass = "1234";

//$user_name = $_POST["username"];
//$user_pass = $_POST["password"];
$mysql_qry = "select question,option_1,option_2,option_3,option_4,correct_answer from Questions where quiz_id='15'";
//$mysql_qry="select * from Questions";
$i = mysqli_query($conn ,$mysql_qry);


$json = array();

while ($row=mysqli_fetch_assoc($i))
{
$json[]=$row;
}

echo json_encode($json);

?>