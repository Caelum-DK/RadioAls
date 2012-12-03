<?php 

/*
Template Name: Kontakt
*/

?>

<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['contactName']) === '') {
			$nameError = 'Du mangler at skrive dit navn';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'Du mangler at skrive din emailadresse.';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = 'Den indtastede adresse er ugyldig.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		//Check to make sure comments were entered	
		if(trim($_POST['comments']) === '') {
			$commentError = 'Skriv din besked her.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
			
		//If there is no error, send the email
		if(!isset($hasError)) {

			$emailTo = 'kontakt@caelum.dk';
			$subject = 'Kontaktformular, besked fra '.$name;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Navn: $name \n\nEmail: $email \n\nBesked: $comments";
			$headers = 'From: Radio Als <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'You emailed Your Name';
				$headers = 'From: Your Name <noreply@somedomain.com>';
				mail($email, $subject, $body, $headers);
			}

			$emailSent = true;

		}
	}
} ?>

<?php get_header(); ?>


<div class="shadow_wrap_800px">
	<div class="content_wrapper page_content">

		<div class="content_heading full twelve columns">
				<h1><?php the_title(); ?></h1>
				<h2><?php the_field('subtitle'); ?></h2>
		</div>

		<div class="page-left columns">

			<div class="content-entry">

				<div class="contact_form">

					<?php if(isset($emailSent) && $emailSent == true) { ?>

						<div class="thanks">
							<h1>Tak, <?=$name;?></h1>
							<p>Din besked er sendt. Du hører fra os hurtigst muligt!</p>
						</div>

					<?php } else { ?>

						<?php if (have_posts()) : ?>
						
						<?php while (have_posts()) : the_post(); ?>
							<h3>mail: <a href="mailTo:radioals@radioals.dk" target="_blank" title="Send os en mail">radioals@radioals.dk »</a></h3>
							<?php the_content(); ?>
							
							<?php if(isset($hasError) || isset($captchaError)) { ?>
								<p class="error">Fejl i de indtastede oplysninger!<p>
							<?php } ?>
						
							<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
						
								<ul class="forms">
									<li>
										<input type="text" class="input-text" name="contactName" id="contactName" placeholder="Navn" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />
										<?php if($nameError != '') { ?>
											<span class="error"><?=$nameError;?></span> 
										<?php } ?>
									</li>
									
									<li>
										<input type="text" class="input-text" name="email" id="email" placeholder="Email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
										<?php if($emailError != '') { ?>
											<span class="error"><?=$emailError;?></span>
										<?php } ?>
									</li>
									
									<li class="textarea">
										<textarea name="comments" id="commentsText" rows="20" cols="30" class="requiredField" placeholder="Besked"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
										<?php if($commentError != '') { ?>
											<span class="error"><?=$commentError;?></span> 
										<?php } ?>
									</li>
									
									<li class="screenReader"><label for="checking" class="screenReader">If you want to submit this form, do not enter anything in this field</label><input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" /></li>
									<li class="buttons"><input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit">Send</button></li>
									<div style="clear:both"></div>
								</ul>
							</form>
						
							<?php endwhile; ?>
						<?php endif; ?>
					<?php } ?>
				</div>
			</div>

		</div>
		<div class="page_splitter"></div>
		<div class="page-right columns">
			<hr class="sidebar_hr">
			<div class="content-entry">
				<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
			</div>
		</div>

		<div style="clear:both"></div>
	</div>
	<?php get_template_part( 'banner_right'); ?>
</div>

<?php get_footer(); ?>