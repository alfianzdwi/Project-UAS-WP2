<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login Dengan Akun Anda</h2>
						 <h4 style='color:red'>
                   			 <?php echo $this->session->flashdata('flash_msg'); ?> 
			             </h4>
						<form action="<?php echo base_url()?>customer-login" method="post">
							
							<input type="email" placeholder="Email" name="cus_email" />
							<input type="password" placeholder="Password" name="cus_password" />
							<span>
								<input type="checkbox" name="remember" value="on" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				
			
				<div class="col-sm-3 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->
						<h2>User Baru Signup!</h2>
						 <h5 style='color:red'> <?php echo validation_errors();?></h5>
						<form action="<?php echo base_url()?>customer-registration" method="post">
							<input type="text" placeholder="Nama" name="cus_name" value="<?php echo set_value('cus_name'); ?>"/>
							<input type="email" placeholder="Email" name="cus_email" value="<?php echo set_value('cus_email'); ?>"/>
							<input type="password" placeholder="Password" name="cus_password" />
							<input type="password" name="con_pass" placeholder="Konfirmasi Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>

				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form"><!--login form-->
					<h2>Login Sebagai Admin</h2>
					<h4 style='color:red'>
                   			 <?php echo $this->session->flashdata('flash_msg_adm'); ?> 
			        </h4>
						<form role="form" action="<?php echo base_url();?>Login/checklogin" method="post">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="user_password" type="password" value="">
								</div>
								<button type="submit" class="btn btn-default">Login</button>
							</fieldset>
           			 </form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->