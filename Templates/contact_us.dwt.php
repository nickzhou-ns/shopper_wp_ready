<!doctype html>
<html lang="en">
<head>
<?php
include( "inc/common/inc_header_css.php" );
?>
<!-- Title -->
<!-- TemplateBeginEditable name="doctitle" -->
<title><?=$brand_name ;?></title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>
<body>
<!-- TemplateBeginEditable name="body" --> <!-- TemplateEndEditable --> 
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
<!-- TemplateBeginEditable name="mian" --> 
<?php
include( "inc/common/inc_navbar_top.php" );
include( "inc/common/inc_navbar.php" );
include( "inc/common/inc_breadcrumb.php" );
?>	
<!-- TemplateEndEditable -->	
<?php
include( "inc/common/inc_footer.php" );
include( "inc/common/inc_footer_js.php" );
?>
</body>
</html>
