<!-- inc_product -->
<section  page="inc_product_product_images_left" >
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-md-6"> 
            
            <!-- Images -->
            <div class="row gx-5 mb-10 mb-md-0">
              <div class="col-2"> 
                
                <!-- Slider -->
                <div class="flickity-nav flickity-vertical" data-flickity='{"asNavFor": "#productSlider", "draggable": false}'> 
                  
                  <!-- Item -->
                  <div class="ratio ratio-1x1 bg-cover mb-4" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-112.jpg);"></div>
                  
                  <!-- Item -->
                  <div class="ratio ratio-1x1 bg-cover mb-4" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-113.jpg);"></div>
                  
                  <!-- Item -->
                  <div class="ratio ratio-1x1 bg-cover mb-4" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-114.jpg);"></div>
                  
                  <!-- Item -->
                  <div class="ratio ratio-1x1 bg-cover mb-4" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-115.jpg);"></div>
                </div>
              </div>
              <div class="col-10"> 
                
                <!-- Card -->
                <div class="card"> 
                  
                  <!-- Badge -->
                  <div class="badge bg-secondary card-badge card-badge-end text-uppercase"> Out of Stock </div>
                  
                  <!-- Slider -->
                  <div data-flickity='{"draggable": false, "fade": true}' id="productSlider"> 
                    
                    <!-- Item --> 
                    <a href="#" data-bigpicture='{ "imgSrc": "assets/img/products/product-112.jpg"}'> <img src="<?=get_template_directory_uri()?>/assets/img/products/product-112.jpg" alt="..." class="card-img-top"> </a> 
                    
                    <!-- Item --> 
                    <a href="#" data-bigpicture='{ "imgSrc": "assets/img/products/product-113.jpg"}'> <img src="<?=get_template_directory_uri()?>/assets/img/products/product-113.jpg" alt="..." class="card-img-top"> </a> 
                    
                    <!-- Item --> 
                    <a href="#" data-bigpicture='{ "imgSrc": "assets/img/products/product-114.jpg"}'> <img src="<?=get_template_directory_uri()?>/assets/img/products/product-114.jpg" alt="..." class="card-img-top"> </a> 
                    
                    <!-- Item --> 
                    <a href="#" data-bigpicture='{ "imgSrc": "assets/img/products/product-115.jpg"}'> <img src="<?=get_template_directory_uri()?>/assets/img/products/product-115.jpg" alt="..." class="card-img-top"> </a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 ps-lg-10"> 
            
            <!-- Header -->
            <div class="row mb-1">
              <div class="col"> 
                
                <!-- Preheading --> 
                <a class="text-muted" href="shop.php">T-Shirts</a> </div>
              <div class="col-auto"> 
                
                <!-- Rating -->
                <div class="rating fs-xs text-dark">
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                </div>
                <a class="fs-sm text-reset ms-2" href="#reviews"> Reviews (0) </a> </div>
            </div>
            
            <!-- Heading -->
            <h3 class="mb-2">Cotton striped T-Shirt</h3>
            
            <!-- Price -->
            <div class="mb-7 text-gray-400"> <span class="ms-1 fs-5 fw-bold">$30.00</span> <span class="ms-1 fs-sm">(Out of Stock)</span> </div>
            
            <!-- Form -->
            <form>
              <div class="form-group"> 
                
                <!-- Label -->
                <p class="mb-4"> Color: <strong id="colorCaption">Multicolor</strong> </p>
                
                <!-- Radio -->
                <div class="mb-8 ms-n1">
                  <div class="form-check form-check-inline form-check-img">
                    <input type="radio" class="form-check-input" id="imgRadioOne" name="imgRadio" data-toggle="form-caption" data-target="#colorCaption" value="White" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-115.jpg);" checked>
                  </div>
                </div>
              </div>
              <div class="form-group"> 
                
                <!-- Label -->
                <p class="mb-4"> Size: <strong><span id="sizeCaption">Choose size</span></strong> </p>
                
                <!-- Radio -->
                <div class="mb-2">
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioOne" value="6" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioOne">3XS</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioTwo" value="6.5" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioTwo">2XS</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioThree" value="7" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioThree">XS</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioFour" value="7.5" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioFour">SM</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioFive" value="8" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioFive">MD</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioSix" value="8.5" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioSix">LG</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioSeven" value="9" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioSeven">XL</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioEight" value="9.5" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioEight">2XL</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioNine" value="10" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioNine">3XL</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioTen" value="10.5" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioTen">4XL</label>
                  </div>
                </div>
                
                <!-- Size chart -->
                <p class="mb-8"> <img src="<?=get_template_directory_uri()?>/assets/img/icons/icon-ruler.svg" alt="..." class="img-fluid"> <a class="text-reset text-decoration-underline ms-3" data-bs-toggle="modal" href="#modalSizeChart">Size chart</a> </p>
                <div class="row gx-5 mb-7">
                  <div class="col-12 col-lg-auto"> 
                    
                    <!-- Submit -->
                    <button class="btn w-100 btn-dark mb-2" data-toggle="button"> <i class="fe fe-mail me-2"></i> Wait List </button>
                  </div>
                  <div class="col-12 col-lg-auto"> 
                    
                    <!-- Wishlist -->
                    <button class="btn btn-outline-dark w-100 mb-2" data-toggle="button"> Wishlist <i class="fe fe-heart ms-2"></i> </button>
                  </div>
                </div>
                
                <!-- Text -->
                <p> <span class="text-gray-500">Is your size/color sold out?</span> <a class="text-reset text-decoration-underline" data-bs-toggle="modal" href="#modalWaitList">Join the Wait List!</a> </p>
                
                <!-- Share -->
                <p class="mb-0"> <span class="me-4">Share:</span> <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350" href="#!"> <i class="fab fa-twitter"></i> </a> <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350" href="#!"> <i class="fab fa-facebook-f"></i> </a> <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350" href="#!"> <i class="fab fa-pinterest-p"></i> </a> </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
