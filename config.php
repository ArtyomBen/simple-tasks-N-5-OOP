<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'training';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_errno){
    echo 'coonection filed '. $conn -> connect_error;
}
'success';