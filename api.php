<?php 

$root_url = 'localhost/BENROBO/';
$host = "localhost";
$root = "root";
$pwd = null;
$db = "portfolio_db";

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
<?php 
 
 $sql = "SELECT * FROM main_blog";

 $res = mysqli_query($conn,$sql);
    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)){
            $rows = $row;
            $arr = array(
                "Status_Code" => 1,
                "message"=>"data okk",
                "body" => [
                 "text" => $rows['body'],
                 "img" => $rows['post_pic'],
                 "authur" => $rows['authur'],
                 "date"=> $rows['posted_at'],
                 "title" => $rows['title']
                ],
                
            );
            
            header("Content-Type: application/json");
            $b = json_encode($arr);
            print_r($b);
            
        }
    }

?>
