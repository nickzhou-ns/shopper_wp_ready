<?php
include( "arr/arr_top_sellers.php" );
?>
<!-- TOP_SELLERS -->
<section page="inc_top_sellers_index_fashion" class="py-12">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-6"> 
        
        <!-- Preheading -->
        <h6 class="heading-xxs mb-3 text-center text-gray-400"> Top selling </h6>
        
        <!-- Heading -->
        <h2 class="mb-10 text-center">Top wekeend Sellers</h2>
      </div>
    </div>
    <div class="row"> 
      
      <!-- #new white -->
      
      <?php foreach ($arr_new_arrivals as $k => $val) { ?>
      <div class="col-6 col-sm-6 col-md-4 col-lg-3"> 
        
        <!-- Card -->
        <div class="card mb-7" data-toggle="card-collapse"> 
          
          <!-- Badge --> 
          <?php echo $val["badge"] ?> 
          
          <!-- Image -->
          <div class="card-img" data-flickity='{"draggable": false}' id="productOneImg"> <a class="d-block w-100" href="product.php"> <img class="card-img-top" src="<?php echo $val["img"] ?>" alt="..." /> </a> <a class="d-block w-100" href="product.php"> <img class="card-img-top" src="<?php echo $val["img_lg"] ?>" alt="..." /> </a> </div>
          
          <!-- Collapse -->
          <div class="card-collapse-parent"> 
            
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
                  <?php echo $val["sum"] ?> </div>
              </div>
            </div>
            
            <!-- Footer -->
            <div class="card-collapse collapse">
              <div class="card-footer px-0 bg-white">
                <form>
                  <div class="mb-1">
                    <div class="form-check form-check-inline form-check-color">
                      <input class="form-check-input" type="radio" id="productOneColorOne" name="productOneColor" data-toggle="flickity" data-target="#productOneImg" data-slide="0" style="background-color: beige" checked />
                    </div>
                    <div class="form-check form-check-inline form-check-color ms-n2">
                      <input class="form-check-input" type="radio" id="productOneColorTwo" name="productOneColor" data-toggle="flickity" data-target="#productOneImg" data-slide="1" style="background-color: black" />
                    </div>
                    <!-- <div class="form-check form-check-inline form-check-color">
                      <input class="form-check-input" type="radio" id="productFourColorOne" name="productFourColor" style="background-color: #f9f9f9;" checked />
                    </div> --> 
                    <!-- 改变样式 --> 
                  </div>
                  <div>
                    <div class="form-check form-check-inline form-check-text fs-xs">
                      <input class="form-check-input" type="radio" id="productOneSizeOne" name="sizeRadio" />
                      <label class="form-check-label" for="productOneSizeOne">6</label>
                    </div>
                    <div class="form-check form-check-inline form-check-text fs-xs">
                      <input class="form-check-input" type="radio" id="productOneSizeTwo" name="sizeRadio" />
                      <label class="form-check-label" for="productOneSizeTwo">6.5</label>
                    </div>
                    <div class="form-check form-check-inline form-check-text fs-xs">
                      <input class="form-check-input" type="radio" id="productOneSizeThree" name="sizeRadio" />
                      <label class="form-check-label" for="productOneSizeThree">7</label>
                    </div>
                    <div class="form-check form-check-inline form-check-text fs-xs">
                      <input class="form-check-input" type="radio" id="productOneSizeFour" name="sizeRadio" />
                      <label class="form-check-label" for="productOneSizeFour">7.5</label>
                    </div>
                    <div class="form-check form-check-inline form-check-text fs-xs">
                      <input class="form-check-input" type="radio" id="productOneSizeFive" name="sizeRadio" />
                      <label class="form-check-label" for="productOneSizeFive">8.5</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="row">
      <div class="col-12"> 
        
        <!-- Link  -->
        <div class="mt-7 text-center"> <a class="link-underline" href="shop.php">Discover more</a> </div>
      </div>
    </div>
  </div>
</section>
