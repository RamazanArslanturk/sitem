<?php
/* session_start();

$sessionStatus = session_status();

if ($sessionStatus === PHP_SESSION_NONE) {
  // Oturum başlatılmamış
  session_start();
}  */
require_once 'config.php';
$host = "localhost";
$user = "furniuser";
$pass = "eSh@p99x@!";  
$db = "furniture"; 

// Create connection
$conn = mysqli_connect($host,$user,$pass,$db);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>