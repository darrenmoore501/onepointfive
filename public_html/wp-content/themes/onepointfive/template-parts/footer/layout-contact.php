<?php
$form = get_option( 'ecovolt_form_shortcode' );
?>

<div class="col-md-6 col-lg-4 contact">

	<?php if ( $form ) : ?>

		<h3>request a call back</h3>

		<?php echo do_shortcode( $form ); ?>

	<?php endif; ?>

</div>