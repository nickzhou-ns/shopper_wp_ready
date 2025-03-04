<!-- inc_PRODUCT_STYLES -->
<section  page="inc_product_styles"  class="py-12">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center"> 
        
        <!-- inc_Heading -->
        <h2 class="mb-10">Product Cards</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12"> 
        
        <!-- inc_Slider -->
        <div data-flickity='{"pageDots": true}'>
          <div class="col-12 col-md-4 col-lg-3 px-4"> 
            
            <!-- inc_Card -->
            <div class="card"> 
              
              <!-- inc_Badge -->
              <div class="badge bg-dark card-badge card-badge-start text-uppercase"> Sale </div>
              
              <!-- inc_Image -->
              <div class="card-img"> 
                
                <!-- inc_Image --> 
                <a class="card-img-hover" href="product.php"> <img class="card-img-top card-img-back" src="<?=get_template_directory_uri()?>/assets/img/products/product-122.jpg" alt="..."> <img class="card-img-top card-img-front" src="<?=get_template_directory_uri()?>/assets/img/products/product-7.jpg" alt="..."> </a> 
                
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
                <div class="fs-xs"> <a class="text-muted" href="shop.php">Shoes</a> </div>
                
                <!-- inc_Title -->
                <div class="fw-bold"> <a class="text-body" href="product.php"> Leather Sneakers </a> </div>
                
                <!-- inc_Price -->
                <div class="fw-bold"> <span class="fs-xs text-gray-350 text-decoration-line-through">$85.00</span> <span class="text-primary">$85.00</span> </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 px-4"> 
            
            <!-- inc_Card -->
            <div class="card"> 
              
              <!-- inc_Image -->
              <div class="card-img"> 
                
                <!-- inc_Action -->
                <button class="btn btn-xs btn-circle btn-white-primary card-action card-action-end" data-toggle="button"> <i class="fe fe-heart"></i> </button>
                
                <!-- inc_Button -->
                <button class="btn btn-xs w-100 btn-dark card-btn" data-bs-toggle="modal" data-bs-target="#modalProduct"> <i class="fe fe-eye me-2 mb-1"></i> Quick View </button>
                
                <!-- inc_Image --> 
                <img class="card-img-top" src="<?=get_template_directory_uri()?>/assets/img/products/product-32.jpg" alt="..."> </div>
              
              <!-- inc_Body -->
              <div class="card-body fw-bold text-center"> <a class="text-body" href="product.php">Cotton leaf print Shirt</a> <br>
                <span class="text-muted">$65.00</span> </div>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 px-4"> 
            
            <!-- inc_Card -->
            <div class="card" data-toggle="card-collapse"> 
              
              <!-- inc_Badge -->
              <div class="badge bg-white text-body card-badge card-badge-start text-uppercase"> New </div>
              
              <!-- inc_Image --> 
              <a href="product.php"> <img class="card-img-top" src="<?=get_template_directory_uri()?>/assets/img/products/product-12.jpg" alt="..." /> </a> 
              
              <!-- inc_Collapse -->
              <div class="card-collapse-parent"> 
                
                <!-- inc_Body -->
                <div class="card-body px-0 pb-0 bg-white">
                  <div class="row gx-0">
                    <div class="col"> 
                      
                      <!-- inc_Title --> 
                      <a class="d-block fw-bold text-body" href="product.php"> Heel strappy Sandals </a> 
                      
                      <!-- inc_Category --> 
                      <a class="fs-xs text-muted" href="shop.php"> Shoes </a> </div>
                    <div class="col-auto"> 
                      
                      <!-- inc_Price -->
                      <div class="fs-sm fw-bold text-muted"> $90.00 </div>
                    </div>
                  </div>
                </div>
                
                <!-- inc_Footer -->
                <div class="card-collapse collapse">
                  <div class="card-footer px-0 bg-white">
                    <form>
                      <div class="mb-1">
                        <div class="form-check form-check-inline form-check-color">
                          <input class="form-check-input" type="radio" id="productEightColorOne" name="productEightColor" style="background-color: black" checked />
                        </div>
                        <div class="form-check form-check-inline form-check-color ms-n2">
                          <input class="form-check-input" type="radio" id="productEightColorTwo" name="productEightColor" style="background-color: red" />
                        </div>
                      </div>
                      <div>
                        <div class="form-check form-check-inline form-check-text fs-xs">
                          <input class="form-check-input" type="radio" id="productEightSizeOne" name="sizeRadio" />
                          <label class="form-check-label" for="productEightSizeOne">6</label>
                        </div>
                        <div class="form-check form-check-inline form-check-text fs-xs">
                          <input class="form-check-input" type="radio" id="productEightSizeTwo" name="sizeRadio" />
                          <label class="form-check-label" for="productEightSizeTwo">6.5</label>
                        </div>
                        <div class="form-check form-check-inline form-check-text fs-xs">
                          <input class="form-check-input" type="radio" id="productEightSizeThree" name="sizeRadio" />
                          <label class="form-check-label" for="productEightSizeThree">7</label>
                        </div>
                        <div class="form-check form-check-inline form-check-text fs-xs">
                          <input class="form-check-input" type="radio" id="productEightSizeFour" name="sizeRadio" />
                          <label class="form-check-label" for="productEightSizeFour">7.5</label>
                        </div>
                        <div class="form-check form-check-inline form-check-text fs-xs">
                          <input class="form-check-input" type="radio" id="productEightSizeFive" name="sizeRadio" />
                          <label class="form-check-label" for="productEightSizeFive">8.5</label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 px-4"> 
            
            <!-- inc_Card -->
            <div class="card" data-toggle="card-collapse"> 
              
              <!-- inc_Image --> 
              <a href="product.php"> <img src="<?=get_template_directory_uri()?>/assets/img/products/product-11.jpg" alt="..." class="card-img-top"> </a> 
              
              <!-- inc_Collapse -->
              <div class="card-collapse-parent"> 
                
                <!-- inc_Body -->
                <div class="card-body px-0 bg-white text-center"> 
                  
                  <!-- inc_Heading -->
                  <div class="mb-1 fw-bold"> <a class="text-body" href="product.php">Printed A-line Skirt</a> </div>
                  
                  <!-- inc_Price -->
                  <div class="mb-1 fw-bold text-muted"> $79.00 </div>
                  
                  <!-- inc_Rating -->
                  <div class="rating fs-xxs text-dark justify-content-center" data-value="5">
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  </div>
                </div>
                
                <!-- inc_Footer -->
                <div class="card-collapse collapse">
                  <div class="card-footer px-0 pt-0 bg-white text-center">
                    <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal" data-bs-target="#modalProduct"> <i class="fe fe-eye"></i> </button>
                    <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-shopping-cart"></i> </button>
                    <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-heart"></i> </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 px-4"> 
            
            <!-- inc_Card --> 
            <a class="card shadow-hover" href="product.php"> 
            
            <!-- inc_Image --> 
            <img src="<?=get_template_directory_uri()?>/assets/img/products/product-50.jpg" alt="..." class="card-img-top"> 
            
            <!-- inc_Body -->
            <div class="card-body fw-bold text-center"> 
              
              <!-- inc_Heading -->
              <div class="text-body">Cropped cotton Top</div>
              
              <!-- inc_Price -->
              <div class="text-muted">$29.00</div>
            </div>
            </a> </div>
          <div class="col-12 col-md-4 col-lg-3 px-4"> 
            
            <!-- inc_Card -->
            <div class="card card-lg shadow-hover"> 
              
              <!-- inc_Circle -->
              <div class="card-circle card-circle-end"> <strong class="fs-xs">save</strong> <span class="h6 mb-0">30%</span> </div>
              
              <!-- inc_Image --> 
              <img src="<?=get_template_directory_uri()?>/assets/img/products/product-94.jpg" alt="..." class="card-img-top"> 
              
              <!-- inc_Body -->
              <div class="card-body mt-n6 text-center"> 
                
                <!-- inc_Heading -->
                <p class="mb-3 fw-bold"> Blue contact Lenses <br>
                  <span class="fs-xs text-gray-350 text-decoration-line-through">$40.00</span> <span class="text-primary">$28.00</span> </p>
                
                <!-- inc_Text -->
                <p class="text-muted"> Good male give subdue set one, image that his beginning. </p>
                
                <!-- inc_Button --> 
                <a href="#!" class="btn btn-sm btn-outline-primary"> Add to Cart </a> </div>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 px-4"> 
            
            <!-- inc_Card -->
            <div class="card bg-cover" style="min-height: 240px; background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-82.jpg);"> 
              
              <!-- inc_Badge -->
              <div class="badge bg-dark card-badge card-badge-start text-uppercase"> Sale </div>
              
              <!-- inc_Overlay -->
              <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
                <div class="text-center">
                  <p class="fw-bold"> <a class="text-body" href="product.php">Cotton leaf print Shirt</a> <br>
                    <span class="text-muted">$65.00</span> </p>
                  <p class="mb-0">
                    <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal" data-bs-target="#modalProduct"> <i class="fe fe-eye"></i> </button>
                    <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-shopping-cart"></i> </button>
                    <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-heart"></i> </button>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-8 col-lg-6 px-4">
            <div class="row align-items-center">
              <div class="col-8 col-lg-6"> 
                
                <!-- inc_Card -->
                <div class="card"> 
                  
                  <!-- inc_Price -->
                  <div class="btn btn-white btn-sm card-price card-price-start">$59.00</div>
                  
                  <!-- inc_Image --> 
                  <a href="product.php"> <img src="<?=get_template_directory_uri()?>/assets/img/products/product-65.jpg" alt="..." class="card-img-top"> </a> </div>
              </div>
              <div class="col-7 col-lg-6 offset-n3 offset-lg-n1 position-relative"> 
                
                <!-- inc_Heading -->
                <h2 class="mb-0"> <a class="text-reset" href="product.php">Floral Cotton midi Dress</a> </h2>
                
                <!-- inc_Link --> 
                <a class="btn btn-link px-0 text-body" href="product.php"> Shop Now <i class="fe fe-arrow-right ms-2"></i> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
