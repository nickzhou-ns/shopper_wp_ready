<!-- CONTENT -->
<section  page="inc_content_shop"   class="py-11">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 col-lg-3">
        <?php
        include( "inc/shop/Filters.php" );
        ?>
      </div>
      <div class="col-12 col-md-8 col-lg-9">
        <?php
        include( "inc/shop/slider_shop.php" );
        include( "inc/shop/header_shop.php" );
        include( "inc/shop/tags_shop.php" );
        include( "inc/shop/products_shop.php" );
        include( "inc/shop/pagination_shop.php" );
        ?>
      </div>
    </div>
  </div>
</section>
