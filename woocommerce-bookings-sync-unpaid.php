<?php
/**
 * Plugin Name:     WooCommerce Bookings - Include unpaid bookings in Google Calendar sync
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Add unpaid bookings to Google Agenda sync (default sync only completed, confirmed and paid)
 * Author:          Magiiic
 * Author URI:      https://magiiic.com
 * Text Domain:     woocommerce-bookings-sync-unpaid
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Woocommerce_Bookings_Sync_Unpaid
 */

// Your code starts here.

add_filter('woocommerce_booking_is_paid_statuses', 'woocommerce_booking_add_unpaid_to_is_paid_statuses');
function woocommerce_booking_add_unpaid_to_is_paid_statuses( $statuses ) {
	 $statuses[]= 'unpaid';
	 return $statuses;
}
