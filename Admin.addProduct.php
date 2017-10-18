<?php include 'inc/head.php'; ?>
<div class="xs">
 <h3>Add Product</h3>
 <div class="well1 white">
 <form class="form-floating" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
     <?php include 'scr/product.php'; ?>
   <fieldset>
     <div class="form-group">
       <label class="control-label">Product Name</label>
       <input type="text" class="form-control1" name="name" required>
     </div>
     <div class="form-group">
       <label class="control-label">Product Description</label>
       <textarea class="form-control1" name="desc" required></textarea>
     </div>
     <div class="form-group">
       <label class="control-label">Product Price</label>
       <input type="text" class="form-control1" name="price" required>
     </div>
     <div class="form-group">
       <label class="control-label">Product Quantity</label>
       <input type="text" class="form-control1" name="qty" required>
     </div>
     <div class="form-group filled">
       <label class="control-label">Product Type</label>
       <select class="form-control1" required name="type">
         <option value="Tyres">Tyres</option>
         <option value="Battery">Battery</option>
       </select>
     </div>
     <div class="form-group">
       <button type="submit" class="btn btn-primary" name="addPdct">Submit</button>
       <button type="reset" class="btn btn-default">Reset</button>
     </div>
   </fieldset>
 </form>
</div>
</div>
<?php include 'inc/foot.php'; ?>
