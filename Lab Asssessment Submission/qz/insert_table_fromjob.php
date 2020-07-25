<?php

$link = new mysqli('localhost','root', '', 'vs_code_qz');
if($link->connect_error)
{
    die("Error: Could not connect." .$link->connect_error);
}
$sql = "INSERT INTO fromjob(job_id,job_title, min_salary,max_salary)VALUES
('1','AD-PRES','20000','40000'),
('2','AD_VP','15000','30000'),
('3','AD_ASST','3000','6000')";

if($link->query($sql)===TRUE){
    echo "Table Inserted";
}
else{
    echo"Error: could not able to insert table." .$sql. "<br>" . 
    $link->error;
}
$link->close();
?>