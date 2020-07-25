<?php
$link = mysqli_connect("localhost","root","","vs_code_qz");
if($link === false){
    die("ERROR:Could not connect.".mysqli_connect_errno());
}

$sql ="CREATE TABLE job (
    job_id INT NOT NULL PRIMARY KEY UNIQUE,
    job_title VARCHAR(10) NOT NULL,
    min_salary INT NOT NULL ,
    max_salary INT NOT NULL
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully";
}
else {
    echo "Error: Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>