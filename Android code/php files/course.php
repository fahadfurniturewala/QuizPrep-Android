<?php
require "conn.php";


$mysql_qry="select * from Courses";
$i = mysqli_query($conn ,$mysql_qry);

$num_rows = mysqli_num_rows($i);
$json = array();
if($num_rows > 0)
{
while ($row=mysqli_fetch_assoc($i))
{
$json[]=$row;
}
}
//echo '[{"courses":'.json_encode($json).'}]';
echo json_encode($json);
?>