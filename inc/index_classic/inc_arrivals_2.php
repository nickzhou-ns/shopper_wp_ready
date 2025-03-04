<?php
$arr_arrivals_2 = array(
  array(
    'id' => '1',
    'badge' => '  <div class="badge bg-dark card-badge">
                    <span class="text-uppercase">New</span>
                  </div>',
    'title' => 'Textured cotton Top',
    'text' => '<span class="text-gray-350 text-decoration-line-through">$90.00</span>
               <span class="fs-lg text-primary">$69.00</span>',
    'img_lg' => get_template_directory_uri() . 'assets/img/products/product-34.jpg',
    'img' => get_template_directory_uri() . 'assets/img/products/product-35.jpg',
    'url' => 'product.php',

  ),
  array(
    'id' => '2',
    'badge' => '',
    'title' => 'Animal crossbody Bag',
    'text' => '<span class="fs-lg text-muted">$59.00</span>',
    'img_lg' => get_template_directory_uri() . 'assets/img/products/product-136.jpg',
    'img' => get_template_directory_uri() . 'assets/img/products/product-137.jpg', 'url' =>
    'product.php',

  ),
  array(
    'id' => '3',
    'badge' => '',
    'title' => 'Jacket with Pockets',
    'text' => '<span class="fs-lg text-muted">$70.00</span>',
    'img_lg' => get_template_directory_uri() . 'assets/img/products/product-138.jpg',
    'img' => get_template_directory_uri() . 'assets/img/products/product-139.jpg',
    'url' => 'product.php',

  ),


);
?>
<!-- ARRIVALS -->
<section page="inc_arrivals_2" class="pb-12">
  <div class="container">
    <div class="row position-relative align-items-center">
      <div class="col-md-7 col-lg-5 offset-lg-1"> 
        
        <!-- Slider -->
        <div class="d-none d-md-block"
                    data-flickity='{"fade": true, "asNavFor": "#sliderArrivals", "draggable": false}'>
          <?php foreach ($arr_arrivals_2 as $k => $val) { ?>
          
          <!-- Item -->
          <div class="w-100"> <img src="<?php echo $val["img_lg"] ?>" alt="..." class="img-fluid"> </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-5 col-lg-4 offset-lg-1 position-static"> 
        
        <!-- Preheading -->
        <h6 class="heading-xxs text-center text-gray-400"> Perfect summer </h6>
        
        <!-- Heading -->
        <h3 class="mb-10 text-center"> Summer Days Look </h3>
        
        <!-- Slider -->
        <div class="position-static flickity-buttons-lg" id="sliderArrivals"
                    data-flickity='{"pageDots": true, "prevNextButtons": true}'> 
          
          <!-- Item -->
          <?php foreach ($arr_arrivals_2 as $k => $val) { ?>
          <div class="col-12 px-4"> 
            
            <!-- Card -->
            <div class="card"> 
              
              <!-- Badge### --> 
              <?php echo $val["badge"] ?> 
              
              <!-- Image -->
              <div class="card-img"> 
                
                <!-- Action -->
                <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end"
                                    data-toggle="button"> <i class="fe fe-heart"></i> </button>
                
                <!-- Image --> 
                <img class="card-img-top" src="<?php echo $val["img"] ?>" alt="..."> </div>
              
              <!-- Body -->
              <div class="card-body fw-bold text-center"> <a class="fs-lg text-body"
                                    href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a>
                <div> <?php echo $val["text"] ?> </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
