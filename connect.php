<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

$database = 'CRUD';

// check the MySQL connection status
$con = new mysqli($host, $user, $pass,$database);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    // echo "Connected to MySQL server successfully!";
}
?>