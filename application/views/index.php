<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
	
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.vertical-offset-100{
			padding-top:150px;
		}
		.form-control,.panel,.btn{
			border-radius: 0px !important;
		}
	</style>
  </head>
  <body>
    <div class="container">
		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title text-center"><b>Sign in</b></h3>
					</div>
					<div class="panel-body">
						<?php echo validation_errors('<div class="label label-danger">','</div>'); ?>
						<?php echo form_open('login/login_check'); ?>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me"> Remember Me
								</label>
							</div>
							<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="btn_login">
						</fieldset>
						</form>
					</div>
				</div>
				<?php echo $this->session->flashdata('msg'); ?>
			</div>
		</div>
	</div>
	
    <script src="<?php echo base_url("assets/js/jquery-3.1.0.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  </body>
</html>