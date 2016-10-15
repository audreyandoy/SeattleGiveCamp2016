<?php

add_action('woocommerce_before_shop_loop','master_slider_in_shop');
function master_slider_in_shop() {
  echo do_shortcode('[masterslider id="2"]' );
  echo '<div class="store-text">SHOP</div>';
  echo "<br><br>";
}

function storefront_credit() {
  ?>
  <div class="site-info">
    &copy; <?php echo "COTERIE EST. 2016" ?>
  </div><!-- .site-info -->
  <?php
}
?>

