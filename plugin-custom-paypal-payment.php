<?php
/**
 * Plugin Name:       Plugin Custom Paypal Payment
 * Plugin URI:        https://andres-dev.com/
 * Description:       Este plugin permite realizar pagos personalizados via PayPal o tarjeta de credito.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.1
 * Author:            Andrés Vega
 * Author URI:        https://andres-dev.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://andres-dev.com/
 * Text Domain:       custom-paypal-payment
 * Domain Path:       /languages
 */

define('PAYPAL_PATH', plugin_dir_path((__FILE__)));

require_once PAYPAL_PATH.'/public/paypal-form.php';