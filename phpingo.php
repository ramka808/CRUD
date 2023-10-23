<?php

$con = new mysqli('localhost', 'root','', 'CRUD');

if ($con){
    echo 'Connection successful';
}
else{
    echo 'Connection not successful';
}
?>
