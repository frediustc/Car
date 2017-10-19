<?php include 'inc/head.php'; ?>
<div class="xs">
<h3>Product List</h3>
<div class="panel-body1">
<table class="table">
<thead>
 <tr>
   <th>#</th>
   <th>Fullname</th>
   <th>Email</th>
   <th>Phone</th>
   <!-- <th>Option</th> -->
 </tr>
</thead>
<tbody>
    <?php
    $pdcts = $db->prepare('SELECT * FROM users WHERE usertype = 1');
    $pdcts->execute();
    while ($p = $pdcts->fetch()) { ?>
    <tr>
      <th scope="row"><?php echo $p['id'] ?></th>
      <td><?php echo $p['fullname'] ?></td>
      <td><?php echo $p['email'] ?></td>
      <td><?php echo $p['phone'] ?></td>
      <!-- <td>
          <a href="deletePdct.php?id=<?php echo $p['id'] ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
          <a href="editPdct.php?id=<?php echo $p['id'] ?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
      </td> -->
    </tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>
<?php include 'inc/foot.php'; ?>
