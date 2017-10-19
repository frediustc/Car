<!-- Navigation -->
    <?php $sb =  $_SESSION['usertype'] == 2 ? 'Sales' : 'Buy'; ?>
   <div class="navbar-default sidebar" role="navigation">
       <div class="sidebar-nav navbar-collapse">
           <ul class="nav" id="side-menu">
               <li>
                   <a href="account.php"><i class="fa fa-user nav_icon"></i>Account</a>
               </li>
               <?php if ($_SESSION['usertype'] == 2): ?>
               <li>
                   <a href="#"><i class="fa fa-laptop nav_icon"></i>Products<span class="fa arrow"></span></a>
                   <ul class="nav nav-second-level">
                       <li>
                           <a href="Admin.addProduct.php">Add</a>
                           <a href="Admin.viewProduct.php">View</a>
                       </li>
                   </ul>
                   <!-- /.nav-second-level -->
               </li>
               <!-- <li>
                   <a href="dashboard.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
               </li> -->
               <li>
                   <a href="customers.php"><i class="fa fa-users nav_icon"></i>Customers</a>
               </li>
               <li>
                   <a href="shop.php"><i class="fa fa-shopping-cart nav_icon"></i>Shop</a>
               </li>
               <?php endif; ?>
               <li>
                   <a href="orders.php"><i class="fa fa-list nav_icon"></i>Orders</a>
               </li>
               <li>
                   <a href="sales.php"><i class="fa fa-credit-card nav_icon"></i><?php echo $sb ?></a>
               </li>
           </ul>
       </div>
       <!-- /.sidebar-collapse -->
   </div>
