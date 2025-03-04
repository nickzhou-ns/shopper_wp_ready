<!-- inc_product -->
<section   page="inc_product_product"  >
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-md-6"> 
            
            <!-- inc_Card -->
            <div class="card"> 
              
              <!-- inc_Badge -->
              <div class="badge bg-primary card-badge text-uppercase"> Sale </div>
              
              <!-- inc_Slider -->
              <div class="mb-4" data-flickity='{"draggable": false, "fade": true}' id="productSlider"> 
                
                <!-- inc_Item --> 
                <a href="#" data-bigpicture='{ "imgSrc": "assets/img/products/product-7.jpg"}'> <img src="<?=get_template_directory_uri()?>/assets/img/products/product-7.jpg" alt="..." class="card-img-top"> </a> 
                
                <!-- inc_Item --> 
                <a href="#" data-bigpicture='{ "imgSrc": "assets/img/products/product-122.jpg"}'> <img src="<?=get_template_directory_uri()?>/assets/img/products/product-122.jpg" alt="..." class="card-img-top"> </a> 
                
                <!-- inc_Item --> 
                <a href="#" data-bigpicture='{ "imgSrc": "assets/img/products/product-146.jpg"}'> <img src="<?=get_template_directory_uri()?>/assets/img/products/product-146.jpg" alt="..." class="card-img-top"> </a> </div>
            </div>
            
            <!-- inc_Slider -->
            <div class="flickity-nav mx-n2 mb-10 mb-md-0" data-flickity='{"asNavFor": "#productSlider", "contain": true, "wrapAround": false}'> 
              
              <!-- inc_Item -->
              <div class="col-12 px-2" style="max-width: 113px;"> 
                
                <!-- inc_Image -->
                <div class="ratio ratio-1x1 bg-cover" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-7.jpg);"></div>
              </div>
              
              <!-- inc_Item -->
              <div class="col-12 px-2" style="max-width: 113px;"> 
                
                <!-- inc_Image -->
                <div class="ratio ratio-1x1 bg-cover" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-122.jpg);"></div>
              </div>
              
              <!-- inc_Item -->
              <div class="col-12 px-2" style="max-width: 113px;"> 
                
                <!-- inc_Image -->
                <div class="ratio ratio-1x1 bg-cover" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-146.jpg);"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 ps-lg-10"> 
            
            <!-- inc_Header -->
            <div class="row mb-1">
              <div class="col"> 
                
                <!-- inc_Preheading --> 
                <a class="text-muted" href="shop.php">Sneakers</a> </div>
              <div class="col-auto"> 
                
                <!-- inc_Rating -->
                <div class="rating fs-xs text-dark" data-value="4">
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  <div class="rating-item"> <i class="fas fa-star"></i> </div>
                </div>
                <a class="fs-sm text-reset ms-2" href="#reviews"> Reviews (6) </a> </div>
            </div>
            
            <!-- inc_Heading -->
            <h3 class="mb-2">Leather Sneakers</h3>
            
            <!-- inc_Price -->
            <div class="mb-7"> <span class="fs-lg fw-bold text-gray-350 text-decoration-line-through">$115.00</span> <span class="ms-1 fs-5 fw-bolder text-primary">$85.00</span> <span class="fs-sm ms-1">(In Stock)</span> </div>
            
            <!-- inc_Form -->
            <form>
              <div class="form-group"> 
                
                <!-- inc_Label -->
                <p class="mb-5"> Color: <strong id="colorCaption">White</strong> </p>
                
                <!-- inc_Radio -->
                <div class="mb-8 ms-n1">
                  <div class="form-check form-check-inline form-check-img">
                    <input type="radio" class="form-check-input" id="imgRadioOne" name="imgRadio" data-toggle="form-caption" data-target="#colorCaption" value="White" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-7.jpg);" checked>
                  </div>
                  <div class="form-check form-check-inline form-check-img">
                    <input type="radio" class="form-check-input" id="imgRadioTwo" name="imgRadio" data-toggle="form-caption" data-target="#colorCaption" value="Black" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-49.jpg);">
                  </div>
                </div>
              </div>
              <div class="form-group"> 
                
                <!-- inc_Label -->
                <p class="mb-5"> Size: <strong><span id="sizeCaption">7.5</span> US</strong> </p>
                
                <!-- inc_Radio -->
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
                
                <!-- inc_Size chart -->
                <p class="mb-8"> <img src="<?=get_template_directory_uri()?>/assets/img/icons/icon-ruler.svg" alt="..." class="img-fluid"> <a class="text-reset text-decoration-underline ms-3" data-bs-toggle="modal" href="#modalSizeChart">Size chart</a> </p>
                <div class="row gx-5 mb-7">
                  <div class="col-12 col-lg-auto"> 
                    
                    <!-- inc_Quantity -->
                    <select class="form-select mb-2">
                      <option value="1" selected>1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <div class="col-12 col-lg"> 
                    
                    <!-- inc_Submit -->
                    <button type="submit" class="btn w-100 btn-dark mb-2"> Add to Cart <i class="fe fe-shopping-cart ms-2"></i> </button>
                  </div>
                  <div class="col-12 col-lg-auto"> 
                    
                    <!-- inc_Wishlist -->
                    <button class="btn btn-outline-dark w-100 mb-2" data-toggle="button"> Wishlist <i class="fe fe-heart ms-2"></i> </button>
                  </div>
                </div>
                
                <!-- inc_Text -->
                <p> <span class="text-gray-500">Is your size/color sold out?</span> <a class="text-reset text-decoration-underline" data-bs-toggle="modal" href="#modalWaitList">Join the Wait List!</a> </p>
                
                <!-- inc_Share -->
                <p class="mb-0"> <span class="me-4">Share:</span> <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350" href="#!"> <i class="fab fa-twitter"></i> </a> <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350" href="#!"> <i class="fab fa-facebook-f"></i> </a> <a class="btn btn-xxs btn-circle btn-light fs-xxxs text-gray-350" href="#!"> <i class="fab fa-pinterest-p"></i> </a> </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
