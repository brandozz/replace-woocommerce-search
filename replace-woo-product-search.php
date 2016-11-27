<?php
   /*
   Plugin Name: Replace Woocommerce Product Search
   Plugin URI: http://brandonmcook.com
   Description: Replace the Woocommerce product search form
   Version: 1.0
   Author: Brandon Cook
   Author URI: http://brandonmcook.com
   License: GPL2
   */

   /* replace the woocommerce product search */
   /* target filter get_product_search_form called in wc-template-functions.php */
    if (!function_exists('replace_woo_search')) {
      function replace_woo_search() {
        get_search_form();
      }
      add_filter('get_product_search_form','replace_woo_search');
    }
?>
