<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center"><b>Add User</b></h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('test/registeruser'); ?>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
								</div>
							</div>
						</div>
						<input type="submit" value="Register" class="btn btn-info btn-block">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>