<!-- ARRIVALS -->
<section    page="inc_arrivals"  class="py-12">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h2 class="mb-10 text-center">New Arrivals</h2>
        <!-- Heading inc_products_product_image_slider--> 
        <!-- <h4 class="mb-10 text-center">You might also like</h4> --> 
        
      </div>
    </div>
  </div>
  <div class="flickity-page-dots-progress" data-flickity='{"pageDots": true}'>
    <?php
    $arr_new_arrivals = array(

      array(
        'id' => '1',
        'title' => "Cotton floral print Dress",
        'img' => get_template_directory_uri() . 'assets/img/products/product-6.jpg',
        'url' => 'product.php',
        'sum' => '<span class="text-muted">$40.00</span>',
        'sale' => '',
      ),
      array(
        'id' => '2',
        'title' => "Suede cross body Bag",
        'img' => get_template_directory_uri() . 'assets/img/products/product-10.jpg',
        'url' => 'product.php',
        'sum' => '              <span class="fs-xs text-gray-350 text-decoration-line-through">$85.00</span>
            <span class="text-primary">$49.00</span>',
        'sale' => '<div class="badge bg-dark card-badge card-badge-start text-uppercase">
            Sale
          </div>',
      ),
      array(
        'id' => '3',
        'title' => "Cotton leaf print Shirt",
        'img' => get_template_directory_uri() . 'assets/img/products/product-32.jpg',
        'url' => 'product.php',
        'sum' => '<span class="text-muted">$65.00</span>',
        'sale' => '',
      ),
      array(
        'id' => '4',
        'title' => "Leather Sneakers",
        'img' => get_template_directory_uri() . 'assets/img/products/product-7.jpg',
        'url' => 'product.php',
        'sum' => '<a class="text-primary" href="#">Select Options</a>',
        'sale' => '',
      ),
      array(
        'id' => '5',
        'title' => "Another fine dress",
        'img' => get_template_directory_uri() . 'assets/img/products/product-11.jpg',
        'url' => 'product.php',
        'sum' => '<span class="text-muted">$99.00</span>',
        'sale' => '',
      ),
      array(
        'id' => '6',
        'title' => "Baseball Cap",
        'img' => get_template_directory_uri() . 'assets/img/products/product-33.jpg',
        'url' => 'product.php',
        'sum' => '<span class="text-muted">$10.00</span>',
        'sale' => '',
      ),
      array(
        'id' => '7',
        'title' => "Leather sneakers",
        'img' => get_template_directory_uri() . 'assets/img/products/product-49.jpg',
        'url' => 'product.php',
        'sum' => '<span class="text-muted">$19.00</span>',
        'sale' => '',
      ),
    );
    ?>
    
    <!-- Item -->
    <?php foreach ($arr_new_arrivals as $k => $val) { ?>
    <div class="col px-4" style="max-width: 300px;">
      <div class="card"> 
        
        <!-- Image -->
        <div class="card-img"> 
          
          <!-- Action -->
          <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end" data-toggle="button"> <i class="fe fe-heart"></i> </button>
          
          <!-- Badge --> 
          <span class="badge bg-dark card-badge card-badge-start text-uppercase"> Sale </span> 
          
          <!-- Button -->
          <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct"> <i class="fe fe-eye me-2 mb-1"></i> Quick View </button>
          
          <!-- Image --> 
          <img class="card-img-top" src="<?php echo $val["img"] ?>" alt="..."> </div>
        
        <!-- Body -->
        <div class="card-body fw-bold text-center"> <a class="text-body" href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> <br>
          <?php echo $val["sum"] ?> </div>
      </div>
    </div>
    <?php } ?>
  </div>
</section>
