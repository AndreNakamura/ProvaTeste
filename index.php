<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = '10.1.0.5';

// Database use name
$user = 'root';

//database user password
$pass = 'mypasswordsql';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Conectedo ao MySQL server com sucesso!";
}
?>
