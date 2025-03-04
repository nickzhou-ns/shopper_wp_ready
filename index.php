<!doctype html>
<html lang="en"><!-- InstanceBegin template="/Templates/contact_us.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php
include( "inc/common/inc_base_info.php" );
include( "inc/common/inc_header_css.php" );
?>
<!-- Title -->
<!-- InstanceBeginEditable name="doctitle" -->
<title><?=$brand_name ;?></title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<!-- InstanceBeginEditable name="body" --> <!-- InstanceEndEditable --> 
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
<!-- InstanceBeginEditable name="mian" --> 
<?php	
	include( "inc/common/inc_navbar_top.php" );
	include( "inc/common/inc_navbar_common.php" );
		?>	
	<?php
	include("inc/index/inc_promo_index.php"); 
	include("inc/index/inc_categories.php"); 
	include("inc/common/inc_features.php");
	include("inc/index/inc_best_picks.php"); 	
	include("inc/index/inc_top_sellers_index.php"); 	

	include("inc/index/inc_countdown.php"); 	
	include("inc/index/inc_reviews_index.php"); 	
	include("inc/index/inc_brands_index.php"); 
	?>	
<!-- InstanceEndEditable -->	
<?php
include( "inc/common/inc_footer.php" );
include( "inc/common/inc_footer_js.php" );
?>
</body>
<!-- InstanceEnd --></html>
