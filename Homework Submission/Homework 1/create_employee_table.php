<?php
$link = mysqli_connect("localhost","root","","vs_code_homework");
if($link === false){
    die("ERROR:Could not connect.".mysqli_connect_errno());
}

$sql ="CREATE TABLE employee(
    em_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    email VARCHAR (70) NOT NULL UNIQUE,
    phone_number INT NOT NULL
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully"; 
}
else {
    echo "Error: Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>