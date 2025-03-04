<?php
include( "arr/arr_top_sellers.php" );
?>
<!-- inc_TOP_SELLERS -->
<section   page="inc_top_sellers_index"  class="py-12">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-6"> 
        
        <!-- inc_Heading -->
        <h2 class="mb-4 text-center">Top month Sellers</h2>
        
        <!-- inc_Nav -->
        <div class="nav justify-content-center mb-10"> <a class="nav-link active" href="#topSellersTab" data-bs-toggle="tab">Women</a> <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Men</a> <a class="nav-link" href="#topSellersTab" data-bs-toggle="tab">Kids</a> </div>
      </div>
    </div>
    <div class="tab-content">
      <div class="tab-pane fade show active" id="topSellersTab">
        <div class="row">
          <?php foreach ($arr_new_arrivals as $k => $val) { ?>
          <div class="col-6 col-md-4 col-lg-3"> 
            
            <!-- inc_Card -->
            <div class="card mb-7"> 
              
              <!-- inc_Badge --> 
              <?php echo $val["badge"] ?> 
              
              <!-- inc_Image -->
              <div class="card-img"> 
                
                <!-- inc_Image --> 
                <a class="card-img-hover" href="product.php"> <img class="card-img-top card-img-back" src="<?php echo $val["img_lg"] ?>" alt="..."> <img class="card-img-top card-img-front" src="<?php echo $val["img"] ?>" alt="..."> </a> 
                
                <!-- inc_Actions -->
                <div class="card-actions"> <span class="card-action">
                  <button class="btn btn-xs btn-circle btn-white-primary" data-bs-toggle="modal" data-bs-target="#modalProduct"> <i class="fe fe-eye"></i> </button>
                  </span> <span class="card-action">
                  <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button"> <i class="fe fe-shopping-cart"></i> </button>
                  </span> <span class="card-action">
                  <button class="btn btn-xs btn-circle btn-white-primary" data-toggle="button"> <i class="fe fe-heart"></i> </button>
                  </span> </div>
              </div>
              
              <!-- inc_Body -->
              <div class="card-body px-0"> 
                
                <!-- inc_Category -->
                <div class="fs-xs"> <a class="text-muted" href="shop.php"><?php echo $val["text"] ?></a> </div>
                
                <!-- inc_Title -->
                <div class="fw-bold"> <a class="text-body" href="product.php"><?php echo $val["title"] ?></a> </div>
                
                <!-- inc_Price --> 
                <?php echo $val["sum"] ?> </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12"> 
        
        <!-- inc_Link  -->
        <div class="mt-7 text-center"> <a class="link-underline" href="#!">Discover more</a> </div>
      </div>
    </div>
  </div>
</section>
