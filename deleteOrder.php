<?php
require 'inc/db.php';
$d = $db->prepare('DELETE FROM orders WHERE id = ?');
$d->execute(array($_GET['id']));
header('location: orders.php');
 ?>
