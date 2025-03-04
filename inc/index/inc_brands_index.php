<?php
$arr_new_arrivals = array(
  array(
    'id' => '1',
    'img' => 'assets/img/products/product-16.jpg',
    'comment' => '7',
    'text' => "248",
  ),
  array(
    'id' => '2',
    'img' => 'assets/img/products/product-17.jpg',
    'comment' => '7',
    'text' => "248",
  ),
  array(
    'id' => '3',
    'img' => 'assets/img/products/product-18.jpg',
    'comment' => '7',
    'text' => "248",

  ),
  array(
    'id' => '4',
    'img' => 'assets/img/products/product-19.jpg',
    'comment' => '7',
    'text' => "248",

  ),
  array(
    'id' => '5',
    'img' => 'assets/img/products/product-20.jpg',
    'comment' => '7',
    'text' => "248",

  ),
  array(
    'id' => '6',
    'img' => 'assets/img/products/product-21.jpg',
    'comment' => '7',
    'text' => "248",

  ),

);
?>
<!-- inc_BRANDS -->
<section   page="inc_brands_index"   class="py-12 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center"> 
        
        <!-- inc_Heading -->
        <h2 class="mb-3">@shopper</h2>
        
        <!-- inc_Subheading -->
        <p class="mb-10 fs-lg text-gray-500"> Appear, dry there darkness they're seas, dry waters. </p>
      </div>
    </div>
    <div class="row mx-n1 mb-10">
      <?php foreach ($arr_new_arrivals as $k => $val) { ?>
      <div class="col-6 col-sm-4 col-md px-1"> 
        
        <!-- inc_Card -->
        <div class="card mb-2"> 
          
          <!-- inc_Image --> 
          <img src="<?php echo $val["img"] ?>" alt="..." class="card-img"> 
          
          <!-- inc_Overlay --> 
          <a class="card-img-overlay card-img-overlay-hover align-items-center bg-dark-40" href="blog_post.php">
          <p class="my-0 fs-xxs text-center text-white"> <i class="fe fe-heart me-2"></i><?php echo $val["text"] ?> <i class="fe fe-message-square me-2 ms-3"></i> <?php echo $val["comment"] ?></p>
          </a> </div>
      </div>
      <?php } ?>
    </div>
    <div class="row">
      <div class="col-4 col-sm-3 col-md text-center"> 
        
        <!-- inc_Brand --> 
        <img src="<?=get_template_directory_uri()?>/assets/img/brands/gray-350/mango.svg" alt="..." class="img-fluid mb-7 mb-md-0"> </div>
      <div class="col-4 col-sm-3 col-md text-center"> 
        
        <!-- inc_Brand --> 
        <img src="<?=get_template_directory_uri()?>/assets/img/brands/gray-350/zara.svg" alt="..." class="img-fluid mb-7 mb-md-0"> </div>
      <div class="col-4 col-sm-3 col-md text-center"> 
        
        <!-- inc_Brand --> 
        <img src="<?=get_template_directory_uri()?>/assets/img/brands/gray-350/reebok.svg" alt="..." class="img-fluid mb-7 mb-md-0"> </div>
      <div class="col-4 col-sm-3 col-md text-center"> 
        
        <!-- inc_Brand --> 
        <img src="<?=get_template_directory_uri()?>/assets/img/brands/gray-350/asos.svg" alt="..." class="img-fluid mb-7 mb-md-0"> </div>
      <div class="col-4 col-sm-3 col-md text-center"> 
        
        <!-- inc_Brand --> 
        <img src="<?=get_template_directory_uri()?>/assets/img/brands/gray-350/stradivarius.svg" alt="..." class="img-fluid mb-6 mb-sm-0"> </div>
      <div class="col-4 col-sm-3 col-md text-center"> 
        
        <!-- inc_Brand --> 
        <img src="<?=get_template_directory_uri()?>/assets/img/brands/gray-350/adidas.svg" alt="..." class="img-fluid mb-6 mb-sm-0"> </div>
      <div class="col-4 col-sm-3 col-md text-center"> 
        
        <!-- inc_Brand --> 
        <img src="<?=get_template_directory_uri()?>/assets/img/brands/gray-350/bershka.svg" alt="..." class="img-fluid"> </div>
    </div>
  </div>
</section>
