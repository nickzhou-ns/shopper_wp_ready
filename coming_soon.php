<!doctype html>
<html lang="en">
<head>
<?php
include( "inc/common/inc_base_info.php" );
include( "inc/common/inc_header_css.php" );
?>
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
include( "inc/coming_soon/inc_breadcrumb_coming_soon.php" );
include( "inc/coming_soon/inc_content_coming_soon.php" );
?>
<?php
include( "inc/common/inc_footer_js.php" );
?>
</body>
</html>