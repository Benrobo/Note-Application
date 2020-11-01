<?php 
$root_url = 'localhost/BENROBO/';
$host = "localhost";
$root = "root";
$pwd = null;
$db = "note_db";

$conn = mysqli_connect($host, $root, $pwd, $db);
// $sql = "CREATE TABLE note(
//     id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     title VARCHAR(255) NOT NULL,
//     body LONGTEXT NOT NULL,
//     authur VARCHAR(255) NOT NULL,
//     posted_at TIMESTAMP NOT NULL

// )";

// if ($conn) {
//     echo "connected";
//     if (mysqli_query($conn, $sql)) {
//     echo "tables created";
//     }else{
//     echo "error".mysqli_error($conn);
//     }
// }


?>