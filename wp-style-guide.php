<?php
/*
Plugin Name: WordPress Style Guide
Plugin URI: https://github.com/helenhousandi/wp-style-guide
Description: Because it's horrible that we don't have one.
Version: 1.0
Author: The WordPress Team
Author URI: http://wordpress.org
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

class WP_Style_Guide {
	/**
	 * Screens added.
	 * @var array
	 */
	private $screens;

	/**
	 * Hook name of the top level page.
	 * @var string
	 */
	private $hookname;

	/**
	 * Set up hooks.
	 */
	public function __construct() {
		// define our screens
		$this->screens = array(
			'mp6-sg-jquery-ui' => array(
				'page_title' => __( 'jQuery UI Components' ),
				'menu_title' => __( 'jQuery UI Components' ),
				'callback' => 'jquery_ui', // note that this has to be a class method
				'hookname' => null,
			),
			'mp6-sg-forms' => array(
				'page_title' => __( 'Forms' ),
				'menu_title' => __( 'Forms' ),
				'callback' => 'forms_page', // note that this has to be a class method
				'hookname' => null,
			),
			'mp6-sg-helper-classes' => array(
				'page_title' => __( 'Helper Classes' ),
				'menu_title' => __( 'Helper Classes' ),
				'callback' => 'helper_classes', // note that this has to be a class method
				'hookname' => null,
			),
		);

		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
		add_action( 'admin_head', array( $this, 'admin_head' ) );
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	 * Enqueue scripts and styles as needed.
	 * @return void
	 */
	public function admin_enqueue_scripts() {
		if ( get_current_screen()->base === $this->screens['mp6-sg-jquery-ui']['hookname'] ) {
			wp_enqueue_script( 'jquery-ui-accordion' );
			wp_enqueue_script( 'jquery-ui-tabs' );
			wp_enqueue_script( 'jquery-ui-dialog' );
			wp_enqueue_script( 'jquery-ui-slider' );
			wp_enqueue_script( 'jquery-ui-datepicker' );
			wp_enqueue_script( 'jquery-ui-progressbar' );
			wp_enqueue_script( 'jquery-ui-button' );

			// temporary style
			wp_enqueue_style( 'jquery-ui-smoothness', '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css', false, '1.10.3' );

			// initialization script and styles - just dump it in the head
			add_action( 'admin_head-' . $this->screens['mp6-sg-jquery-ui']['hookname'], array( $this, 'jquery_ui_init' ) );
		}
	}

	public function admin_head() {
?>
<style>
	.mp6 #adminmenu .<?php echo $this->hookname; ?> .wp-menu-image:before {
		content: '\f309';
	}
</style>
<?php
	}

	public function jquery_ui_init() {
?>
<script type="text/javascript">
jQuery(function($){

	// Accordion
	$(".accordion").accordion({ header: "h3" });
	$(".accordion").last().accordion("option", "icons", false);


	// Tabs
	$('#tabs').tabs();


	// Dialog
	$('#dialog').dialog({
		autoOpen: false,
		width: 600,
		buttons: {
			"Ok": function() {
				$(this).dialog("close");
			},
			"Cancel": function() {
				$(this).dialog("close");
			}
		}
	});

	// Dialog Link
	$('#dialog_link').click(function(){
		$('#dialog').dialog('open');
		return false;
	});

	// Datepicker
	$('#datepicker').datepicker({
		inline: true,
		showWeek: true
	});

	$('#multidatepicker').datepicker({
		numberOfMonths: 3,
		showButtonPanel: true,
		inline: true
	});

	// Slider
	$('.slider').slider({
		range: true,
		values: [17, 67]
	});

	$("#eq > span").each(function() {
		var value = parseInt($(this).text());
		$(this).empty().slider({
			value: value,
			range: "min",
			animate: true,
			orientation: "vertical"
		});
	});


	// Progressbar
	$("#progressbar").progressbar({
		value: 20
	});

	//hover states on the static widgets
	$('#dialog_link, ul#icons li').hover(
		function() { $(this).addClass('ui-state-hover'); },
		function() { $(this).removeClass('ui-state-hover'); }
	);

	$(".buttonset > button").button()
	.next()
	.button({
		text: false,
		icons: {
			primary: "ui-icon-triangle-1-s"
		}
	})
	.parent()
	.buttonset();


	$('#beginning').button({
		text: false,
		icons: {
			primary: 'ui-icon-seek-start'
		}
	});
	$('#rewind').button({
		text: false,
		icons: {
			primary: 'ui-icon-seek-prev'
		}
	});
	$('#play').button({
		text: false,
		icons: {
			primary: 'ui-icon-play'
		}
	});
	$('#stop').button({
		text: false,
		icons: {
			primary: 'ui-icon-stop'
		}
	});
	$('#forward').button({
		text: false,
		icons: {
			primary: 'ui-icon-seek-next'
		}
	});
	$('#end').button({
		text: false,
		icons: {
			primary: 'ui-icon-seek-end'
		}
	});
	$("#shuffle").button();
	$("#repeat").buttonset();

});
</script>
<style type="text/css">
/*demo page css*/
.demoHeaders { margin-top: 2em; clear:both; }
#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
ul#icons {margin: 0; padding: 0;}
ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
ul#icons span.ui-icon {float: left; margin: 0 4px;}
.columnbox { height: 150px; width: 48%; float:left; margin-right: 1%; }
#eq span { 	height:120px; float:left; margin:15px 	}
.buttonset {margin-bottom: 5px; }
#toolbar { padding: 10px 4px;  }
.ui-widget-overlay { position: absolute; } /* fixed doesn't actually work? */
</style>
<?php
	}

	/**
	 * Add admin screens
	 * @return void
	 */
	public function admin_menu() {
		$this->hookname = add_menu_page( 'WordPress Style Guide', 'Style Guide', 'read', 'mp6-sg', array( $this, 'toc' ) );

		foreach ( $this->screens as $slug => $args ) {
			$this->screens[$slug]['hookname'] = add_submenu_page( 'mp6-sg', $args['page_title'], $args['menu_title'], 'read', $slug, array( $this, $args['callback'] ) );
		}
	}

	/**
	 * Output for our top level screen
	 * @return void
	 */
	public function toc() {
?>
<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php _e( 'WordPress Style Guide' ); ?></h2>

	<h3><?php _e( 'Table of Contents' ); ?></h3>

	<ul class="ul-disc">
	<?php foreach( $this->screens as $slug => $args ) : ?>
		<li><a href="<?php echo esc_url( admin_url( 'admin.php?page=' . $slug ) ); ?>"><?php echo esc_html( $args['page_title'] ); ?></a></li>
	<?php endforeach; ?>
	</ul>

</div><!-- .wrap -->
<?php
	}

	/**
	 * Output jQuery UI components admin page using jQuery UI's theme visual test
	 * @return void
	 */
	public function jquery_ui() {
		include_once( 'pages/jquery-ui.php' );
	}

	/**
	 * Output form component admin page
	 * @return void
	 */
	public function forms_page() {
		include_once( 'pages/forms-page.php' );
	}

	public function helper_classes() {
		include_once( 'pages/helper-classes.php' );
	}
}

$wp_style_guide = new WP_Style_Guide;
