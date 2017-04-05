<?php
require "conn.php";
//$quizid = "6";
//$question = "WHat is a class?";
//$option1 = "Object";
//$option2 = "Type";
//$option3 = "Attr";
//$option4 = "Rel";
//$correct = "Type";


$quizid = $_POST["quizid"];
$question = $_POST["question"];
$option1 = $_POST["option1"];
$option2 = $_POST["option2"];
$option3 = $_POST["option3"];
$option4 = $_POST["option4"];
$correct = $_POST["correct"];

$mysql_qry = "insert into Questions(quiz_id,question,option_1,option_2,option_3,option_4,correct_answer) values ('$quizid','$question','$option1','$option2','$option3','$option4','$correct')";
if($conn->query($mysql_qry)===TRUE)
{
echo "Question Added";
}
else {
echo " Unsuccessfull";
}

?>