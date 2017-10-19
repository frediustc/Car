<?php include 'inc/head.php'; ?>
<div class="graphs">
 <div class="widget_head">Shop</div>

   <div class="widget_2 grid">
       <?php
       include 'scr/order.php';
       $pdct = $db->prepare('SELECT * FROM producs ORDER BY id DESC');
       $pdct->execute();
       while ($p = $pdct->fetch()) {
           $count = $db->prepare('SELECT * FROM orders WHERE pid = ?');
           $count->execute(array($p['id']));
           $x = 0;
           while ($c = $count->fetch()) {
               $x += (int)$c['qty'];
           }
           $av = (int)$p['qty'] - $x;
           if($av > 0) {
           ?>
           <div class="col-sm-6 widget_1_box items">
             <div class="wid-social facebook">
                 <div class="social-icon">
                     <i class="flaticon-<?php echo strtolower($p['type']) ?> text-light icon-xlg pull-right"></i>
                 </div>
                 <div class="social-info">
                     <h3 class="number_counter bold count text-success start_timer counted"><?php echo $p['price'] ?><small><?php echo $cedis ?></small></h3>
                     <h4 class="counttype text-light"><?php echo $p['name'] ?></h4>
                     <span class="percent"><?php echo $p['description'] ?></span>
                     <p class="text-primary"><?php echo $av ?> in stock</p>
                 </div>
                 <form class="" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                     <div class="row">
                         <input type="hidden" name="pid" value="<?php echo $p['id'] ?>">
                         <div class="form-group col-xs-6">
                             <input type="number" min="1" value="1" max="<?php echo $av == 0 ? 100 : $av ?>" name="qty" required class="form-control1">
                         </div>
                         <div class="form-group col-xs-6">
                             <input type="submit" name="order" value="Order Now" required class="form-control1 btn btn-primary">
                         </div>
                     </div>
                 </form>
             </div>
           </div>
       <?php } } ?>


      <div class="clearfix"> </div>
   </div>
</div>
<?php include 'inc/foot.php'; ?>
