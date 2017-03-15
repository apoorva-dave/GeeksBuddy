<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>">GeeksBuddy</a>
	</div>
  
    <!-- Brand and toggle get grouped for better mobile display -->
   	    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li class="header-tabs"><a href="<?php echo base_url() ?>">Home</a></li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">Company Wise</button>
            <div class="dropdown-content">
                <a href="<?php echo base_url() ?>/questions/company/algebraic-expressions">Oracle</a>
                <a href="<?php echo base_url() ?>/questions/company/speed-and-boat">UHG</a>
                <a href="#">CA Technologies</a>
                <a href="<?php echo base_url() ?>/ViewCompanies">View-All</a>
                

            </div>
          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">Questions</button>
            <div class="dropdown-content">
            <a href="<?php echo base_url()?>/Aptitude">Aptitude &amp; Coding</a>
            </div>
          </div>
        </li>
        <?php if (!($this->session->userdata('is_logged_in'))) { ?>
          <li class="header-tabs"><a href="<?php echo base_url() ?>Login">Login</a></li>
          <li class="header-tabs"><a href="<?php echo base_url()?>Register"> Register</a></li>
        <?php } ?>
          <li class="header-tabs"><a href="<?php echo base_url() ?>test">Take Test</a></li>
        <?php if ($this->session->userdata('is_logged_in')) { ?>
          <li class="header-tabs action="<?php echo base_url()?>/login/logout"><a href="<?php echo base_url()?>/Login/logout"> Logout</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>		
