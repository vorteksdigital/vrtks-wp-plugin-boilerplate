<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/joshuacalebdavids
 * @since      1.0.0
 *
 * @package    VRTKS
 * @subpackage VRTKS/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    VRTKS
 * @subpackage VRTKS/public
 * @author     Joshua Davids <joshuadavids.jcd@gmail.com>
 */
class VRTKS_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $VRTKS    The ID of this plugin.
	 */
	private $VRTKS;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $VRTKS       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $VRTKS, $version ) {

		$this->VRTKS = $VRTKS;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in VRTKS_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The VRTKS_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->VRTKS, plugin_dir_url( __FILE__ ) . 'css/vrtks-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in VRTKS_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The VRTKS_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->VRTKS, plugin_dir_url( __FILE__ ) . 'js/vrtks-public.js', array( 'jquery' ), $this->version, false );

	}

}
