<?php
$arr_details = array(
  array(
    'id' => '1',
    'title' => "Sunglasses",
    'img' => get_template_directory_uri() . 'assets/img/products/product-54.jpg',
    'url' => 'shop.php',
  ),
  array(
    'id' => '2',
    'title' => "Flat Shoes",
    'img' => get_template_directory_uri() . 'assets/img/products/product-55.jpg',
    'url' => 'shop.php',
  ),
  array(
    'id' => '3',
    'title' => "T-Shirts",
    'img' => get_template_directory_uri() . 'assets/img/products/product-56.jpg',
    'url' => 'shop.php',
  ),
  array(
    'id' => '4',
    'title' => "Sweatshirts",
    'img' => get_template_directory_uri() . 'assets/img/products/product-57.jpg',
    'url' => 'shop.php',
  ),
  array(
    'id' => '5',
    'title' => "Dresses",
    'img' => get_template_directory_uri() . 'assets/img/products/product-58.jpg',
    'url' => 'shop.php',
  ),
  array(
    'id' => '6',
    'title' => "Bags",
    'img' => get_template_directory_uri() . 'assets/img/products/product-59.jpg',
    'url' => 'shop.php',
  ),
);
?>
<!-- CATEGORIES -->
<section   page="inc_categories_index_simple"  class="py-12">
  <div class="container">
    <div class="row">
      <?php foreach ($arr_details as $k => $val) { ?>
      <div class="col-12 col-md-4"> 
        
        <!-- Card -->
        <div class="card mb-7"> 
          
          <!-- Image --> 
          <img src="<?php echo $val["img"] ?>" alt="..." class="card-img"> 
          
          <!-- Overlay -->
          <div class="card-img-overlay bg-dark-0 bg-hover align-items-center">
            <div class="text-center"> <a class="btn btn-white stretched-link" href="<?php echo $val["url"] ?>"> <?php echo $val["title"] ?><i class="fe fe-arrow-right ms-2"></i> </a> </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
