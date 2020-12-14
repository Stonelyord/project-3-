<?php
$dsn = 'mysql:host=sql1.njit.edu;dbname=bbk23';
$username = 'bbk23';
$password = 'Stoneboys4.';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
?>