<?php include 'inc/head.php'; ?>
<div class="xs">
<h3>Orders List</h3>
<div class="panel-body1">
<table class="table">
<thead>
 <tr>
   <th>FullName</th>
   <th>Name</th>
   <th>Description</th>
   <th>Quantity</th>
   <th>Price</th>
   <th>Total</th>
 </tr>
</thead>
<tbody>
    <?php
    switch ($_SESSION['usertype']) {
        case 1:
            $pdcts = $db->prepare('SELECT orders.qty, orders.id, users.fullname, producs.name, producs.price, producs.description FROM orders INNER JOIN producs ON producs.id = orders.pid INNER JOIN users ON users.id = orders.uid WHERE status = "1" AND orders.uid = ?');
            $pdcts->execute(array($_SESSION['id']));
            break;
        case 2:
            $pdcts = $db->prepare('SELECT orders.qty, orders.id, users.fullname, producs.name, producs.price, producs.description FROM orders INNER JOIN producs ON producs.id = orders.pid INNER JOIN users ON users.id = orders.uid WHERE status = "1"');
            $pdcts->execute();
            break;
    }
    while ($p = $pdcts->fetch()) { ?>
    <tr>
      <td><?php echo $p['fullname'] ?></td>
      <td><?php echo $p['name'] ?></td>
      <td><?php echo $p['description'] ?></td>
      <td>x<?php echo $p['qty'] ?></td>
      <td>x<?php echo $p['price'] ?></td>
      <td><?php echo $p['price'] * $p['qty'] ?><?php echo $cedis ?></td>
    </tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>
<?php include 'inc/foot.php'; ?>
