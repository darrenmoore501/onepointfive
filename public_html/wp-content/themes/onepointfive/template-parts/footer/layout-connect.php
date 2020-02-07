<?php
$email = get_option( 'ecovolt_email_address' );
$phone = get_option( 'ecovolt_phone_number' );

$facebook = get_option( 'ecovolt_facebook' );
$twitter  = get_option( 'ecovolt_twitter' );
$linkedin = get_option( 'ecovolt_linkedin' );

?>

<div class="col-md-5 offset-md-1 col-lg-4 offset-lg-0 connect">

	<h3>connect with us</h3>

	<ul>
		<?php if ( $phone ) : ?>
			<li><a href="tel:<?php echo $phone; ?>"><i class="fas fa-phone-square"></i> <?php echo $phone; ?></a></li>
		<?php endif; ?>

		<?php if ( $email ) : ?>
			<li><a href="mailto:<?php echo $email; ?>"><i class="fas fa-envelope-square"></i> <?php echo $email; ?></a></li>
		<?php endif; ?>
	</ul>

	<div class="social">

		<?php if ( $facebook ) : ?>
			<a href="<?php echo $facebook; ?>>" target="_blank" rel="noopener nofollow">
				<i class="fab fa-facebook-square"></i>
			</a>
		<?php endif; ?>

		<?php if ( $twitter ) : ?>
			<a href="<?php echo $twitter; ?>>" target="_blank" rel="noopener nofollow">
				<i class="fab fa-twitter-square"></i>
			</a>
		<?php endif; ?>

		<?php if ( $linkedin ) : ?>
			<a href="<?php echo $linkedin; ?>>" target="_blank" rel="noopener nofollow">
				<i class="fab fa-linkedin"></i>
			</a>
		<?php endif; ?>


	</div>
</div>