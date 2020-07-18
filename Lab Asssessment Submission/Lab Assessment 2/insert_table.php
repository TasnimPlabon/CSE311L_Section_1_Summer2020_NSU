<?php

$link = new mysqli('localhost','root', '', 'vs_code_test');
if($link->connect_error)
{
    die("Error: Could not connect." .$link->connect_error);
}
$sql = "INSERT INTO persons(id,first_name,email)VALUES
('1','plabon','plabon@gmail.com')";

if($link->query($sql)===TRUE){
    echo "Table Created";
}
else{
    echo"Error: could not able to create table." .$sql. "<br>" . 
    $link->error;
}
$link->close();
?>