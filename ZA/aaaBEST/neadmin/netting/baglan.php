<?php ob_start(); session_start(); ?>
<?php
$dsn = 'mysql:host=localhost;dbname=cacakrept';
$user = 'root';
$password = 'SQL123_123';
try {$db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {echo 'Connection failed: ' . $e->getMessage();}
?>