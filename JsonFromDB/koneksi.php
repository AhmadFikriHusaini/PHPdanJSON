<?php
$pdo = null;
$server = 'mysql:host=localhost;dbname=db_buku';
try {
    $pdo = new PDO($server, 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    die();
}