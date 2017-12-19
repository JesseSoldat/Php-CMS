<nav class="navbar navbar-inverse navbar-fixed-top"
 role="navigation">
  <div class="navbar-header">
    <button class="navbar-toggle"
      type="button"
      data-toggle="collapse"
      data-target=".navbar-ex1-collapse">
      <span class="sr-only">
        Toggle navigation
      </span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="index.php" class="navbar-brand">
      MY CMS Admin
    </a>
  </div>
  <ul class="nav navbar-right top-nav">
    <li>
      <a href="">
        Users Online: 
        <span class="useronline"></span>
      </a>
    </li>
    <li>
      <a href="../index.php">HOME SITE</a>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i>
        <?php if(isset($_SESSION['user_name'])) {
          echo $_SESSION['user_name'];
        } ?>
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a href="#">
            <i class="fa fa-fw fa-user"></i>
            Profile            
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="../includes/logout.php">
            <i class="fa fa-fw fa-power-off"></i>
            Log Out
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>