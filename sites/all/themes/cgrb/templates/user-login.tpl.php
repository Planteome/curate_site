<?php 
	global $base_path;
?>
<section id="login-page">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-sm-offset-3 col-md-offset-3">
				<div class="box-bg-color">
					<h1>User Login</h1>
					<!-- <label>Username*</label> -->
					<?php print drupal_render($form['name']); ?>
					<!-- <input type="text" name="name"> -->
					<!-- <label>Password*</label> -->
					<?php print drupal_render($form['pass']); ?>
					<!-- <input type="text" name="Password"> -->
					
					<p><a href="<?php echo $base_path; ?>user/register">Create new account</a></p>
					<p style="float: right;"><a href="<?php echo $base_path; ?>user/password">Request new password</a></p>
					<?php 
					  		print drupal_render($form['form_build_id']);
						    print drupal_render($form['form_id']);
						    print drupal_render($form['actions']);
					?>
				</div>
			</div>
		</div>
	</div>
</section>