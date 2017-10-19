<?php include 'inc/head.php'; ?>
<div class="xs">
 <h3>Account Details</h3>
 <div class="well1 white">
 <form class="form-floating" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
     <?php include 'scr/sign.php';
     $user = $db->prepare('SELECT * FROM users WHERE id = ?');
     $user->execute(array($_SESSION['id']));
     $u = $user->fetch();
     ?>
   <fieldset>
     <div class="form-group">
       <label class="control-label">Fullname</label>
       <input type="text" class="form-control1" name="fn" required value="<?php echo $u['fullname'] ?>">
     </div>
     <div class="form-group">
       <label class="control-label">Email</label>
       <input type="text" class="form-control1" name="em" required value="<?php echo $u['email'] ?>">
     </div>
     <div class="form-group">
       <label class="control-label">Phone</label>
       <input type="text" class="form-control1" name="ph" required value="<?php echo $u['phone'] ?>">
     </div>
     <div class="form-group">
       <label class="control-label">Password</label>
       <input type="password" class="form-control1" name="ps">
     </div>
     <div class="form-group filled">
       <label class="control-label">Confirm Password</label>
       <input type="password" class="form-control1" name="cn">
     </div>
     <div class="form-group">
       <button type="submit" class="btn btn-primary" name="editProf">Submit</button>
     </div>
   </fieldset>
 </form>
</div>
</div>
<?php include 'inc/foot.php'; ?>
