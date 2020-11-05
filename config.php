<?php
//establish connection to the mysql database using mysqli acess layer
$serverName = 'localhost';
$userName = 'root';
$passWord = '';
$dbName = 'orphansupport';

$db = new mysqli($serverName, $userName, $passWord, $dbName);
if ($db->connect_error) {
    //throw an error if generated while establishing the connection with the dataBase
    die('Connect Error: ' . $db->connect_error);
}
//echo "Welcome";
