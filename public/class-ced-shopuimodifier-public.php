<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://cedcoss.com/
 * @since      1.0.0
 *
 * @package    Ced_Shopuimodifier
 * @subpackage Ced_Shopuimodifier/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Ced_Shopuimodifier
 * @subpackage Ced_Shopuimodifier/public
 * 
 */
class Ced_Shopuimodifier_Public
{


	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * 
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * 
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version     = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ced_Shopuimodifier_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ced_Shopuimodifier_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/ced-shopuimodifier-public.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ced_Shopuimodifier_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ced_Shopuimodifier_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/ced-shopuimodifier-public.js', array('jquery'), $this->version, false);
	}


	/**
	 * Function : Ced_addSoldOutBadge
	 * Description : Whenever the Product Stock will Be 0 or less then Zero this will Show sold out Badges
	 *
	 * @return void
	 * Version:1.0.0
	 * Since:1.0.0
	 * @var $post 
	 * @var $product 
	 */

	public function ced_addSoldOutBadge()
	{
		global $product;
		if (!$product->is_in_stock()) {
			echo  '<span class="onsale">' . esc_html__('Sold OUT!', 'woocommerce') . '</span>';
		} else {
			echo  '<span class="onsale">' . esc_html__('Sale!', 'woocommerce') . '</span>';
		}
	}



	/**
	 *  Function :Ced_modfyTitle_singlePage
	 *
	 * @return void
	 * Version:1.0.0
	 * Since:1.0.0
	 * @param $product
	 * @var $product 
	 * @return void
	 */
	public function ced_modfyTitle_singlePage($template)
	{
		if ('title.php' === basename($template)) {
			$template = PLUGIN_DIRPATH . 'woocommerce/single-product/title.php';
		}
		return $template;
	}


	/**
	 * Function : ced_modify_checkoutField
	 *  Description : This Function Modify The Field Label Of Checkout field
	 *
	 * @return void
	 * Version:1.0.0
	 * Since:1.0.0
	 * @param  mixed $fields
	 * @return $fields
	 */
	public function ced_modify_checkoutField($fields)
	{
		$fields['billing']['billing_email']['label'] = 'Email';
		$fields['billing']['billing_phone']['label'] = 'Mobile';
		return $fields;
	}
}
