<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die ("Connection faild: " . $conn->connect_error);
}

$sql = "CREATE TABLE 'posts' (
    'id' int(10) NOT NULL AUTO_INCREMENT,
    'title' varchar(225) NOT NULL,
    'body' text NOT NULL'
    'author' varchar (225) NOT NULL,
    'created_at' TIMESTAMP DEFAULT,
    PRYMARY KEY ('id')
)";

if ($conn->query($sql)== TRUE) {
    echo "Table posts created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();

?>
<?php
include 'header.php';
include 'footer.php';
include 'sidebar.php';
?>

