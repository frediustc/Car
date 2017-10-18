<?php
require 'inc/db.php';
$d = $db->prepare('DELETE FROM producs WHERE id = ?');
$d->execute(array($_GET['id']));
header('location: Admin.viewProduct.php');
 ?>
