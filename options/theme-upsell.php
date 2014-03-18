<?php
/**
 * Title: Theme Upsell.
 *
 * Description: Displays list of all CyberChimps theme linking to it's pro and free versions.
 *
 * Please do not edit this file. This file is part of the CyberChimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

// Add stylesheet and JS for upsell page.
function cyberchimps_upsell_style() {

	// Set template directory uri
	$directory_uri = get_template_directory_uri();

	wp_enqueue_style( 'bootstrap', $directory_uri . '/cyberchimps/lib/bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap-responsive', $directory_uri . '/cyberchimps/lib/bootstrap/css/bootstrap-responsive.css', 'bootstrap' );
	wp_enqueue_style( 'cyberchimps-responsive', $directory_uri . '/cyberchimps/lib/bootstrap/css/cyberchimps-responsive.css', array( 'bootstrap', 'bootstrap-responsive' ) );

	wp_enqueue_script( 'bootstrap-js', $directory_uri . '/cyberchimps/lib/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );

	wp_enqueue_style( 'upsell_style', get_template_directory_uri() . '/cyberchimps/options/lib/css/upsell.css' );
}

// Add upsell page to the menu.
function cyberchimps_add_upsell() {
	$page = add_theme_page( 'More Themes', 'More Themes', 'administrator', 'cyberchimps-themes', 'cyberchimps_display_upsell' );

	add_action( 'admin_print_styles-' . $page, 'cyberchimps_upsell_style' );
}

add_action( 'admin_menu', 'cyberchimps_add_upsell' );

// Define markup for the upsell page.
function cyberchimps_display_upsell() {

	// Set template directory uri
	$directory_uri = get_template_directory_uri();
	?>
	<div class="wrap">
		<div class="container-fluid">
			<div id="upsell_container">
				<div class="row-fluid">
					<div id="upsell_header" class="span12">
						<h2>
							<a href="http://cyberchimps.com" target="_blank">
								<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/options/upsell-logo.png"/>
	<!-- -------------- Eclipse Pro ------------------- -->

	<div id="eclipse" class="row">
		<div class="theme-container">
			<div class="theme-image col-md-3">
				<a href="http://cyberchimps.com/store/eclipse-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/eclipsepro.jpg"/>
				</a>
			</div>
			<div class="theme-info col-md-9">
				<a class="theme-name" href="http://cyberchimps.com/store/eclipse-pro/" target="_blank"><h4>Eclipse Pro2</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if ( wp_get_theme( "eclipsepro2" )->exists() ) { ?>
					<img class="theme-exists" src="<?php echo $directory_uri ?>/cyberchimps/options/lib/images/tick.png"/>
				<?php } ?>

				<div class="theme-description">
					<p>Eclipse 2 now offers touch friendly Responsive design, as well as Responsive Drag and Drop Theme Options that responds automatically to mobile devices such as the
						iPhone, iPad, and Android.</p>

					<p>Eclipse Pro also includes Drag and Drop Elements such as the Portfolio Element, Responsive Feature Slider, Product Element, Page Content, Image Carousel, Twitter
						bar, Widgetized boxes, and Callout section. All of which can be used on a per-page basis using Drag and Drop Page Options that also include sidebar and layout
						options giving you the power to control the look and feel of every page of your website. We have also added 5 new colored skins to select from!</p>
				</div>

				<a class="buy btn btn-primary" href="http://cyberchimps.com/store/eclipse-pro/" target="_blank"><?php _e( 'Buy Eclipse Pro2', 'cyberchimps_core' ); ?></a>
				<a class="buy  btn btn-info" href="http://demos.cyberchimps.com/eclipsepro/" target="_blank"><?php _e( 'View Demo', 'cyberchimps_core' ); ?></a>
				<a class="free btn btn-success" href="http://cyberchimps.com/eclipse/" target="_blank"><?php _e( 'Try Eclipse 2 Free', 'cyberchimps_core' ); ?></a>
			</div>
		</div>
	</div>

	<!-- -------------- Neuro Pro ------------------- -->

	<div id="neuro" class="row">
		<div class="theme-container">
			<div class="theme-image col-md-3">
				<a href="http://cyberchimps.com/store/neuro-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/neuropro.jpg"/>
				</a>
			</div>
			<div class="theme-info col-md-9">
				<a class="theme-name" href="http://cyberchimps.com/store/neuro-pro/" target="_blank"><h4>Neuro Pro 3</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if ( wp_get_theme( "neuropro3" )->exists() ) { ?>
					<img class="theme-exists" src="<?php echo $directory_uri ?>/cyberchimps/options/lib/images/tick.png"/>
				<?php } ?>

				<div class="theme-description">
					<p>Neuro Pro 3 now offers a clean modern Responsive WordPress Theme featuring Drag and Drop Theme Options. Neuro Pro offers the same advanced functionality as
						CyberChimps other WordPress Themes including a Responsive Design that responds automatically to mobile devices such as the iPhone, iPad, and Android.</p>

					<p>Neuro Pro now features 5 beautiful skins to select from, as well as Drag and Drop Elements such as the Responsive Feature Slider, Image Carousel,
						Twitter bar, Widgetized boxes, and Callout section. All of which can be used on a per-page basis.</p>
				</div>

				<a class="buy btn btn-primary" href="http://cyberchimps.com/store/neuro-pro/" target="_blank"><?php _e( 'Buy Neuro Pro', 'cyberchimps_core' ); ?></a>
				<a class="buy  btn btn-info" href="http://demos.cyberchimps.com/neuropro/" target="_blank"><?php _e( 'View Demo', 'cyberchimps_core' ); ?></a>
				<a class="free btn btn-success" href="http://cyberchimps.com/neuro/" target="_blank"><?php _e( 'Try Neuro Free', 'cyberchimps_core' ); ?></a>
			</div>
		</div>
	</div>

	<!-- -------------- iRibbon Pro ------------------- -->

	<div id="iribbon" class="row">
		<div class="theme-container">
			<div class="theme-image col-md-3">
				<a href="http://cyberchimps.com/store/iribbon-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/iribbonpro.jpg"/>
				</a>
			</div>
			<div class="theme-info col-md-9">
				<a class="theme-name" href="http://cyberchimps.com/store/iribbon-pro/" target="_blank"><h4>iRibbon Pro2</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if ( wp_get_theme( "iribbonpro2" )->exists() ) { ?>
					<img class="theme-exists" src="<?php echo $directory_uri ?>/cyberchimps/options/lib/images/tick.png"/>
				<?php } ?>

				<div class="theme-description">
					<p>iRibbon Pro 2 is a fun and friendly Responsive WordPress Theme featuring Drag and Drop Theme Options. iRibbon Pro offers the same advanced functionality as
						CyberChimps other WordPress Themes including a Responsive Design that responds automatically to mobile devices such as the iPhone, iPad, and Android.</p>

					<p>now features 4 beautiful skins to select from, as well as Drag and Drop Elements such as the Responsive Feature Slider, Image Carousel, Twitter bar, Widgetized
						boxes, and Callout section. All of which can be used on a per-page basis.</p>
				</div>

				<a class="buy btn btn-primary" href="http://cyberchimps.com/store/iribbon-pro/" target="_blank"><?php _e( 'Buy iRibbon Pro2', 'cyberchimps_core' ); ?></a>
				<a class="buy  btn btn-info" href="http://demos.cyberchimps.com/iribbonpro2/" target="_blank"><?php _e( 'View Demo', 'cyberchimps_core' ); ?></a>
				<a class="free btn btn-success" href="http://cyberchimps.com/iribbon/" target="_blank"><?php _e( 'Try iRibbon 2 Free', 'cyberchimps_core' ); ?></a>
			</div>
		</div>
	</div>

	<!-- -------------- Cyberchimps Pro ------------------- -->

	<div id="cyberchimps" class="row">
		<div class="theme-container">
			<div class="theme-image col-md-3">
				<a href="http://cyberchimps.com/store/cyberchimps-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/cyberchimpspro.jpg"/>
				</a>
			</div>
			<div class="theme-info col-md-9">
				<a class="theme-name" href="http://cyberchimps.com/store/cyberchimps-pro/" target="_blank"><h4>Cyberchimps Pro</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if ( wp_get_theme( "cyberchimpspro" )->exists() ) { ?>
					<img class="theme-exists" src="<?php echo $directory_uri ?>/cyberchimps/options/lib/images/tick.png"/>
				<?php } ?>

	<script>
		jQuery(function () {
			jQuery('.download').tooltip();
			jQuery('.theme-exists').tooltip();
		});
	</script>
<?php
}

// Get all CyberChimps themes by using API.
function cyberchimps_get_themes( $request ) {

	// Generate a cache key that would hold the response for this request:
	$key = 'cyberchimps_' . md5( serialize( $request ) );

	// Check transient. If it's there - use that, if not re fetch the theme
	if ( false === ( $themes = get_transient( $key ) ) ) {

		// Transient expired/does not exist. Send request to the API.
		$response = wp_remote_post( 'http://api.wordpress.org/themes/info/1.0/', $request );

		// Check for the error.
		if ( !is_wp_error( $response ) ) {

			$themes = unserialize( wp_remote_retrieve_body( $response ) );

			if ( !is_object( $themes ) && !is_array( $themes ) ) {

				// Response body does not contain an object/array
				return new WP_Error( 'theme_api_error', 'An unexpected error has occurred' );
			}

			// Set transient for next time... keep it for 24 hours should be good
			set_transient( $key, $themes, 60 * 60 * 24 );
		}
		else {
			// Error object returned
			return $response;
		}
	}

	return $themes;
}
