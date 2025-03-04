<?php
$arr_categories = array(
  array(
    'id' => '1',
    'title' => 'Summer Hats',
    'text' => "Shop Now",
    'img' => get_template_directory_uri() . 'assets/img/products/product-22.jpg',
    'url' => 'shop.php',
  ),
  array(
    'id' => '2',
    'title' => 'Free returns',
    'text' => "Shop Now",
    'img' => get_template_directory_uri() . 'assets/img/products/product-23.jpg',
    'url' => 'shop.php',
  ),
  array(
    'id' => '3',
    'title' => 'Secure shopping',
    'text' => "Shop Now",
    'img' => get_template_directory_uri() . 'assets/img/products/product-24.jpg',
    'url' => 'shop.php',
  ),

);
?>
<!-- CATEGORIES -->
<section    page="inc_categories_index_classic"  class="pt-6">
  <div class="container-fluid px-3 px-md-6">
    <div class="row mx-n3">
      <?php foreach ($arr_categories as $k => $val) { ?>
      <div class="col-12 col-sm-4 d-flex flex-column px-3"> 
        
        <!-- Card-->
        <div class="card card-xl mb-3 mb-sm-0" style="min-height: 280px"> 
          
          <!-- Background -->
          <div class="card-bg">
            <div class="card-bg-img bg-cover" style="background-image: url(<?php echo $val["img"] ?>);"></div>
          </div>
          
          <!-- Body -->
          <div class="card-body my-auto"> 
            
            <!-- Heading -->
            <h5 class="mb-0"><?php echo $val["title"] ?></h5>
            
            <!-- Link --> 
            <a class="btn btn-link stretched-link px-0 text-reset" href="<?php echo $val["url"] ?>"> <?php echo $val["text"] ?> <i class="fe fe-arrow-right ms-2"></i> </a> </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
