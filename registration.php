
<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `users`(`u_id`, `u_name`, `dob`, `gender`, `ed_quali`, `profession`, `con_num`, `email`, `password`) VALUES (1,name,dob,female,ed_quali,profession,con_num,email,password)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>