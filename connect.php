<?php
// Database connection parameters
$db_host = 'localhost'; // Change this to your database host
$db_name = 'attmgsystem'; // Change this to your database name
$db_user = 'root'; // Change this to your database username
$db_pass = ''; // Change this to your database password

try {
    // Establishing the database connection using PDO
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If connection fails, handle the error
    echo "Connection failed: " . $e->getMessage();
    // You might want to handle this more gracefully in a production environment
}
?>
