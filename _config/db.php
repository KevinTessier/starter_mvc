<?php

// Init dB
$dsn = 'mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME;
$user = DATABASE_USER;
$password = DATABASE_PASSWORD;

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    dump('Échec lors de la connexion : ' . $e->getMessage() ); 
}
