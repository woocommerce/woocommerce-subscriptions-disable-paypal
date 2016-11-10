<?php
/**
 * Plugin Name: WooCommerce Subscriptions Disable PayPal for Subscription Payments
 * Plugin URI: https://github.com/Prospress/woocommerce-subscriptions-disable-paypal
 * Description: Want to disable PayPal for subscription product purchases, but still offer it as an option for buying one-off products? Activate this plugin. It will also disable PayPal for subscription renewal and payment method changes. Requires WooCommerce 2.2 or newer.
 * Author: Prospress Inc.
 * Author URI: https://prospress.com/
 * Version: 1.0.1
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Brent Shepherd
 * @since  1.0
 */

function wcsdp_get_available_payment_gateways( $available_gateways ) {
	global $wp;

	if ( class_exists( 'WC_Subscriptions_Cart' ) ) {

		// version 1.5 and 2.0 compatibility
		$cart_contains_renewal = function_exists( 'wcs_cart_contains_renewal' ) ? wcs_cart_contains_renewal() : WC_Subscriptions_Cart::cart_contains_subscription_renewal();

		if ( is_checkout_pay_page() ) {
			$order_contains_renewal = function_exists( 'wcs_order_contains_subscription' ) ? wcs_order_contains_subscription( $wp->query_vars['order-pay'] ) : WC_Subscriptions_Order::order_contains_subscription( $wp->query_vars['order-pay'] );
		} else {
			$order_contains_renewal = false;
		}

		if ( WC_Subscriptions_Cart::cart_contains_subscription() || $cart_contains_renewal || $order_contains_renewal || WC_Subscriptions_Change_Payment_Gateway::$is_request_to_change_payment ) {
			if ( isset( $available_gateways['paypal'] ) ) {
				unset( $available_gateways['paypal'] );
			}
		}
	}

	return $available_gateways;
}
add_filter( 'woocommerce_available_payment_gateways', 'wcsdp_get_available_payment_gateways', 11 );
