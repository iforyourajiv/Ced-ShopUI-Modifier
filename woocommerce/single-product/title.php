<?php
/**
 * Single Product title
 *
 * This template is Overriding The Core Template File pf Woocoomerce "template/single-product/title.php"
 *
 * @link              https://cedcoss.com/
 * @since             1.0.0
 * @package           Ced_Shopuimodifier
 * @version    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

the_title( '<h3 class="product_title entry-title">', '</h3>' );
