# WooCommerce Subscriptions Disable PayPal

Using [WooCommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/)? Want to disable PayPal for subscription purchases, but still offer it for one-off products?

Install and activate this plugin. It will also disable PayPal for [subscription renewal](https://docs.woocommerce.com/document/subscriptions/renewal-process/).

> Note: this plugin was originally made available [via a Gist](https://gist.github.com/thenbrent/6641526). It's been moved into this repository because of the discussion and popularity of that gist.

## Requirements

This plugin requires WooCommerce 2.2 or newer. It will work with any version of Subscriptions, even v1.5 (but _please_ update to Subscriptions 2.0 or newer :pray:).

## Existing PayPal Subscriptions
If your store has subscriptions set up with PayPal Standard before installing this plugin, those existing subscriptions will continue as normal with this plugin. This plugin simply removes PayPal as a payment option on the checkout if the cart contains a subscription.

So to clarify, this plugin prevents new subscription sign-ups to be processed with PayPal Standard, [PayPal IPNs](https://developer.paypal.com/webapps/developer/docs/classic/products/instant-payment-notification/) for existing subscriptions will continue to process.

## Installation

To install:

1. Download the latest version of the plugin [here](https://github.com/Prospress/woocommerce-subscriptions-disable-paypal/archive/master.zip)
1. Go to **Plugins > Add New > Upload** administration screen on your WordPress site
1. Select the ZIP file you just downloaded
1. Click **Install Now**
1. Click **Activate**

## Reporting Issues

If you find an problem or would like to request this plugin be extended, please [open a new Issue](https://github.com/Prospress/woocommerce-subscriptions-disable-paypal/issues/new).

---

<p align="center">
	<a href="https://prospress.com/">
		<img src="https://cloud.githubusercontent.com/assets/235523/11986380/bb6a0958-a983-11e5-8e9b-b9781d37c64a.png" width="160">
	</a>
</p>
