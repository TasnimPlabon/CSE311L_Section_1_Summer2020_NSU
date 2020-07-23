<?php

$link = new mysqli('localhost','root', '', 'vs_code_homework');
if($link->connect_error)
{
    die("Error: Could not connect." .$link->connect_error);
}
$sql = "INSERT INTO employee(em_id,first_name,email,phone_number)VALUES

('11','Tanjim','tanjimislam@gmail.com','01911111111'),
('12','Ibrahim','ibrahimhossain@gmail.com','01811111111'),
('13','Hamim','hamimrahman@gmail.com','01711111111')";

if($link->query($sql)===TRUE){
    echo "Table Inserted";
}
else{
    echo"Error: could not able to insert table." .$sql. "<br>" . 
    $link->error;
}
$link->close();
?>