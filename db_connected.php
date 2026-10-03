<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "attedance_db";

$conn = new mysqli($hostname, $username, $password, $db_name);
if ($conn) {
    echo"connected to the database";
}else{
    echo"not connected to the database";
}


$quert = $conn->query("SELECT * FROM students");
$data = $quert->fetch_all(MYSQL_ASSOC);



foreach ($data as $row) {
    echo $row["Student_id"] ."<br>";
    echo $row["name"] ."<br>";
}    
?>