<?php
$arr_featured_brands = array(
  array(
    'id' => '1',
    'text' => '30% OFF',
    'img' => get_template_directory_uri() . 'assets/img/brands/black/mango.svg',
    'url' => 'shop.php',

  ),
  array(
    'id' => '2',
    'text' => '15% OFF',
    'img' => get_template_directory_uri() . 'assets/img/brands/black/river-island.svg',
    'url' => 'shop.php',

  ),
  array(
    'id' => '3',
    'text' => '30% OFF',
    'img' => get_template_directory_uri() . 'assets/img/brands/black/esprit.svg',
    'url' => 'shop.php',

  ),
  array(
    'id' => '4',
    'text' => '50% OFF',
    'img' => get_template_directory_uri() . 'assets/img/brands/black/zara.svg',
    'url' => 'shop.php',

  ),

);
?>
<!-- FEATURED_BRANDS -->
<div  page="inc_featured_brands"  class="section">
  <div class="container py-12 bg-light">
    <div class="row">
      <div class="col-12 text-center"> 
        
        <!-- Preheading -->
        <h6 class="heading-xxs mb-3 text-gray-400">Top Designers</h6>
        
        <!-- Heading -->
        <h2 class="mb-10">Featured Brands</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-xl-10">
        <div class="row">
          <?php foreach ($arr_featured_brands as $k => $val) { ?>
          <div class="col-6 col-md-3 text-center"> 
            
            <!-- Brand --> 
            <a class="brand lift py-9 mb-6" href="<?php echo $val["url"] ?>"> <img src="<?php echo $val["img"] ?>" alt="..." class="brand-img"> </a> 
            
            <!-- Caption -->
            <p class="mb-7 mb-md-0 fw-bold"> Up to <span class="text-primary"><?php echo $val["text"] ?></span> Discount </p>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
