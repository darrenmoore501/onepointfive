<?php
/**
 * Class Settings
 * Adds theme specific settings under the appearance parent menu
 */

new Settings();

class Settings
{
	public function __construct()
	{
		/*add_theme_page( "Theme Options",
			"Theme Options",
			"manage_options",
			"theme-options",
			array( $this, 'theme_options_page' ) );
		add_action( 'admin_init',
			array( $this, 'theme_settings' ) );*/
	}

	public function theme_options_page()
	{
		?>
		<div class="wrap">
			<h1>EcoVolt Theme Options</h1>

			<form method="post" action="options.php">
				<?php
				settings_fields( "theme-options-grp" );
				// display all sections for theme-options page
				do_settings_sections( "theme-options" );
				submit_button();
				?>
			</form>
		</div>
		<?php
	}

	function theme_settings()
	{
		add_settings_section( 'contact_settings',
			'Contact Information Settings',
			array( $this, 'theme_settings_contact_section_description' ),
			'theme-options' );

		// Email Address
		$this->create_theme_setting( 'ecovolt_email_address',
			'Contact Email Address',
			array( $this, 'ecovolt_field_callback' ),
			'contact_settings',
			array(
				'option_id' => 'ecovolt_email_address',
				'type'      => 'email',
				'message'   => 'Shows in the footer.'
			) );

		// Telephone Number
		$this->create_theme_setting( 'ecovolt_phone_number',
			'Contact Phone Number',
			array( $this, 'ecovolt_field_callback' ),
			'contact_settings',
			array(
				'option_id' => 'ecovolt_phone_number',
				'type'      => 'text',
				'message'   => 'Shows in the footer.'
			) );

		// Facebook
		$this->create_theme_setting( 'ecovolt_facebook',
			'Facebook URL',
			array( $this, 'ecovolt_field_callback' ),
			'contact_settings',
			array(
				'option_id' => 'ecovolt_facebook',
				'type'      => 'text',
				'message'   => 'Shows in the footer.'
			) );

		// Twitter
		$this->create_theme_setting( 'ecovolt_twitter',
			'Twitter URL',
			array( $this, 'ecovolt_field_callback' ),
			'contact_settings',
			array(
				'option_id' => 'ecovolt_twitter',
				'type'      => 'text',
				'message'   => 'Shows in the footer.'
			) );

		// LinkedIn
		$this->create_theme_setting( 'ecovolt_linkedin',
			'LinkedIn URL',
			array( $this, 'ecovolt_field_callback' ),
			'contact_settings',
			array(
				'option_id' => 'ecovolt_linkedin',
				'type'      => 'text',
				'message'   => 'Shows in the footer.'
			) );

		// Form
		$this->create_theme_setting( 'ecovolt_form_shortcode',
			'Form Shortcode',
			array( $this, 'ecovolt_field_callback' ),
			'contact_settings',
			array(
				'option_id' => 'ecovolt_form_shortcode',
				'type'      => 'text',
				'message'   => 'Form that shows in the footer.'
			) );
	}

	/**
	 * @param string $option_id
	 * @param string $option_title
	 * @param array $option_callback
	 * @param string $option_section
	 * @param array $option_args
	 *
	 * Helper method to create options, the settings field and register the setting
	 */
	function create_theme_setting( string $option_id, string $option_title, array $option_callback, string $option_section, array $option_args )
	{
		add_option( $option_id, 1 ); // add theme option to database

		add_settings_field( $option_id,
			$option_title,
			$option_callback,
			'theme-options',
			$option_section,
			$option_args );

		register_setting( 'theme-options-grp', $option_id );
	}

	/**
	 * Creates the contact information settings section description
	 */
	function theme_settings_contact_section_description()
	{
		echo '<p>Use this interface to change common settings within the theme. Including social media links and contact information</p>';
	}

	/**
	 * @param array $args
	 *
	 * Helper method to easily create a form field
	 */
	function ecovolt_field_callback( array $args )
	{
		$option_id = $args[ 'option_id' ];
		$type      = $args[ 'type' ];
		$message   = $args[ 'message' ];

		$value = get_option( $option_id );
		echo "<input name='$option_id' id='$option_id' type='$type' value='$value'  /> $message";
	}


}