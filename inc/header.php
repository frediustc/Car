<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="account.php">Modern</a>
</div>
<!-- /.navbar-header -->
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown" style="color: white;"><?php echo $_SESSION['fullname'] ?></a>
        <ul class="dropdown-menu">
            <li class="m_2"><a href="Account.php"><i class="fa fa-user"></i> Account</a></li>
            <li class="m_2"><a href="Logout.php"><i class="fa fa-lock"></i> Logout</a></li>
        </ul>
    </li>
</ul>
<form class="navbar-form navbar-right" action="search.php" method="get">
  <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
</form>
