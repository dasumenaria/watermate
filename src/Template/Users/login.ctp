 
	<!-- BEGIN LOGIN FORM --> 
 <?= $this->Form->create() ?>
		<div class="form-title">
			<span class="form-title"><img src="img/watermate.png"  style="margin-left:80px; margin-top: 16px;"></span>
 
		</div>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			 <center>
			<?php echo $this->Form->input('email',['label'=>false,'class'=>' ','type'=>'email','placeholder'=>'    Enter Your Email Address','autocomplete'=>'off','style'=>'background:#fff ! important;border: 1px solid #6ba3c8;width:350px;height:45px;color:#000;']);?></center>
		</div>
		<div class="form-group">
			 <center>
			 <?php echo $this->Form->input('password',['label'=>false,'type'=>'password','placeholder'=>'    Enter Your password','autocomplete'=>'off','style'=>'background:#fff ! important;border: 1px solid #6ba3c8;width:350px;height:45px;color:#000;']);?>
			 </center>
		</div>
		<div class="form-actions">
		<center>
		<?= $this->Form->button($this->html->tag('i', '') . __(' Login'),['class'=>'btn btn-primary btn-block uppercase','style'=> 'border: 1px solid #6ba3c8;width:350px;height:45px;color:#fff;' ]); ?>
		</center>
		</div>
		<div class="form-actions">
			<!--<div class="pull-left">
				<label class="rememberme check">
				<input type="checkbox" name="remember" value="1"/>Remember me </label>
			</div>-->
			<div class="pull-right forget-password-block">
				<a href="javascript:;" id="forget-password" class="forget-password" style="color:#4b4949 ! important;  margin-right: 27px;text-decoration:none;">Forgot Password?</a>    
			</div>
			</br>
		</div> 
		 
<!--		<div class="create-account">
			<p>
				<a href="javascript:;" id="register-btn">Create an account</a>
			</p>
		</div>-->
<?= $this->Form->end() ?>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM  
	<form class="forget-form" action="" method="post">
		<div class="form-title">
			<span class="form-title">Forget Password ?</span>
			<span class="form-subtitle">Enter your e-mail to reset it.</span>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn btn-default">Back</button>
			<button type="submit" class="btn btn-primary uppercase pull-right">Submit</button>
		</div>
	</form>-->
 	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	 
	<!-- END REGISTRATION FORM -->
