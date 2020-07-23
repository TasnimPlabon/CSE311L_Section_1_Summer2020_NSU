<?php

$link = new mysqli('localhost','root', '', 'vs_code_homework');
if($link->connect_error)
{
    die("Error: Could not connect." .$link->connect_error);
}
$sql = "INSERT INTO location(dept_id,dept_name,dept_location,road_number,house_number)VALUES
('1','BBA','Uttara 1230','A1','B1'),
('2','ECE','Banani','C1','D1'),
('3','Pharmacy','Mohakhali','E1','F1')";

if($link->query($sql)===TRUE){
    echo "Table Inserted";
}
else{
    echo"Error: could not able to insert table." .$sql. "<br>" . 
    $link->error;
}
$link->close();
?>