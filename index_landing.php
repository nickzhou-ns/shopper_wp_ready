<!doctype html>
<html lang="en">

<head>
    <?php
    include("inc/common/inc_base_info.php");
    include("inc/common/inc_header_css.php");
    ?>
    <!-- Title -->

    <title><?= $brand_name; ?></title>
</head>

<body>
    <!-- MODALS -->
    <?php
    include("inc/common/modals/newsletter_horizontal_modals.php");
    include("inc/common/modals/newsletter_vertical.php");
    include("inc/common/modals/password_reset_modals.php");
    include("inc/common/modals/product_modals.php");
    include("inc/common/modals/search_modals.php");
    include("inc/common/modals/shopping_cart_modals.php");
    include("inc/common/modals/sidebar_modals.php");
    include("inc/common/modals/size_chart_modals.php");
    include("inc/common/modals/wait_list_modals.php");
    ?>
    <!-- MODALS_end -->

    <?php
    include("inc/common/inc_navbar_index_landing.php");

    ?>
    <?php
    include("inc/index_landing/inc_welcome_index_landing.php");
    include("inc/index_landing/inc_description.php");
    include("inc/index_landing/inc_our_products.php");
    include("inc/index_landing/inc_about.php");
    include("inc/index_landing/inc_details.php");
    include("inc/index_landing/inc_info.php");
    include("inc/index_landing/inc_features_index_landing.php");
    include("inc/index_landing/inc_how_it_works.php");
    include("inc/index_landing/inc_info_1.php");
    include("inc/index_landing/inc_best_picks.php");
    include("inc/index_landing/inc_pricing.php");
    include("inc/index_landing/inc_image.php");
    include("inc/index_landing/inc_reviews_index_landing.php");
    include("inc/index_landing/inc_get_started.php");
    ?>
    <?php
    include("inc/common/inc_footer_index_landing.php");
    ?>
    <?php

    include("inc/common/inc_footer_js.php");
    ?>
</body>

</html>