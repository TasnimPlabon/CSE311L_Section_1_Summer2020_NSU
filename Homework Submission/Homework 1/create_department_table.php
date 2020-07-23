<?php
$link = mysqli_connect("localhost","root","","vs_code_homework");
if($link === false){
    die("ERROR:Could not connect.".mysqli_connect_errno());
}

$sql ="CREATE TABLE department(
    dept_id INT NOT NULL PRIMARY KEY UNIQUE,
    dept_name VARCHAR(10) NOT NULL,
    dept_location VARCHAR (70) NOT NULL 
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully";
}
else {
    echo "Error: Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>