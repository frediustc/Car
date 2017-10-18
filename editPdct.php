<?php include 'inc/head.php'; ?>
<div class="xs">
 <h3>Edit Product</h3>
 <div class="well1 white">
 <form class="form-floating" method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $_GET['id'] ?>">
     <?php include 'scr/product.php';
     $pd = $db->prepare('SELECT * FROM producs WHERE id = ?');
     $pd->execute(array($_GET['id']));
     $p = $pd->fetch();
     ?>
   <fieldset>
     <div class="form-group">
       <label class="control-label">Product Name</label>
       <input type="text" class="form-control1" name="name" required value="<?php echo $p['name'] ?>">
     </div>
     <div class="form-group">
       <label class="control-label">Product Description</label>
       <textarea class="form-control1" name="desc" required><?php echo $p['description'] ?></textarea>
     </div>
     <div class="form-group">
       <label class="control-label">Product Price</label>
       <input type="text" class="form-control1" name="price" required value="<?php echo $p['price'] ?>">
     </div>
     <div class="form-group">
       <label class="control-label">Product Add Stock</label>
       <input type="text" class="form-control1" name="qty" required value="0">
     </div>
     <input type="hidden" class="form-control1" name="stock" required value="<?php echo $p['qty'] ?>">
     <div class="form-group filled">
       <label class="control-label">Product Type</label>
       <select class="form-control1" required name="type">
         <option value="Tyres" <?php echo $p['type'] == 'Tyres' ? 'selected' : '' ?>>Tyres</option>
         <option value="Battery" <?php echo $p['type'] == 'Battery' ? 'selected' : '' ?>>Battery</option>
       </select>
     </div>
     <div class="form-group">
       <button type="submit" class="btn btn-primary" name="editPdct">Submit</button>
       <button type="reset" class="btn btn-default">Reset</button>
     </div>
   </fieldset>
 </form>
</div>
</div>
<?php include 'inc/foot.php'; ?>
