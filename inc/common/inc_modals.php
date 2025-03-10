<!-- MODALS -->
<!-- Newsletter: Horizontal -->
<div page="inc_models" class="modal fade" id="modalNewsletterHorizontal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content"> 
      
      <!-- Close -->
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
      
      <!-- Content -->
      <div class="row gx-0">
        <div class="col-12 col-lg-5"> 
          
          <!-- Image --> 
          <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/covers/cover-25.jpg" alt="..."> </div>
        <div class="col-12 col-lg-7 d-flex flex-column px-md-8"> 
          
          <!-- Body -->
          <div class="modal-body my-auto py-10"> 
            
            <!-- Heading -->
            <h4>Subscribe to Newsletter and get 15% Discount</h4>
            
            <!-- Text -->
            <p class="mb-7 fs-lg"> On your next purchase </p>
            
            <!-- Form -->
            <form>
              <div class="row gx-5">
                <div class="col"> 
                  
                  <!-- Input -->
                  <label class="visually-hidden" for="modalNewsletterHorizontalEmail">Enter Email *</label>
                  <input class="form-control form-control-sm" id="modalNewsletterHorizontalEmail" type="email" placeholder="Enter Email *">
                </div>
                <div class="col-auto"> 
                  
                  <!-- Button -->
                  <button class="btn btn-sm btn-dark" type="submit"> <i class="fe fe-send"></i> </button>
                </div>
              </div>
            </form>
          </div>
          
          <!-- Footer -->
          <div class="modal-footer pt-0"> 
            
            <!-- Checkbox -->
            <div class="form-check"> 
              
              <!-- Input -->
              <input class="form-check-input" id="modalNewsletterHorizontalCheckbox" type="checkbox">
              
              <!-- Label -->
              <label class="form-check-label fs-xs" for="modalNewsletterHorizontalCheckbox"> Prevent this Pop-up </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Newsletter: Vertical -->
<div class="modal fade" id="modalNewsletterVertical" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      
      <!-- Close -->
      <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
      
      <!-- Body -->
      <div class="modal-body mt-2 me-2 ms-2 py-10 bg-cover text-center text-white" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/covers/cover-26.jpg);"> 
        
        <!-- Heading -->
        <h4>Subscribe to Newsletter and get 15% Discount</h4>
        
        <!-- Text -->
        <p class="mb-0 fs-lg"> On your next purchase </p>
      </div>
      
      <!-- Body -->
      <div class="modal-body py-9"> 
        
        <!-- Form -->
        <form>
          <div class="row gx-5">
            <div class="col"> 
              
              <!-- Input -->
              <label class="visually-hidden" for="modalNewsletterVerticalEmail">Enter Email *</label>
              <input class="form-control form-control-sm" id="modalNewsletterVerticalEmail" type="email" placeholder="Enter Email *">
            </div>
            <div class="col-auto"> 
              
              <!-- Button -->
              <button class="btn btn-sm btn-dark" type="submit"> Subscribe </button>
            </div>
          </div>
        </form>
      </div>
      
      <!-- Footer -->
      <div class="modal-footer justify-content-center pt-0"> 
        
        <!-- Checkbox -->
        <div class="form-check"> 
          
          <!-- Input -->
          <input class="form-check-input" id="modalNewsletterVerticalCheckbox" type="checkbox">
          
          <!-- Label -->
          <label class="form-check-label fs-xs" for="modalNewsletterVerticalCheckbox"> Prevent this Pop-up </label>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Password Reset -->
<div class="modal fade" id="modalPasswordReset" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      
      <!-- Close -->
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
      
      <!-- Header-->
      <div class="modal-header lh-fixed fs-lg"> <strong class="mx-auto">Forgot Password?</strong> </div>
      
      <!-- Body -->
      <div class="modal-body text-center"> 
        
        <!-- Text -->
        <p class="mb-7 fs-sm text-gray-500"> Please enter your Email Address. You will receive a link
          to create a new password via Email. </p>
        
        <!-- Form -->
        <form>
          
          <!-- Email -->
          <div class="form-group">
            <label class="visually-hidden" for="modalPasswordResetEmail"> Email Address * </label>
            <input class="form-control form-control-sm" id="modalPasswordResetEmail" type="email" placeholder="Email Address *" required>
          </div>
          
          <!-- Button -->
          <button class="btn btn-sm btn-dark"> Reset Password </button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Product -->
<div class="modal fade" id="modalProduct" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content"> 
      
      <!-- Close -->
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
      
      <!-- Content -->
      <div class="container-fluid px-xl-0">
        <div class="row align-items-center mx-xl-0">
          <div class="col-12 col-lg-6 col-xl-5 py-4 py-xl-0 px-xl-0"> 
            
            <!-- Image --> 
            <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product_7.jpg" alt="..."> 
            
            <!-- Button --> 
            <a class="btn btn-sm w-100 btn-primary" href="./product.php"> More Product Info <i class="fe fe-info ms-2"></i> </a> </div>
          <div class="col-12 col-lg-6 col-xl-7 py-9 px-md-9"> 
            
            <!-- Heading -->
            <h4 class="mb-3">Leather Sneakers</h4>
            
            <!-- Price -->
            <div class="mb-7"> <span class="h5">$85.00</span> <span class="fs-sm">(In Stock)</span> </div>
            
            <!-- Form -->
            <form>
              <div class="form-group"> 
                
                <!-- Label -->
                <p> Color: <strong id="modalProductColorCaption">White</strong> </p>
                
                <!-- Radio -->
                <div class="mb-8 ms-n1">
                  <div class="form-check form-check-inline form-check-img">
                    <input type="radio" class="form-check-input" id="modalProductColorOne" name="modalProductColor" data-toggle="form-caption" data-target="#modalProductColorCaption" value="White" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product_7.jpg);" checked>
                  </div>
                  <div class="form-check form-check-inline form-check-img">
                    <input type="radio" class="form-check-input" id="modalProductColorTwo" name="modalProductColor" data-toggle="form-caption" data-target="#modalProductColorCaption" value="Black" style="background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product_49.jpg);">
                  </div>
                </div>
              </div>
              <div class="form-group"> 
                
                <!-- Label -->
                <p> Size: <strong><span id="modalProductSizeCaption">7.5</span> US</strong> </p>
                
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
                    <button type="submit" class="btn w-100 btn-dark mb-2"> Add to Cart <i class="fe fe-shopping-cart ms-2"></i> </button>
                  </div>
                  <div class="col-12 col-lg-auto"> 
                    
                    <!-- Wishlist -->
                    <button class="btn btn-outline-dark w-100 mb-2" data-toggle="button"> Wishlist <i class="fe fe-heart ms-2"></i> </button>
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

<!-- Search -->
<div class="offcanvas offcanvas-end" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true"> 
  
  <!-- Close -->
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
  
  <!-- Header-->
  <div class="offcanvas-header lh-fixed fs-lg"> <strong class="mx-auto">Search Products</strong> </div>
  
  <!-- Body: Form -->
  <div class="offcanvas-body">
    <form>
      <div class="form-group">
        <label class="visually-hidden" for="modalSearchCategories">Categories:</label>
        <select class="form-select" id="modalSearchCategories">
          <option selected>All Categories</option>
          <option>Women</option>
          <option>Men</option>
          <option>Kids</option>
        </select>
      </div>
      <div class="input-group input-group-merge">
        <input class="form-control" type="search" placeholder="Search">
        <div class="input-group-append">
          <button class="btn btn-outline-border" type="submit"> <i class="fe fe-search"></i> </button>
        </div>
      </div>
    </form>
  </div>
  
  <!-- Body: Results (add `.d-none` to disable it) -->
  <div class="offcanvas-body border-top fs-sm"> 
    
    <!-- Heading -->
    <p>Search Results:</p>
    
    <!-- Items -->
    <div class="row align-items-center position-relative mb-5">
      <div class="col-4 col-md-3"> 
        
        <!-- Image --> 
        <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product_5.jpg" alt="..."> </div>
      <div class="col position-static"> 
        
        <!-- Text -->
        <p class="mb-0 fw-bold"> <a class="stretched-link text-body" href="./product.php">Leather mid-heel Sandals</a> <br>
          <span class="text-muted">$129.00</span> </p>
      </div>
    </div>
    <div class="row align-items-center position-relative mb-5">
      <div class="col-4 col-md-3"> 
        
        <!-- Image --> 
        <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product_6.jpg" alt="..."> </div>
      <div class="col position-static"> 
        
        <!-- Text -->
        <p class="mb-0 fw-bold"> <a class="stretched-link text-body" href="./product.php">Cotton floral print Dress</a> <br>
          <span class="text-muted">$40.00</span> </p>
      </div>
    </div>
    <div class="row align-items-center position-relative mb-5">
      <div class="col-4 col-md-3"> 
        
        <!-- Image --> 
        <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product_7.jpg" alt="..."> </div>
      <div class="col position-static"> 
        
        <!-- Text -->
        <p class="mb-0 fw-bold"> <a class="stretched-link text-body" href="./product.php">Leather Sneakers</a> <br>
          <span class="text-primary">$85.00</span> </p>
      </div>
    </div>
    <div class="row align-items-center position-relative mb-5">
      <div class="col-4 col-md-3"> 
        
        <!-- Image --> 
        <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product_8.jpg" alt="..."> </div>
      <div class="col position-static"> 
        
        <!-- Text -->
        <p class="mb-0 fw-bold"> <a class="stretched-link text-body" href="./product.php">Cropped cotton Top</a> <br>
          <span class="text-muted">$29.00</span> </p>
      </div>
    </div>
    <div class="row align-items-center position-relative mb-5">
      <div class="col-4 col-md-3"> 
        
        <!-- Image --> 
        <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product_9.jpg" alt="..."> </div>
      <div class="col position-static"> 
        
        <!-- Text -->
        <p class="mb-0 fw-bold"> <a class="stretched-link text-body" href="./product.php">Floral print midi Dress</a> <br>
          <span class="text-muted">$50.00</span> </p>
      </div>
    </div>
    
    <!-- Button --> 
    <a class="btn btn-link px-0 text-reset" href="./shop.php"> View All <i class="fe fe-arrow-right ms-2"></i> </a> </div>
  
  <!-- Body: Empty (remove `.d-none` to enable it) -->
  <div class="offcanvas-body d-none"> 
    
    <!-- Text -->
    <p class="mb-3 fs-sm text-center"> Nothing matches your search </p>
    
    <!-- Smiley -->
    <p class="mb-0 fs-sm text-center"> 😞 </p>
  </div>
</div>

<!-- Shopping Cart -->
<div class="offcanvas offcanvas-end" id="modalShoppingCart" tabindex="-1" role="dialog" aria-hidden="true"> 
  
  <!-- Full cart (add `.d-none` to disable it) --> 
  
  <!-- Close -->
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
  
  <!-- Header-->
  <div class="offcanvas-header lh-fixed fs-lg"> <strong class="mx-auto">Your Cart (2)</strong> </div>
  
  <!-- List group -->
  <ul class="list-group list-group-lg list-group-flush">
    <li class="list-group-item">
      <div class="row align-items-center">
        <div class="col-4"> 
          
          <!-- Image --> 
          <a href="./product.php"> <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product_6.jpg" alt="..."> </a> </div>
        <div class="col-8"> 
          
          <!-- Title -->
          <p class="fs-sm fw-bold mb-6"> <a class="text-body" href="./product.php">Cotton floral print Dress</a> <br>
            <span class="text-muted">$40.00</span> </p>
          
          <!--Footer -->
          <div class="d-flex align-items-center"> 
            
            <!-- Select -->
            <select class="form-select form-select-xxs w-auto">
              <option value="1">1</option>
              <option value="1">2</option>
              <option value="1">3</option>
            </select>
            
            <!-- Remove --> 
            <a class="fs-xs text-gray-400 ms-auto" href="#!"> <i class="fe fe-x"></i> Remove </a> </div>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="row align-items-center">
        <div class="col-4"> 
          
          <!-- Image --> 
          <a href="./product.php"> <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product_10.jpg" alt="..."> </a> </div>
        <div class="col-8"> 
          
          <!-- Title -->
          <p class="fs-sm fw-bold mb-6"> <a class="text-body" href="./product.php">Suede cross body Bag</a> <br>
            <span class="text-muted">$49.00</span> </p>
          
          <!--Footer -->
          <div class="d-flex align-items-center"> 
            
            <!-- Select -->
            <select class="form-select form-select-xxs w-auto">
              <option value="1">1</option>
              <option value="1">2</option>
              <option value="1">3</option>
            </select>
            
            <!-- Remove --> 
            <a class="fs-xs text-gray-400 ms-auto" href="#!"> <i class="fe fe-x"></i> Remove </a> </div>
        </div>
      </div>
    </li>
  </ul>
  
  <!-- Footer -->
  <div class="offcanvas-footer justify-between lh-fixed fs-sm bg-light mt-auto"> <strong>Subtotal</strong> <strong class="ms-auto">$89.00</strong> </div>
  
  <!-- Buttons -->
  <div class="offcanvas-body"> <a class="btn w-100 btn-dark" href="./checkout.php">Continue to Checkout</a> <a class="btn w-100 btn-outline-dark mt-2" href="./shopping-cart.php">View Cart</a> </div>
  
  <!-- Empty cart (remove `.d-none` to enable it) -->
  <div class="d-none"> 
    
    <!-- Close -->
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
    
    <!-- Header-->
    <div class="offcanvas-header lh-fixed fs-lg"> <strong class="mx-auto">Your Cart (0)</strong> </div>
    
    <!-- Body -->
    <div class="offcanvas-body flex-grow-0 my-auto"> 
      
      <!-- Heading -->
      <h6 class="mb-7 text-center">Your cart is empty 😞</h6>
      
      <!-- Button --> 
      <a class="btn w-100 btn-outline-dark" href="#!"> Continue Shopping </a> </div>
  </div>
</div>

<!-- Sidebar -->
<div class="offcanvas offcanvas-end" id="modalSidebar" tabindex="-1" role="dialog" aria-hidden="true"> 
  
  <!-- Close -->
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
  
  <!-- Body -->
  <div class="offcanvas-body px-10 my-auto"> 
    
    <!-- Nav -->
    <ul class="nav nav-vertical nav-unstyled fs-2" id="sidebarNav">
      <li class="nav-item"> 
        
        <!-- Toggle --> 
        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#sidebarHome"> Home </a> 
        
        <!-- Collapse -->
        <div class="collapse" id="sidebarHome" data-bs-parent="#sidebarNav">
          <ul class="list-styled fs-lg py-3 mb-0">
            <li class="list-styled-item"> <a class="list-styled-link" href="./index.php">Default</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./index-classic.php">Classic</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./index-fashion.php">Fashion</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./index-boxed.php">Boxed</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./index-simple.php">Simple</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./index-asymmetric.php">Asymmetric</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./index-sidenav.php">Sidenav</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./index-landing.php">Landing</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> 
        
        <!-- Toggle --> 
        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#sidebarCatalog"> Catalog </a> 
        
        <!-- Collapse -->
        <div class="collapse" id="sidebarCatalog" data-bs-parent="#sidebarNav">
          <div class="row">
            <div class="col-12 py-3"> 
              
              <!-- Heading -->
              <h6 class="mb-5 fw-bold">Clothing</h6>
              
              <!-- Links -->
              <ul class="list-styled fs-lg py-3">
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">All Clothing</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Blouses & Shirts</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Coats & Jackets</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Dresses</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Hoodies & Sweats</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Denim</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Jeans</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Jumpers & Cardigans</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Leggings</a> </li>
              </ul>
            </div>
            <div class="col-12 py-3"> 
              
              <!-- Heading -->
              <h6 class="mb-5 fw-bold">Shoes & Boots</h6>
              
              <!-- Links -->
              <ul class="list-styled fs-lg">
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">All Shoes & Boots</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Branded Shoes</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Boots</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Heels</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Trainers</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Sandals</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Shoes</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Wide Fit Shoes</a> </li>
              </ul>
            </div>
            <div class="col-12 py-3"> 
              
              <!-- Heading -->
              <h6 class="mb-5 fw-bold">Bags & Accessories</h6>
              
              <!-- Links -->
              <ul class="list-styled fs-lg">
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">All Bags & Accessories</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Accessories</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Bags & Purses</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Luggage</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Belts</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Hats</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Hair Accessories</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Jewellery</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Travel Accessories</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item"> 
        
        <!-- Toggle --> 
        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#sidebarShop"> Shop </a> 
        
        <!-- Collapse -->
        <div class="collapse" id="sidebarShop" data-bs-parent="#sidebarNav">
          <div class="row">
            <div class="col-12 py-3"> 
              
              <!-- Heading -->
              <h6 class="mb-5">Shop</h6>
              
              <!-- Links -->
              <ul class="list-styled fs-lg">
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop.php">Default</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop-topbar.php">Topbar</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop-collapse.php">Collapse</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop-simple.php">Simple</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shop-masonry.php">Masonry</a> </li>
              </ul>
            </div>
            <div class="col-12 py-3"> 
              
              <!-- Heading -->
              <h6 class="mb-5">Product</h6>
              
              <!-- Links -->
              <ul class="list-styled fs-lg">
                <li class="list-styled-item"> <a class="list-styled-link" href="./product.php">Default</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./product_images-left.php">Images Left</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./product_image-grid.php">Image Grid</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./product_image-slider.php">Image Slider</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./product_images-stacked.php">Images Stacked</a> </li>
              </ul>
            </div>
            <div class="col-12 py-3"> 
              
              <!-- Heading -->
              <h6 class="mb-5">Support</h6>
              
              <!-- Links -->
              <ul class="list-styled fs-lg">
                <li class="list-styled-item"> <a class="list-styled-link" href="./shopping-cart.php">Shopping Cart</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./checkout.php">Checkout</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./order-completed.php">Order Completed</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./shipping-and-returns.php">Shipping & Returns</a> </li>
              </ul>
            </div>
            <div class="col-12 py-3"> 
              
              <!-- Heading -->
              <h6 class="mb-5">Account</h6>
              
              <!-- Links -->
              <ul class="list-styled fs-lg">
                <li class="list-styled-item"> <a class="list-styled-link" href="./account-order.php">Order</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./account-orders.php">Orders</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./account-wishlist.php">Wishlist</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./account-personal-info.php">Personal Info</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="account_address.php">Addresses</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./account-address-edit.php">Addresses: New</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./account-payment.php">Payment</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./account-payment-edit.php">Payment: New</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="./account-payment-choose.php">Payment: Choose</a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" href="auth.php">Auth</a> </li>
              </ul>
            </div>
            <div class="col-12 py-3"> 
              
              <!-- Heading -->
              <h6 class="mb-5">Modals</h6>
              
              <!-- Links -->
              <ul class="list-styled fs-lg">
                <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalNewsletterHorizontal"> Newsletter: Horizontal </a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalNewsletterVertical"> Newsletter: Vertical </a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalProduct"> Product </a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="offcanvas" href="#modalSearch"> Search </a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="offcanvas" href="#modalShoppingCart"> Shopping Cart </a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalSizeChart"> Size Chart </a> </li>
                <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalWaitList"> Wait List </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item"> 
        
        <!-- Toggle --> 
        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#sidebarPages"> Pages </a> 
        
        <!-- Collapse -->
        <div class="collapse" id="sidebarPages" data-bs-parent="#sidebarNav">
          <ul class="list-styled fs-lg py-3 mb-0">
            <li class="list-styled-item"> <a class="list-styled-link" href="./about.php">About</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./contact-us.php">Contact Us</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./store-locator.php">Store Locator</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./faq.php">FAQ</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./coming-soon.php">Coming Soon</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./404.php">404</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> 
        
        <!-- Toggle --> 
        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#sidebarBlog"> Blog </a> 
        
        <!-- Collapse -->
        <div class="collapse" id="sidebarBlog" data-bs-parent="#sidebarNav">
          <ul class="list-styled fs-lg py-3 mb-0">
            <li class="list-styled-item"> <a class="list-styled-link" href="./blog.php">Blog</a> </li>
            <li class="list-styled-item"> <a class="list-styled-link" href="./blog-post.php">Blog Post</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" href="./docs/getting-started.php">Docs</a> </li>
    </ul>
  </div>
  
  <!-- Body -->
  <div class="moda-body px-10 py-9"> 
    
    <!-- Social links -->
    <ul class="list-inline">
      <li class="list-inline-item"> <a class="text-gray-350" href="#!"> <i class="fab fa-facebook-f"></i> </a> </li>
      <li class="list-inline-item"> <a class="text-gray-350" href="#!"> <i class="fab fa-youtube"></i> </a> </li>
      <li class="list-inline-item"> <a class="text-gray-350" href="#!"> <i class="fab fa-twitter"></i> </a> </li>
      <li class="list-inline-item"> <a class="text-gray-350" href="#!"> <i class="fab fa-instagram"></i> </a> </li>
      <li class="list-inline-item"> <a class="text-gray-350" href="#!"> <i class="fab fa-medium-m"></i> </a> </li>
    </ul>
    
    <!-- Footer -->
    <div class="fs-xxs text-gray-350"> © 2019 All rights reserved. Designed by Unvab. </div>
  </div>
</div>

<!-- Size Chart -->
<div class="modal fade" id="modalSizeChart" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content"> 
      
      <!-- Close -->
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
      
      <!-- Header-->
      <div class="modal-header lh-fixed fs-lg"> <strong class="mx-auto">Size Chart</strong> </div>
      
      <!-- Body -->
      <div class="modal-body border-bottom"> 
        
        <!-- Header -->
        <div class="d-flex mb-7"> 
          
          <!-- Heading -->
          <h5 class="mb-0">Clothing</h5>
          
          <!-- Inputs -->
          <div class="ms-auto"> 
            
            <!-- IN -->
            <input type="radio" class="btn-check" name="modalSizeChartUnitOne" id="inOne" checked>
            <label class="btn btn-xxs btn-circle btn-outline-dark fs-xxxs rounded-0" for="inOne">IN</label>
            
            <!-- CM -->
            <input type="radio" class="btn-check" name="modalSizeChartUnitOne" id="cmOne">
            <label class="btn btn-xxs btn-circle btn-outline-dark fs-xxxs rounded-0" for="cmOne">CM</label>
          </div>
        </div>
        
        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-bordered table-sm table-hover mb-0">
            <thead>
              <tr>
                <th>Size</th>
                <th>US</th>
                <th>Bust</th>
                <th>Waist</th>
                <th>Hips</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>XS</td>
                <td>2</td>
                <td>32</td>
                <td>24 - 25</td>
                <td>33 - 34</td>
              </tr>
              <tr>
                <td>S</td>
                <td>4</td>
                <td>34 - 35</td>
                <td>26 - 27</td>
                <td>35 - 26</td>
              </tr>
              <tr>
                <td>M</td>
                <td>6</td>
                <td>36 - 37</td>
                <td>28 - 29</td>
                <td>38 - 40</td>
              </tr>
              <tr>
                <td>L</td>
                <td>8</td>
                <td>38 - 29</td>
                <td>30 - 31</td>
                <td>42 - 44</td>
              </tr>
              <tr>
                <td>XL</td>
                <td>10</td>
                <td>40 - 41</td>
                <td>32 - 33</td>
                <td>45 - 47</td>
              </tr>
              <tr>
                <td>XXL</td>
                <td>12</td>
                <td>42 - 43</td>
                <td>34 - 35</td>
                <td>48 - 50</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <!-- Body -->
      <div class="modal-body"> 
        
        <!-- Header -->
        <div class="d-flex mb-7"> 
          
          <!-- Heading -->
          <h5 class="mb-0">Shoes</h5>
          
          <!-- Inputs -->
          <div class="ms-auto"> 
            
            <!-- IN -->
            <input type="radio" class="btn-check" name="modalSizeChartUnitTwo" id="inTwo" checked>
            <label class="btn btn-xxs btn-circle btn-outline-dark fs-xxxs rounded-0" for="inTwo">IN</label>
            
            <!-- CM -->
            <input type="radio" class="btn-check" name="modalSizeChartUnitTwo" id="cmTwo">
            <label class="btn btn-xxs btn-circle btn-outline-dark fs-xxxs rounded-0" for="cmTwo">CM</label>
          </div>
        </div>
        
        <!-- Tables -->
        <div class="row">
          <div class="col-12 col-lg-6"> 
            
            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-bordered table-sm table-hover mb-lg-0">
                <thead>
                  <tr>
                    <th>Size</th>
                    <th>US</th>
                    <th>Foot Length</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>36</td>
                    <td>5</td>
                    <td>22.8</td>
                  </tr>
                  <tr>
                    <td>26.5</td>
                    <td>5.5</td>
                    <td>23.1</td>
                  </tr>
                  <tr>
                    <td>37</td>
                    <td>6</td>
                    <td>23.5</td>
                  </tr>
                  <tr>
                    <td>37.5</td>
                    <td>6.</td>
                    <td>23.5</td>
                  </tr>
                  <tr>
                    <td>38</td>
                    <td>7</td>
                    <td>24.1</td>
                  </tr>
                  <tr>
                    <td>38.5</td>
                    <td>7.5</td>
                    <td>24.5</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-12 col-lg-6"> 
            
            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-bordered table-sm table-hover mb-0">
                <thead>
                  <tr>
                    <th>Size</th>
                    <th>US</th>
                    <th>Foot Length</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>36</td>
                    <td>5</td>
                    <td>22.8</td>
                  </tr>
                  <tr>
                    <td>39</td>
                    <td>8</td>
                    <td>24.1</td>
                  </tr>
                  <tr>
                    <td>40</td>
                    <td>9</td>
                    <td>25.4</td>
                  </tr>
                  <tr>
                    <td>40.5</td>
                    <td>9.5</td>
                    <td>25.7</td>
                  </tr>
                  <tr>
                    <td>41</td>
                    <td>10</td>
                    <td>26.0</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Wait List -->
<div class="modal fade" id="modalWaitList" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      
      <!-- Close -->
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="fe fe-x" aria-hidden="true"></i> </button>
      
      <!-- Header-->
      <div class="modal-header lh-fixed fs-lg"> <strong class="mx-auto">Wait List</strong> </div>
      
      <!-- Body -->
      <div class="modal-body">
        <div class="row mb-6">
          <div class="col-12 col-md-3"> 
            
            <!-- Image --> 
            <a href="./product.php"> <img class="img-fluid mb-7 mb-md-0" src="<?=get_template_directory_uri()?>/assets/img/products/product_6.jpg" alt="..."> </a> </div>
          <div class="col-12 col-md-9"> 
            
            <!-- Label -->
            <p> <a class="fw-bold text-body" href="./product.php">Cotton floral print Dress</a> </p>
            
            <!-- Radio -->
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeOne" value="6" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
              <label class="form-check-label" for="modalWaitListSizeOne">3XS</label>
            </div>
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeTwo" value="6.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
              <label class="form-check-label" for="modalWaitListSizeTwo">2XS</label>
            </div>
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeThree" value="7" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
              <label class="form-check-label" for="modalWaitListSizeThree">XS</label>
            </div>
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeFour" value="7.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption" checked>
              <label class="form-check-label" for="modalWaitListSizeFour">S</label>
            </div>
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeFive" value="8" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
              <label class="form-check-label" for="modalWaitListSizeFive">M</label>
            </div>
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeSix" value="8.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
              <label class="form-check-label" for="modalWaitListSizeSix">LG</label>
            </div>
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeSeven" value="9" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
              <label class="form-check-label" for="modalWaitListSizeSeven">XL</label>
            </div>
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeEight" value="9.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
              <label class="form-check-label" for="modalWaitListSizeEight">2XL</label>
            </div>
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeNine" value="10" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
              <label class="form-check-label" for="modalWaitListSizeNine">3XL</label>
            </div>
            <div class="form-check form-check-inline form-check-size mb-2">
              <input type="radio" class="form-check-input" name="modalWaitListSize" id="modalWaitListSizeTen" value="10.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
              <label class="form-check-label" for="modalWaitListSizeTen">4XL</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12"> 
            
            <!-- Text -->
            <p class="fs-sm text-center text-gray-500"> Justo ut diam erat hendrerit morbi porttitor,
              per eu curabitur diam sociis. </p>
          </div>
        </div>
        <div class="row gx-5 mb-2">
          <div class="col-12 col-md-6"> 
            
            <!-- Form group -->
            <div class="form-group">
              <label class="visually-hidden" for="listName">Your Name</label>
              <input class="form-control" id="listName" type="text" placeholder="Your Name *" required>
            </div>
          </div>
          <div class="col-12 col-md-6"> 
            
            <!-- Form group -->
            <div class="form-group">
              <label class="visually-hidden" for="listEmail">Your Name</label>
              <input class="form-control" id="listEmail" type="email" placeholder="Your Email *" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center"> 
            
            <!-- Button -->
            <button class="btn btn-dark" type="submit">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
