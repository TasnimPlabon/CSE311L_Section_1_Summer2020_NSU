<?php

$link = new mysqli('localhost','root', '', 'vs_code_homework');
if($link->connect_error)
{
    die("Error: Could not connect." .$link->connect_error);
}
$sql = "INSERT INTO department(dept_id,dept_name,dept_location)VALUES
('1','BBA','Uttara 1230'),
('2','ECE','Banani'),
('3','Pharmacy','Mohakhali')";

if($link->query($sql)===TRUE){
    echo "Table Inserted";
}
else{
    echo"Error: could not able to insert table." .$sql. "<br>" . 
    $link->error;
}
$link->close();
?>