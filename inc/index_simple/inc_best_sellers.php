<?php
$arr_details = array(
  array(
    'id' => '1',
    'title' => "Cropped cotton Top",
    'img' => 'assets/img/products/product-50.jpg',
    'sum' => '$29.00',
  ),
  array(
    'id' => '2',
    'title' => "Cropped cotton Top",
    'img' => 'assets/img/products/product-51.jpg',
    'sum' => '$29.00',
  ),
  array(
    'id' => '3',
    'title' => "Cropped cotton Top",
    'img' => 'assets/img/products/product-52.jpg',
    'sum' => '$29.00',
  ),
  array(
    'id' => '4',
    'title' => "Cropped cotton Top",
    'img' => 'assets/img/products/product-53.jpg',
    'sum' => '$29.00',
  ),
  array(
    'id' => '5',
    'title' => "Suede Sandals",
    'img' => 'assets/img/products/product-127.jpg',
    'sum' => '$69.00',
  ),
  array(
    'id' => '6',
    'title' => "Basic Polo T-Shirt",
    'img' => 'assets/img/products/product-128.jpg',
    'sum' => '$22.00',
  ),
);
?>
<!-- BEST_SELLERS -->
<section  page="inc_best_sellers"  class="pt-12 pb-10">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h2 class="mb-10 text-center">Best Sellers</h2>
        
        <!-- Slider -->
        <div class="flickity-buttons-lg flickity-buttons-offset px-lg-12" data-flickity='{"prevNextButtons": true}'> 
          
          <!-- Item -->
          <?php foreach ($arr_details as $k => $val) { ?>
          <div class="col pt-3 pb-7 px-4" style="max-width: 229px;"> <a class="card shadow-hover" href="product.php"> 
            
            <!-- Image --> 
            <img src="<?php echo $val["img"] ?>" alt="..." class="card-img-top"> 
            
            <!-- Body -->
            <div class="card-body fw-bold text-center"> 
              
              <!-- Heading -->
              <div class="text-body"><?php echo $val["title"] ?></div>
              
              <!-- Price -->
              <div class="text-muted"><?php echo $val["sum"] ?></div>
            </div>
            </a> </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
