<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>index.php/Home">GeeksBuddy</a>
	</div>
  
    <!-- Brand and toggle get grouped for better mobile display -->
   	    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li class="header-tabs"><a href="<?php echo base_url() ?>index.php/Home">Home</a></li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">Company Wise</button>
            <div class="dropdown-content">
            <a href="#">UHG</a>
            <a href="#">Oracle</a>
            <a href="#">CA</a>
            <a href="#">Mu Sigma</a>
            <a href="#">Capegemini</a>
            </div>
          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">Topic Wise</button>
            <div class="dropdown-content">
            <a href="<?php echo base_url()?>index.php/Aptitude">Aptitude</a>
            <a href="<?php echo base_url()?>index.php/Coding">Coding</a>
            </div>
          </div>
        </li>
        <li class="header-tabs"><a href="<?php echo base_url() ?>index.php/Login">Login</a></li>
        <li class="header-tabs"><a href="#">Register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>		
