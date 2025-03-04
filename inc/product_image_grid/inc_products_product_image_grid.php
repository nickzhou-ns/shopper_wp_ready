<?php
$arr_new_arrivals = array(
  array(
    'id' => '1',
    'img' => 'assets/img/products/product-80.jpg',
    'title' => "Leather Women's Belt",
    'text' => "Accessories",
    'sum' => "$39.00",
    'badge' => '',
  ),
  array(
    'id' => '2',
    'img' => 'assets/img/products/product-86.jpg',
    'title' => 'Heel strappy Sandals',
    'text' => "Shoes",
    'sum' => "$99.00",
    'badge' => ' <div class="badge bg-white text-body card-badge card-badge-start text-uppercase">
  New
</div>',
  ),
  array(
    'id' => '3',
    'img' => 'assets/img/products/product-85.jpg',
    'title' => 'Leather key Case',
    'text' => "Bags",
    'sum' => "$29.00",
    'badge' => '',


  ),


);
?>
<!-- inc_products -->
<section  page="inc_products_product_image_grid"  class="pt-11">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h4 class="mb-10 text-center">You might also like</h4>
        
        <!-- Items -->
        
        <div class="row">
          <?php foreach ($arr_new_arrivals as $k => $val) { ?>
          <div class="col-6 col-sm-6 col-md-4"> 
            
            <!-- Card -->
            <div class="card mb-7 mb-md-0"> 
              
              <!-- Badge --> 
              <?php echo $val["badge"] ?> 
              
              <!-- Image --> 
              <img class="card-img-top" src="<?php echo $val["img"] ?>" alt="..."> 
              
              <!-- Body -->
              <div class="card-body px-0 pb-0 bg-white">
                <div class="row gx-0">
                  <div class="col"> 
                    
                    <!-- Title --> 
                    <a class="d-block fw-bold text-body" href="product.php"> <?php echo $val["title"] ?> </a> 
                    
                    <!-- Category --> 
                    <a class="fs-xs text-muted" href="shop.php"> <?php echo $val["text"] ?> </a> </div>
                  <div class="col-auto"> 
                    
                    <!-- Price -->
                    <div class="fs-sm fw-bold text-muted"> <?php echo $val["sum"] ?> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <div class="col-6 col-sm-6 col-md-4 d-md-none"> 
            
            <!-- Card -->
            <div class="card mb-0"> 
              
              <!-- Image --> 
              <img class="card-img-top" src="<?=get_template_directory_uri()?>/assets/img/products/product-87.jpg" alt="..."> 
              
              <!-- Body -->
              <div class="card-body px-0 pb-0 bg-white">
                <div class="row gx-0">
                  <div class="col"> 
                    
                    <!-- Title --> 
                    <a class="d-block fw-bold text-body" href="product.php"> White Summer Hat </a> 
                    
                    <!-- Category --> 
                    <a class="fs-xs text-muted" href="shop.php"> Hats </a> </div>
                  <div class="col-auto"> 
                    
                    <!-- Price -->
                    <div class="fs-sm fw-bold text-muted"> $15.00 </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
