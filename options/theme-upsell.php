<?php
/**
 * Title: Theme Upsell.
 *
 * Description: Displays list of all Cyberchimps theme linking to it's pro and free versions.
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
	$page = add_theme_page( 'CyberChimps Themes', 'CyberChimps Themes', 'administrator', 'cyberchimps-themes', 'cyberchimps_display_upsell' );

	add_action( 'admin_print_styles-' . $page, 'cyberchimps_upsell_style' );
}

add_action( 'admin_menu', 'cyberchimps_add_upsell' );

// Define markup for the upsell page.
function cyberchimps_display_upsell() {

	// Set template directory uri
	$directory_uri = get_template_directory_uri();
	?>

	<div class="wrap">
	<div class="container">
	<div id="upsell_container">
	<div class="row">
		<div id="upsell_header" class="span12">
			<h2>
				<a href="http://cyberchimps.com" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/options/upsell-logo.png"/>
				</a>
			</h2>
			<h5><?php _e( 'Themes You Can Trust', 'cyberchimps_core' ); ?></h5>
		</div>
	</div>
	<div id="upsell_themes" class="row">

	<!-- -------------- Ifeature Pro ------------------- -->

	<div id="ifeature" class="row">
		<div class="theme-container">
			<div class="theme-image span3">
				<a href="http://cyberchimps.com/store/ifeaturepro5/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/ifeaturepro.jpg"/>
				</a>
			</div>
			<div class="theme-info span9">
				<a class="theme-name" href="http://cyberchimps.com/store/ifeaturepro5/" target="_blank"><h4>iFeature Pro5</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if( wp_get_theme( "ifeaturepro5" )->exists() ) { ?>
					<img class="theme-exists" src="<?php echo $directory_uri ?>/cyberchimps/options/lib/images/tick.png"/>
				<?php } ?>

				<div class="theme-description">
					<p>iFeature Pro 5 is the World's first Touch Friendly Responsive Drag & Drop WordPress Theme. iFeature Pro 5 lets you create amazing responsive websites that you can
						control on any touch device including the iPad, iPhone, and Android devices.</p>

					<p>iFeature Pro 5 also includes the power of a dozen plugins in a single theme allowing you to setup an entire website in minutes with touch friendly Drag and Drop
						Options on a per-page basis allowing you control the look and feel of every page.</p>
				</div>

				<a class="buy btn btn-primary" href="http://cyberchimps.com/store/ifeaturepro5/" target="_blank"><?php _e( 'Buy iFeature Pro5', 'cyberchimps_core' ); ?></a>
				<a class="buy  btn btn-info" href="http://demos.cyberchimps.com/ifeaturepro/" target="_blank"><?php _e( 'View Demo', 'cyberchimps_core' ); ?></a>
				<a class="free btn btn-success" href="http://cyberchimps.com/ifeature-free/" target="_blank"><?php _e( 'Try iFeature 5 Free', 'cyberchimps_core' ); ?></a>
			</div>
		</div>
	</div>

	<!-- -------------- Business Pro ------------------- -->

	<div id="business" class="row">
		<div class="theme-container">
			<div class="theme-image span3">
				<a href="http://cyberchimps.com/store/business-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/businesspro.jpg"/>
				</a>
			</div>
			<div class="theme-info span9">
				<a class="theme-name" href="http://cyberchimps.com/store/business-pro/" target="_blank"><h4>Business Pro4</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if( wp_get_theme( "businesspro4" )->exists() ) { ?>
					<img class="theme-exists" src="<?php echo $directory_uri ?>/cyberchimps/options/lib/images/tick.png"/>
				<?php } ?>

				<div class="theme-description">
					<p>Business Pro 4 from CyberChimps WordPress Themes is a Professional Responsive Business WordPress Theme perfect for any business on any device. It gives your company
						the tools launch a professional website quickly turning WordPress into a modern Drag and Drop Content Management System (CMS).</p>

					<p>Business Pro 4 is built with HTML5, CSS3, and <a href="http://twitter.github.io/bootstrap/">Twitter Bootstrap</a>.</p>
				</div>

				<a class="buy btn btn-primary" href="http://cyberchimps.com/store/business-pro/" target="_blank"><?php _e( 'Buy Business Pro4', 'cyberchimps_core' ); ?></a>
				<a class="buy btn btn-info" href="http://demos.cyberchimps.com/businesspro/" target="_blank"><?php _e( 'View Demo', 'cyberchimps_core' ); ?></a>
				<a class="free btn btn-success" href="http://cyberchimps.com/businesslite/" target="_blank"><?php _e( 'Try Business Lite', 'cyberchimps_core' ); ?></a>
			</div>
		</div>
	</div>

	<!-- -------------- Eclipse Pro ------------------- -->

	<div id="eclipse" class="row">
		<div class="theme-container">
			<div class="theme-image span3">
				<a href="http://cyberchimps.com/store/eclipse-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/eclipsepro.jpg"/>
				</a>
			</div>
			<div class="theme-info span9">
				<a class="theme-name" href="http://cyberchimps.com/store/eclipse-pro/" target="_blank"><h4>Eclipse Pro2</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if( wp_get_theme( "eclipsepro2" )->exists() ) { ?>
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
			<div class="theme-image span3">
				<a href="http://cyberchimps.com/store/neuro-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/neuropro.jpg"/>
				</a>
			</div>
			<div class="theme-info span9">
				<a class="theme-name" href="http://cyberchimps.com/store/neuro-pro/" target="_blank"><h4>Neuro Pro 3</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if( wp_get_theme( "neuropro3" )->exists() ) { ?>
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
			<div class="theme-image span3">
				<a href="http://cyberchimps.com/store/iribbon-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/iribbonpro.jpg"/>
				</a>
			</div>
			<div class="theme-info span9">
				<a class="theme-name" href="http://cyberchimps.com/store/iribbon-pro/" target="_blank"><h4>iRibbon Pro2</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if( wp_get_theme( "iribbonpro2" )->exists() ) { ?>
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
			<div class="theme-image span3">
				<a href="http://cyberchimps.com/store/cyberchimps-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/cyberchimpspro.jpg"/>
				</a>
			</div>
			<div class="theme-info span9">
				<a class="theme-name" href="http://cyberchimps.com/store/cyberchimps-pro/" target="_blank"><h4>Cyberchimps Pro</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if( wp_get_theme( "cyberchimpspro" )->exists() ) { ?>
					<img class="theme-exists" src="<?php echo $directory_uri ?>/cyberchimps/options/lib/images/tick.png"/>
				<?php } ?>

				<div class="theme-description">
					<p>CyberChimps Pro Website Builder is an advanced Responsive Starter Theme for WordPress. CyberChimps Pro is built on Twitter Bootstrap, and features a fully responsive
						design, and touch friendly Drag and Drop theme options that work on the iPad, iPhone, and Android devices.</p>

					<p>CyberChimps Pro is designed for anyone looking to build their own website including first time WordPress users, graphic designers, and developers who want a 6-month
						head start on the competition.</p>
				</div>

				<a class="buy btn btn-primary" href="http://cyberchimps.com/store/cyberchimps-pro/" target="_blank"><?php _e( 'Buy Cyberchimps Pro', 'cyberchimps_core' ); ?></a>
				<a class="buy  btn btn-info" href="http://demos.cyberchimps.com/cyberchimpspro/" target="_blank"><?php _e( 'View Demo', 'cyberchimps_core' ); ?></a>
				<a class="free btn btn-success" href="http://cyberchimps.com/cyberchimps-free/" target="_blank"><?php _e( 'Try cyberchimps Free', 'cyberchimps_core' ); ?></a>
			</div>
		</div>
	</div>

	<!-- -------------- Responsive Pro ------------------- -->

	<div id="responsive" class="row">
		<div class="theme-container">
			<div class="theme-image span3">
				<a href="http://cyberchimps.com/store/responsive-pro/" target="_blank">
					<img src="<?php echo $directory_uri; ?>/cyberchimps/options/lib/images/themes/responsivepro.png"/>
				</a>
			</div>
			<div class="theme-info span9">
				<a class="theme-name" href="http://cyberchimps.com/store/cyberchimps-pro/" target="_blank"><h4>Responsive Pro</h4></a>

				<!-- Check if the theme is installed, if so then add a tick mark -->
				<?php if( wp_get_theme( "responsivepro" )->exists() ) { ?>
					<img class="theme-exists" src="<?php echo $directory_uri ?>/cyberchimps/options/lib/images/tick.png"/>
				<?php } ?>

				<div class="theme-description">
					<p>CyberChimps Pro Website Builder is an advanced Responsive Starter Theme for WordPress. CyberChimps Pro is built on Twitter Bootstrap, and features a fully responsive
						design, and touch friendly Drag and Drop theme options that work on the iPad, iPhone, and Android devices.</p>

					<p>CyberChimps Pro is designed for anyone looking to build their own website including first time WordPress users, graphic designers, and developers who want a 6-month
						head start on the competition.</p>
				</div>

				<a class="buy btn btn-primary" href="http://cyberchimps.com/store/responsive-pro/" target="_blank"><?php _e( 'Buy Responsive Pro', 'cyberchimps_core' ); ?></a>
				<a class="buy  btn btn-info" href="http://demos.cyberchimps.com/responsivepro/" target="_blank"><?php _e( 'View Demo', 'cyberchimps_core' ); ?></a>
				<a class="free btn btn-success" href="http://cyberchimps.com/responsive-free/" target="_blank"><?php _e( 'Try Responsive Free', 'cyberchimps_core' ); ?></a>
			</div>
		</div>
	</div>

	</div>
	<!-- upsell themes -->
	</div>
	<!-- upsell container -->
	</div>
	<!-- container -->
	</div>
<?php
}

?>