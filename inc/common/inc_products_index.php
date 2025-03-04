<?php
$arr_features = array(
  array(
    'id' => '1',
    'title' => 'Cropped Trousers',
    'url' => 'shop.php',
    'sum_lg' => '$99.00',
    'sum' => '$59.00',
    'url' => 'shop.php',
    'img' => get_template_directory_uri() . 'assets/img/products/product-30.jpg',
  ),
  array(
    'id' => '2',
    'title' => 'Leather Sneakers',
    'url' => 'shop.php',
    'sum_lg' => '$99.00',
    'sum' => '$59.00',
    'url' => 'shop.php',
    'img' => get_template_directory_uri() . 'assets/img/products/product-31.jpg',
  ),


);
?>
<!-- PRODUCTS -->
<section  page="inc_products_index" >
  <div class="container">
    <div class="row">
      <?php foreach ($arr_features as $k => $val) { ?>
      <div class="col-12 col-md-6"> 
        
        <!-- Card -->
        
        <div class="card card-lg"> 
          
          <!-- Circle -->
          <div class="card-circle card-circle-lg card-circle-end"> <strong class="fs-xs text-decoration-line-through opacity-80"><?php echo $val["sum_lg"] ?></strong> <span class="fs-6 fw-bold"><?php echo $val["sum"] ?></span> </div>
          
          <!-- Image --> 
          <img class="card-img-top" src="<?php echo $val["img"] ?>" alt="..."> 
          
          <!-- Body -->
          <div class="card-body position-relative mx-6 mx-lg-11 mt-n11 bg-white text-center"> 
            
            <!-- Heading -->
            <h4 class="mb-0"><?php echo $val["title"] ?></h4>
            
            <!-- Link --> 
            <a class="btn btn-link stretched-link px-0 text-reset" href="<?php echo $val["url"] ?>"> Shop Now <i class="fe fe-arrow-right ms-2"></i> </a> </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
