<!doctype html>
<html lang="en">
<head>
<?php
include( "inc/common/inc_base_info.php" );
include( "inc/common/inc_header_css.php" );
?>
<!-- Title -->
<title><?=$brand_name ;?></title>
</head>
<body>

<!-- MODALS -->
<?php
include( "inc/common/modals/newsletter_horizontal_modals.php" );
include( "inc/common/modals/newsletter_vertical.php" );
include( "inc/common/modals/password_reset_modals.php" );
include( "inc/common/modals/product_modals.php" );
include( "inc/common/modals/search_modals.php" );
include( "inc/common/modals/shopping_cart_modals.php" );
include( "inc/common/modals/sidebar_modals.php" );
include( "inc/common/modals/size_chart_modals.php" );
include( "inc/common/modals/wait_list_modals.php" );
?>
<!-- MODALS_end -->

<?php
include( "inc/common/inc_navbar_top.php" );
include( "inc/common/inc_navbar_index_fashion.php" );
?>
<?php
include( "inc/index_fashion/inc_navbar_index_fashion_black.php" );
include( "inc/index_fashion/inc_welcome_index_fashion.php" );
include( "inc/index_fashion/inc_sale_index_fashion.php" );
include( "inc/index_fashion/inc_top_sellers_index_fashion.php" );
include( "inc/index_fashion/inc_must_haves_index_fashion.php" );
include( "inc/index_fashion/inc_new_collection.php" );
include( "inc/index_fashion/inc_brand_index_fashion.php" );
include( "inc/index_fashion/inc_new_arrival_index_fashion.php" );
include( "inc/index_fashion/inc_newsletter.php" );
include( "inc/index_fashion/inc_instashop.php" );

include( "inc/common/inc_features.php" );

include( "inc/common/inc_footer_index_fashion.php" );

?>
<?php

include( "inc/common/inc_footer_js.php" );
?>
</body>
