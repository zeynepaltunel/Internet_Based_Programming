<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$database="register";

$conn=new mysqli($db_host, $db_user, $db_password);

if(!$conn)
{
    die("Database connection failed").mysqli_connect_error();
}


$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === false) {
    die("Error creating database: " . $conn->error);
}

$conn->select_db($database);

$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name_surname VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL
)";

if ($conn->query($sql) === false) {
    die("Error creating table: " . $conn->error);
}

echo "Table created successfully.";

?>


