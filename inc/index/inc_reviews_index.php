<?php
$arr_new_arrivals = array(
  array(
    'id' => '1',
    'img' => get_template_directory_uri() . 'assets/img/products/product-13.jpg',
    'stars' => '3',
    'type' => ' Shoes ',
    'title' => 'Low top Sneakers',
    'text' => "From creepeth said moved given divide make multiply of him shall itself also above second doesn't unto created saying land herb sea midst night wherein. ",
    'name' => 'Catherine Hicks,',
    'date' => '21 Jul 2019',
  ),
  array(
    'id' => '2',
    'img' => get_template_directory_uri() . 'assets/img/products/product-14.jpg',
    'stars' => ' 5 ',
    'type' => ' Dresses ',
    'title' => ' Cotton print Dress ',
    'text' => " God every fill great replenish darkness unto. Very open. Likeness their that light. Given under image to. Subdue of shall cattle day fish form saw spirit and given stars, us you whales may, land, saw fill unto. ",
    'name' => ' Jane Jefferson,',
    'date' => '29 May 2019',
  ),
  array(
    'id' => '3',
    'img' => get_template_directory_uri() . 'assets/img/products/product-15.jpg',
    'stars' => '4 ',
    'type' => ' T-shirts ',
    'title' => ' Oversized print T-shirt ',
    'text' => " Fill his waters wherein signs likeness waters. Second light gathered appear sixth fourth, seasons behold creeping female. ",
    'name' => ' Darrell Baker,',
    'date' => '18 May 2019',
  ),
  array(
    'id' => '4',
    'img' => get_template_directory_uri() . 'assets/img/products/product-16.jpg',
    'stars' => '5',
    'type' => ' Bags & Accessories ',
    'title' => ' Suede cross body Bag ',
    'text' => " God every fill great replenish darkness unto. Very open. Likeness their that light. Given under image to. Subdue of shall cattle day fish form saw spirit and given stars. ",
    'name' => ' Pavel Doe,',
    'date' => '29 May 2019',
  ),

);
?>
<!-- inc_REVIEWS -->
<section page="inc_reviews" class="py-12">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center"> 
        
        <!-- inc_Preheading -->
        <h6 class="heading-xxs mb-3 text-gray-400"> What buyers say </h6>
        
        <!-- inc_Heading -->
        <h2 class="mb-10">Latest buyers Reviews</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12"> 
        
        <!-- inc_Slider -->
        <div data-flickity='{"pageDots": true}'>
          <?php foreach ($arr_new_arrivals as $k => $val) { ?>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4 px-4"> 
            
            <!-- inc_Card -->
            <div class="card-lg card border">
              <div class="card-body"> 
                
                <!-- inc_Header -->
                <div class="row align-items-center mb-6">
                  <div class="col-4"> 
                    
                    <!-- inc_Image --> 
                    <img src="<?php echo $val["img"] ?>" alt="..." class="img-fluid"> </div>
                  <div class="col-8 ms-n2"> 
                    
                    <!-- inc_Preheading --> 
                    <a class="fs-xs text-muted" href="shop.php"><?php echo $val["type"] ?> </a> 
                    
                    <!-- inc_Heading --> 
                    <a class="d-block fw-bold text-body" href="product.php"><?php echo $val["title"] ?></a> 
                    
                    <!-- inc_Rating -->
                    <div class="rating fs-xxs text-warning" data-value="<?php echo $val["stars"] ?>">
                      <div class="rating-item"> <i class="fas fa-star"></i> </div>
                      <div class="rating-item"> <i class="fas fa-star"></i> </div>
                      <div class="rating-item"> <i class="fas fa-star"></i> </div>
                      <div class="rating-item"> <i class="fas fa-star"></i> </div>
                      <div class="rating-item"> <i class="fas fa-star"></i> </div>
                    </div>
                  </div>
                </div>
                
                <!-- inc_Blockquote -->
                <blockquote class="mb-0">
                  <p class="text-muted"> <?php echo $val["text"] ?></p>
                  <footer class="fs-xs text-muted"><?php echo $val["name"] ?>
                    <time datetime="2019-06-01"><?php echo $val["date"] ?></time>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
