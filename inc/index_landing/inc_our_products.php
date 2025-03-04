<?php
$arr_our_products = array(
  array(
    'id' => '1',
    'title' => "Blue contact Lenses",
    'circle' => '                  <div class="card-circle card-circle-end">
        <strong class="fs-xs">save</strong>
        <span class="h6 mb-0">30%</span>
      </div>',
    'img_lg' => 'assets/img/products/product-94.jpg',

    'url' => 'product.php',
    'sum' => '<span class="fs-xs text-gray-350 text-decoration-line-through">$40.00</span></span> <span class="text-primary">$28.00</span>',
    'text' => 'Good male give subdue set one, image that his beginning.',
  ),
  array(
    'id' => '2',
    'title' => "Green contact Lenses",
    'circle' => '',
    'img_lg' => 'assets/img/products/product-95.jpg',

    'url' => 'product.php',
    'sum' => '$40.00',
    'text' => 'Heaven one kind created god, sea beginning yielding.',
  ),
  array(
    'id' => '3',
    'title' => "Red contact Lenses",
    'circle' => '',
    'img_lg' => 'assets/img/products/product-96.jpg',
    'url' => 'product.php',
    'sum' => '$40.00',
    'text' => 'Called fruitful fill also, creature moved Morning saying and our.',
  ),
  array(
    'id' => '4',
    'title' => "Yellow contact Lenses ",
    'circle' => '',
    'img_lg' => 'assets/img/products/product-129.jpg',
    'url' => 'product.php',
    'sum' => '$40.00',
    'text' => "That isn't, dominion saw meat beast lights sea him signs.",
  ),


);
?>

<!-- inc_OUR_PRODUCTS -->
<section page="inc_our_products" class="pt-12 pb-10" id="products">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center"> 
        
        <!-- inc_Preheading -->
        <h6 class="heading-xxs mb-3 text-gray-400"> Our products </h6>
        
        <!-- inc_Heading -->
        <h2 class="mb-10">Get your Perfect Lenses</h2>
        
        <!-- inc_Slider -->
        <div class="flickity-buttons-lg px-lg-12 mt-n3" data-flickity='{"prevNextButtons": true}'> 
          
          <!-- inc_Item -->
          <?php foreach ($arr_our_products as $k => $val) { ?>
          <div class="col-12 col-md-4 pt-3 pb-7 px-4">
            <div class="card card-lg shadow-hover"> 
              
              <!-- inc_Circle --> 
              <?php echo $val["circle"] ?> 
              
              <!-- inc_Image --> 
              <img src="<?php echo $val["img_lg"] ?>" alt="..." class="card-img-top"> 
              
              <!-- inc_Body -->
              <div class="card-body mt-n6 text-center"> 
                
                <!-- inc_Heading -->
                <p class="mb-3 fw-bold"> <?php echo $val["title"] ?> <br>
                  <?php echo $val["sum"] ?> </p>
                
                <!-- inc_Text -->
                <p class="text-muted"> <?php echo $val["text"] ?> </p>
                
                <!-- inc_Button --> 
                <a href="#!" class="btn btn-sm btn-outline-primary"> Add to Cart </a> </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
