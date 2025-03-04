<!-- CATEGORIES -->
<section  page="inc_categories_2"  class="py-12">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h2 class="mb-4 text-center">Shop by Category</h2>
        
        <!-- Nav -->
        <div class="nav justify-content-center mb-10"> <a class="nav-link active" href="#topSellersTab" data-bs-toggle="tab">Women</a> <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Men</a> <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Kids</a> </div>
        
        <!-- Content -->
        <div class="tab-content"> 
          
          <!-- Pane -->
          <div class="tab-pane fade show active" id="topSellersTab"> 
            
            <!-- Slider -->
            <div class="flickity-buttons-lg flickity-buttons-offset px-lg-12" data-flickity='{"prevNextButtons": true}'>
              <?php
              $arr_features = array(
                array(
                  'id' => '1',
                  'title' => 'Dresses <small>(58)</small>',
                  'url' => 'shop.php',
                  'img' => get_template_directory_uri() . 'assets/img/products/product-25.jpg',
                ),
                array(
                  'id' => '2',
                  'title' => ' Tops <small>(35)</small>',
                  'url' => 'shop.php',
                  'img' => get_template_directory_uri() . 'assets/img/products/product-26.jpg',
                ),
                array(
                  'id' => '3',
                  'title' => ' T-shirts <small>(27)</small>',
                  'url' => 'shop.php',
                  'img' => get_template_directory_uri() . 'assets/img/products/product-27.jpg',
                ),
                array(
                  'id' => '1',
                  'title' => '  Shoes <small>(64)</small>',
                  'url' => 'shop.php',
                  'img' => get_template_directory_uri() . 'assets/img/products/product-28.jpg',
                ),
                array(
                  'id' => '2',
                  'title' => 'Sweatshirts <small>(11)</small>',
                  'url' => 'shop.php',
                  'img' => get_template_directory_uri() . 'assets/img/products/product-125.jpg',
                ),
                array(
                  'id' => '3',
                  'title' => ' Jackets <small>(9)</small>',
                  'url' => 'shop.php',
                  'img' => get_template_directory_uri() . 'assets/img/products/product-126.jpg',
                ),

              );
              ?>
              <?php foreach ($arr_features as $k => $val) { ?>
              <!-- Item -->
              <div class="col px-4" style="max-width: 200px;">
                <div class="card"> 
                  
                  <!-- Image --> 
                  <img class="card-img-top" src="<?php echo $val["img"] ?>" alt="..."> 
                  
                  <!-- Body -->
                  <div class="card-body py-4 px-0 text-center"> 
                    
                    <!-- Heading --> 
                    <a class="stretched-link text-body" href="<?php echo $val["url"] ?>">
                    <h6><?php echo $val["title"] ?></h6>
                    </a> </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
