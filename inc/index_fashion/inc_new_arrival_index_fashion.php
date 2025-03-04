<?php
$arr_new_arrivals = array(
  array(
    'id' => '1',
    'title' => "Striped knit Top",
    'img' => 'assets/img/products/product-26.jpg',
    'url' => 'product.php',
    'sum' => '$39.00',

    'text' => 'Tops',
  ),
  array(
    'id' => '2',
    'title' => "Floral print Dress",
    'img' => 'assets/img/products/product-25.jpg',
    'url' => 'product.php',
    'sum' => '$60.00',
    'text' => 'Dress',


  ),
  array(
    'id' => '3',
    'title' => "Straight Trousers with Belt",
    'img' => 'assets/img/products/product-28.jpg',
    'url' => 'product.php',
    'sum' => '$79.00',
    'text' => 'Trousers',

  ),
  array(
    'id' => '4',
    'title' => "Fine quality jeans",
    'img' => 'assets/img/products/product-27.jpg',
    'url' => 'product.php',
    'sum' => '$69.00',

    'text' => 'Trousers',
  ),


);
?>
<!-- NEW_ARRIVAL -->
<section  page="inc_new_arrival_index_fashion" >
  <div class="container py-12 border-bottom">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h2 class="mb-10 text-center">New Arrivals</h2>
        
        <!-- Slider-->
        <div class="flickity-buttons-lg flickity-buttons-offset px-lg-12" data-flickity='{"prevNextButtons": true}'> 
          
          <!-- Card -->
          <?php foreach ($arr_new_arrivals as $k => $val) { ?>
          <div class="col-12 col-md-4 mb-10 px-4">
            <div class="card"> 
              
              <!-- Image --> 
              <a href="<?php echo $val["url"] ?>"> <img class="card-img-top" src="<?php echo $val["img"] ?>" alt="..."> </a> 
              
              <!-- Body -->
              <div class="card-body px-0">
                <div class="d-flex"> 
                  
                  <!-- Caption -->
                  <div class="me-auto"> 
                    
                    <!-- Heading -->
                    <div class="fw-bold"> <a class="text-body" href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> </div>
                    
                    <!-- Text -->
                    <div class="fs-sm"> <a class="text-muted" href="shop.php"><?php echo $val["text"] ?></a> </div>
                  </div>
                  
                  <!-- Price -->
                  <div class="fs-sm fw-bold text-muted"> <?php echo $val["sum"] ?> </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        
        <!-- Button -->
        <div class="text-center"> <a class="btn btn-dark" href="shop.php"> Shop Now <i class="fe fe-arrow-right ms-2"></i> </a> </div>
      </div>
    </div>
  </div>
</section>
