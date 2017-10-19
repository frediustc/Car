<?php
session_start();
try {
    $db = new PDO('mysql:host=localhost;dbname=car', 'root', '');
} catch (Exception $e) {
    Die('Erreur : ' . $e->getMessage());
}
$cedis = '&#8373;';
