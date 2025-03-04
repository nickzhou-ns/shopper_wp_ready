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
include( "inc/common/inc_navbar_index_simple.php" );

	include( "inc/index_simple/inc_welcome.php" );
	include( "inc/index_simple/inc_best_sellers.php" );
	include( "inc/index_simple/inc_categories_index_simple.php" );
	include( "inc/index_simple/inc_top_item.php" );
	include( "inc/common/inc_our_story.php" );
	include( "inc/index_simple/inc_video.php" );
	include("inc/about/inc_reviews_about.php");
	include( "inc/common/inc_social.php" );
?>
<?php
include( "inc/common/inc_footer_index_fashion.php" );
include( "inc/common/inc_footer_js.php" );
?>
</body>
</html>
