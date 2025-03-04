<?php
include( "arr/arr_new_arrivals.php" );
?>
<!-- NEW ARRIVALS -->
<section  page="inc_new_arrivals_index_boxed"  class="pt-12">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h2 class="mb-10 text-center">New Arrivals</h2>
      </div>
    </div>
    <div class="row">
      <?php foreach ($arr_new_arrivals as $k => $val) { ?>
      <div class="col-6 col-md-3 col-lg"> 
        <!-- Card -->
        <div class="card mb-7" data-toggle="card-collapse"> 
          <!-- Badge --> 
          
          <?php echo $val["sale"] ?> 
          
          <!-- Image --> 
          <a href="<?php echo $val["url"] ?>"> <img src="<?php echo $val["img"] ?>" alt="..." class="card-img-top"> </a> 
          <!-- Collapse -->
          <div class="card-collapse-parent"> 
            <!-- Body -->
            <div class="card-body px-0 bg-white text-center"> 
              <!-- Heading -->
              <div class="mb-1 fw-bold"> <a class="text-body" href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> </div>
              <!-- Price -->
              <div class="mb-1 fw-bold text-muted"> <?php echo $val["sum"] ?> </div>
              <!-- Rating -->
              <div class="rating fs-xxs text-dark justify-content-center"
                                  data-value="<?php echo $val["star"] ?>">
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
              </div>
            </div>
            <!-- Footer -->
            <div class="card-collapse collapse">
              <div class="card-footer px-0 pt-0 bg-white text-center">
                <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                      data-bs-target="#modalProduct"> <i class="fe fe-eye"></i> </button>
                <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-shopping-cart"></i> </button>
                <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-heart"></i> </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      
      <!-- Divider -->
      <div class="w-100 d-none d-lg-block"></div>
      <?php foreach ($arr_new_arrivals_1 as $k => $val) { ?>
      <div class="col-6 col-md-3 col-lg"> 
        
        <!-- Card -->
        <div class="card mb-7" data-toggle="card-collapse"> <?php echo $val["sale"] ?> 
          <!-- Image --> 
          <a href="<?php echo $val["url"] ?>"> <img src="<?php echo $val["img"] ?>" alt="..." class="card-img-top"> </a> 
          
          <!-- Collapse -->
          <div class="card-collapse-parent"> 
            
            <!-- Body -->
            <div class="card-body px-0 bg-white text-center"> 
              
              <!-- Heading -->
              <div class="mb-1 fw-bold"> <a class="text-body" href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> </div>
              
              <!-- Price -->
              <div class="mb-1 fw-bold text-muted"> <?php echo $val["sum"] ?> </div>
              
              <!-- Rating -->
              <div class="rating fs-xxs text-dark justify-content-center"
                                  data-value="<?php echo $val["star"] ?>">
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
              </div>
            </div>
            
            <!-- Footer -->
            <div class="card-collapse collapse">
              <div class="card-footer px-0 pt-0 bg-white text-center">
                <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                      data-bs-target="#modalProduct"> <i class="fe fe-eye"></i> </button>
                <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-shopping-cart"></i> </button>
                <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-heart"></i> </button>
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
