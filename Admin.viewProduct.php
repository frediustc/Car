<?php include 'inc/head.php'; ?>
<div class="xs">
<h3>Product List</h3>
<div class="panel-body1">
<table class="table">
<thead>
 <tr>
   <th>#</th>
   <th>Name</th>
   <th>Description</th>
   <th>Price</th>
   <th>Type</th>
   <th>Quantity</th>
   <th>Option</th>
 </tr>
</thead>
<tbody>
    <?php
    $pdcts = $db->prepare('SELECT * FROM producs');
    $pdcts->execute();
    while ($p = $pdcts->fetch()) { ?>
    <tr>
      <th scope="row"> <span class="flaticon-<?php echo strtolower($p['type']) ?>"></span></th>
      <td><?php echo $p['name'] ?></td>
      <td><?php echo $p['description'] ?></td>
      <td><?php echo $p['price'] ?></td>
      <td><?php echo $p['type'] ?></td>
      <td><?php echo $p['qty'] ?></td>
      <td>
          <a href="deletePdct.php?id=<?php echo $p['id'] ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
          <a href="editPdct.php?id=<?php echo $p['id'] ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
      </td>
    </tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>
<?php include 'inc/foot.php'; ?>
