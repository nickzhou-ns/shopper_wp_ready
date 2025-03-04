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
include( "inc/overview/inc_navbar_overview.php" );
include( "inc/overview/inc_welcome_overview.php" );
include( "inc/overview/inc_features_overview.php" );
include( "inc/overview/inc_homepages.php" );
include( "inc/overview/inc_shop_pages.php" );
include( "inc/overview/inc_headers.php" );
include( "inc/overview/inc_dropdowns.php" );
include( "inc/overview/inc_support_pages.php" );
include( "inc/overview/inc_product_styles.php" );
include( "inc/overview/inc_responsive.php" );
include( "inc/overview/inc_features_2.php" );
include( "inc/overview/inc_footer_overview.php" );
?>
<?php

include( "inc/common/inc_footer_js.php" );
?>
</body>
