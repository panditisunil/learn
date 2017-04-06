<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pagetitle; ?></title>
	
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?= ($this->session->access === '1') ? base_url().'index.php/test/adminhome' : base_url().'index.php/test/home' ?>">Brand</a>
		</div>
	
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<?php
				if($this->session->access === '1'){
			?>
				<li><a href="addnewuser">Add User</a></li>
			<?php
				}else{
			?>
				<li><a href="">User Menu</a></li>
			<?php
				}
			?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="https://placehold.it/18x18" class="profile-image img-circle"><?= $this->session->uname ?><b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="logout"><i class="fa fa-sign-out"></i> Logout</a></li>
				</ul>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>
