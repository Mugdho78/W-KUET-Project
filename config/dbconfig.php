<?php
/*if (!isset($_SESSION['username'])) {
    session_start();
}*/
$username ='root';
$servername = 'localhost';
$dbname = 'kuet_project';
$password = '';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    //Username, Password and Database
    $con = new mysqli($servername, $username, $password, $dbname);
} catch (Exception $e) {
    error_log($e->getMessage());
    //Should be a message a typical user could understand
}