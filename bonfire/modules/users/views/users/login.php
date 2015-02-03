<?php //$site_open = $this->settings_lib->item('auth.allow_register'); ?>

			<?php echo form_open('login', array('class' => "form-horizontal", 'autocomplete' => 'off','id'=>'loginform')); ?>
			 <div class="form-body pal">
                <div class="form-group">
                    <div class="col-md-3">
                        <img src="<?php echo site_url()."bonfire/themes/admin-dark/images/avatar/profile-pic.png"?>" class="img-responsive" style="margin-top: -35px;" />
                    </div>
                    <div class="col-md-9 text-center">
                    	<?php if (auth_errors() || validation_errors()) : ?>
							<div class="alert warning"><?php echo auth_errors() . validation_errors(); ?></div>
						<?php endif; ?>
                        <h1>Hold on, please.</h1>
                        <br/>
                        <p>Just sign in and we’ll send you on your way</p>
                    </div>
                </div>
                
                <div class="form-group">
					<div class="col-md-9">
						<div class="input-icon right">
	                        <i class="fa fa-user"></i>
							<input type="text" class="form-control" name="login" id="login_value" value="<?php echo set_value('login'); ?>" tabindex="1" placeholder="<?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>" />
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-9">
                        <div class="input-icon right">
                        	<i class="fa fa-lock"></i>
							<input type="password" class="form-control" name="password" id="password" value="" tabindex="2" placeholder="<?php echo lang('bf_password'); ?>" />
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-9">
						<?php if ($this->settings_lib->item('auth.allow_remember')) : ?>
							<input type="checkbox" name="remember_me" id="remember_me" value="1" tabindex="3"><label for="remember_me" class="rememberme"><?php echo lang('us_remember_note'); ?></label>
						<?php endif; ?>
					</div>
				</div>
					
				<div class="form-group mbn">
					<div class="col-lg-12">
						<div class="form-group mbn">
                            <div class="col-lg-9">
								<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Let Me In" tabindex="5" />
							</div>
						</div>
					</div>
				</div>
				
             </div>       
<?php echo form_close(); ?>

<?php //if ( $site_open ) : ?>
	<p style="text-align: center">
		<a href="<?php echo site_url('register');?>"><?php echo lang('us_sign_up');?></a>
	</p>
<?php // endif; ?>
