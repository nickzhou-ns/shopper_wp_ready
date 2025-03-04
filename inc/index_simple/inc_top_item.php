<!-- TOP_ITEM -->
<div   page="inc_top_item" class="section py-12 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h2 class="mb-10 text-center"> Top Item of the Week </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="row align-items-center py-6 px-md-4 bg-white shadow">
          <div class="col-12 col-md-6"> 
            
            <!-- Card -->
            <div class="card"> 
              
              <!-- Badge -->
              <div class="badge bg-primary card-badge text-uppercase"> Sale </div>
              
              <!-- Slider -->
              <div class="mb-4" data-flickity='{"draggable": false, "fade": true}' id="productSlider"> 
                
                <!-- Item --> 
                <img src="<?=get_template_directory_uri()?>/assets/img/products/product-7.jpg" alt="..." class="card-img-top"> 
                
                <!-- Item --> 
                <img src="<?=get_template_directory_uri()?>/assets/img/products/product-122.jpg" alt="..." class="card-img-top"> 
                
                <!-- Item --> 
                <img src="<?=get_template_directory_uri()?>/assets/img/products/product-146.jpg" alt="..." class="card-img-top"> </div>
            </div>
            
            <!-- Slider -->
            <div class="flickity-nav mx-n2 mb-10 mb-md-0" data-flickity='{"asNavFor": "#productSlider", "contain": true, "wrapAround": false}'> 
              
              <!-- Item -->
              <div class="col-12 px-2" style="max-width: 113px;"> 
                
                <!-- Image -->
                <div class="ratio ratio-1x1 bg-cover" style="background-image: url(assets/img/products/product-7.jpg);"></div>
              </div>
              
              <!-- Item -->
              <div class="col-12 px-2" style="max-width: 113px;"> 
                
                <!-- Image -->
                <div class="ratio ratio-1x1 bg-cover" style="background-image: url(assets/img/products/product-122.jpg);"></div>
              </div>
              
              <!-- Item -->
              <div class="col-12 px-2" style="max-width: 113px;"> 
                
                <!-- Image -->
                <div class="ratio ratio-1x1 bg-cover" style="background-image: url(assets/img/products/product-146.jpg);"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6"> 
            
            <!-- Header -->
            <div class="row mb-1">
              <div class="col"> 
                
                <!-- Preheading --> 
                <a class="text-muted" href="shop.php">Sneakers</a> </div>
              <div class="col-auto"> 
                
                <!-- Rating -->
                <div class="rating fs-xs text-dark" data-value="4">
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                </div>
                <a class="fs-sm text-reset ms-2" href="product.php#reviews"> Reviews (6) </a> </div>
            </div>
            
            <!-- Heading -->
            <h3 class="mb-2">Leather Sneakers</h3>
            
            <!-- Price -->
            <div class="mb-7"> <span class="fs-lg fw-bold text-gray-350 text-decoration-line-through">$115.00</span> <span class="ms-1 fs-5 fw-bolder text-primary">$85.00</span> </div>
            
            <!-- Form -->
            <form>
              <div class="form-group"> 
                
                <!-- Label -->
                <p class="mb-5"> Color: <strong id="colorCaption">White</strong> </p>
                
                <!-- Radio -->
                <div class="mb-8 ms-n1">
                  <div class="form-check form-check-inline form-check-img">
                    <input class="form-check-input" type="radio" id="imgRadioOne" name="imgRadio" data-toggle="form-caption" data-target="#colorCaption" value="White" style="background-image: url(assets/img/products/product-7.jpg);" checked>
                  </div>
                  <div class="form-check form-check-inline form-check-img">
                    <input class="form-check-input" type="radio" id="imgRadioTwo" name="imgRadio" data-toggle="form-caption" data-target="#colorCaption" value="Black" style="background-image: url(assets/img/products/product-49.jpg);">
                  </div>
                </div>
              </div>
              <div class="form-group"> 
                
                <!-- Label -->
                <p class="mb-5"> Size: <strong><span id="sizeCaption">7.5</span> US</strong> </p>
                
                <!-- Radio -->
                <div class="mb-2">
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioOne" value="6" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioOne">6</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioTwo" value="6.5" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioTwo">6.5</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioThree" value="7" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioThree">7</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioFour" value="7.5" data-toggle="form-caption" data-target="#sizeCaption" checked>
                    <label class="form-check-label" for="sizeRadioFour">7.5</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioFive" value="8" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioFive">8</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioSix" value="8.5" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioSix">8.5</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioSeven" value="9" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioSeven">9</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioEight" value="9.5" data-toggle="form-caption" data-target="#sizeCaption" disabled>
                    <label class="form-check-label" for="sizeRadioEight">9.5</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioNine" value="10" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioNine">10</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioTen" value="10.5" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioTen">10.5</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioEleven" value="11" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioEleven">11</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioTwelve" value="12" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioTwelve">12</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioThirteen" value="13" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioThirteen">13</label>
                  </div>
                  <div class="form-check form-check-inline form-check-size mb-2">
                    <input type="radio" class="form-check-input" name="sizeRadio" id="sizeRadioFourteen" value="14" data-toggle="form-caption" data-target="#sizeCaption">
                    <label class="form-check-label" for="sizeRadioFourteen">14</label>
                  </div>
                </div>
                
                <!-- Size chart -->
                <p class="mb-8"> <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/icons/icon-ruler.svg" alt="..."> <a class="text-reset text-decoration-underline ms-3" data-bs-toggle="modal" href="#modalSizeChart">Size chart</a> </p>
                <div class="row gx-5 mb-7">
                  <div class="col-12 col-lg-auto"> 
                    
                    <!-- Quantity -->
                    <select class="form-select mb-2">
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <div class="col-12 col-lg"> 
                    
                    <!-- Submit -->
                    <button type="submit" class="btn w-100 btn-dark mb-2"> Add to Cart <i class="fe fe-shopping-cart ms-2"></i> </button>
                  </div>
                  <div class="col-12 col-lg-auto"> 
                    
                    <!-- Wishlist -->
                    <button class="btn btn-outline-dark w-100 mb-2" data-toggle="button"> Wishlist <i class="fe fe-heart ms-2"></i> </button>
                  </div>
                </div>
                
                <!-- Text -->
                <p class="mb-0"> <span class="text-gray-500">Is your size/color sold out?</span> <a class="text-reset text-decoration-underline" data-bs-toggle="modal" href="#modalWaitList">Join the Wait List!</a> </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
