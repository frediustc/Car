<?php
require 'inc/db.php';
$d = $db->prepare('UPDATE orders SET status = "1" WHERE id = ?');
$d->execute(array($_GET['id']));
header('location: orders.php');
 ?>
