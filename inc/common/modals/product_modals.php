  <!-- Product -->
     <div   page="product_modals" class="modal fade" id="modalProduct" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
    
          <!-- Close -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>
    
          <!-- Content -->
          <div class="container-fluid px-xl-0">
            <div class="row align-items-center mx-xl-0">
              <div class="col-12 col-lg-6 col-xl-5 py-4 py-xl-0 px-xl-0">
    
                <!-- Image -->
                <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product-7.jpg" alt="...">
    
                <!-- Button -->
                <a class="btn btn-sm w-100 btn-primary" href="./product.php">
                  More Product Info <i class="fe fe-info ms-2"></i>
                </a>
    
              </div>
              <div class="col-12 col-lg-6 col-xl-7 py-9 px-md-9">
    
                <!-- Heading -->
                <h4 class="mb-3">Leather Sneakers</h4>
    
                <!-- Price -->
                <div class="mb-7">
                  <span class="h5">$85.00</span>
                  <span class="fs-sm">(In Stock)</span>
                </div>
    
                <!-- Form -->
                <form>
                  <div class="form-group">
    
                    <!-- Label -->
                    <p>
                      Color: <strong id="modalProductColorCaption">White</strong>
                    </p>
    
                    <!-- Radio -->
                    <div class="mb-8 ms-n1">
                      <div class="form-check form-check-inline form-check-img">
                        <input type="radio" class="form-check-input" id="modalProductColorOne" name="modalProductColor" data-toggle="form-caption" data-target="#modalProductColorCaption" value="White" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-7.jpg);" checked>
                      </div>
                      <div class="form-check form-check-inline form-check-img">
                        <input type="radio" class="form-check-input" id="modalProductColorTwo" name="modalProductColor" data-toggle="form-caption" data-target="#modalProductColorCaption" value="Black" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-49.jpg);">
                      </div>
                    </div>
    
                  </div>
                  <div class="form-group">
    
                    <!-- Label -->
                    <p>
                      Size: <strong><span id="modalProductSizeCaption">7.5</span> US</strong>
                    </p>
    
                    <!-- Radio -->
                    <div class="mb-2">
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeOne" value="6" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeOne">6</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeTwo" value="6.5" data-toggle="form-caption" data-target="#modalProductSizeCaption" disabled>
                        <label class="form-check-label" for="modalProductSizeTwo">6.5</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeThree" value="7" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeThree">7</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeFour" value="7.5" data-toggle="form-caption" data-target="#modalProductSizeCaption" checked>
                        <label class="form-check-label" for="modalProductSizeFour">7.5</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeFive" value="8" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeFive">8</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeSix" value="8.5" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeSix">8.5</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeSeven" value="9" data-toggle="form-caption" data-target="#modalProductSizeCaption" disabled>
                        <label class="form-check-label" for="modalProductSizeSeven">9</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeEight" value="9.5" data-toggle="form-caption" data-target="#modalProductSizeCaption" disabled>
                        <label class="form-check-label" for="modalProductSizeEight">9.5</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeNine" value="10" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeNine">10</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeTen" value="10.5" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeTen">10.5</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeEleven" value="11" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeEleven">11</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeTwelve" value="12" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeTwelve">12</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeThirteen" value="13" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeThirteen">13</label>
                      </div>
                      <div class="form-check form-check-inline form-check-size mb-2">
                        <input type="radio" class="form-check-input" name="modalProductSize" id="modalProductSizeFourteen" value="14" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="form-check-label" for="modalProductSizeFourteen">14</label>
                      </div>
                    </div>
    
                  </div>
                  <div class="form-group mb-0">
                    <div class="row gx-5">
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
                        <button type="submit" class="btn w-100 btn-dark mb-2">
                          Add to Cart <i class="fe fe-shopping-cart ms-2"></i>
                        </button>
    
                      </div>
                      <div class="col-12 col-lg-auto">
    
                        <!-- Wishlist -->
                        <button class="btn btn-outline-dark w-100 mb-2" data-toggle="button">
                          Wishlist <i class="fe fe-heart ms-2"></i>
                        </button>
    
                      </div>
                    </div>
                  </div>
                </form>
    
              </div>
            </div>
          </div>
    
        </div>
      </div>
    </div>