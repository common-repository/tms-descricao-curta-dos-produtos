<?php

/**
 * Plugin Name: TMS-Descricao curta dos produtos
 * Plugin URI: https://www.skinmodas.com.br/parabens-pelo-seu-plugin-tm/
 * Description: descricoees inseridas dos produtos na página inicial.
 * Version: 1.0
 * Author: Tiago Magalhães Santos
 * @package WooCommerce
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


function tmsdcdp_excerpt_in_product_archives() {
     
  the_excerpt();
     
}

add_action( 'woocommerce_after_shop_loop_item_title', 'tmsdcdp_excerpt_in_product_archives', 40 );