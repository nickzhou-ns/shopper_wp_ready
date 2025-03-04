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
include( "inc/common/inc_navbar_index_boxed.php" );
include( "inc/common/inc_navbar_search_boxed.php" );
?>
<?php
include( "inc/index_boxed/inc_welcome_index_boxed.php" );
include( "inc/index_boxed/inc_new_arrivals_index_boxed.php" );
include( "inc/index_boxed/inc_collection.php" );
include( "inc/index_boxed/inc_featured_brands.php" );
include( "inc/index_boxed/inc_blog_index_boxed.php" );
include( "inc/index_boxed/inc_features_index_boxed.php" );
?>
<?php
include( "inc/common/inc_footer_boxed.php" );
?>
<?php
include( "inc/common/inc_footer_js.php" );
?>
</body>
</html>
