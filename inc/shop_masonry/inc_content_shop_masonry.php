<?php
include( "arr/shop_masonry_cards.php" );
?>
<!-- CONTENT -->
<section page="inc_content_shop_masonry" class="pt-7 pb-12">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h3 class="mb-10 text-center">Women's Clothing</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12"> 
        
        <!-- Filters -->
        <div class="btn-group-justified btn-group-expand-lg mb-10" role="group">
          <div class="btn-group dropdown"> 
            
            <!-- Toggle -->
            <button class="btn btn-sm w-100 btn-outline-border dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" data-bs-auto-close="outside"> Sort by </button>
            
            <!-- Menu -->
            <form class="dropdown-menu">
              <div class="card">
                <div class="card-body"> 
                  
                  <!-- Form group -->
                  <div class="form-group-overflow">
                    <div class="form-check form-check-text mb-3">
                      <input class="form-check-input" id="sortOne" name="sort" type="radio" value="Default">
                      <label class="form-check-label" for="sortOne">Default</label>
                    </div>
                    <div class="form-check form-check-text mb-3">
                      <input class="form-check-input" id="sortTwo" name="sort" type="radio" value="Newest">
                      <label class="form-check-label" for="sortTwo">Newest</label>
                    </div>
                    <div class="form-check form-check-text mb-3">
                      <input class="form-check-input" id="sortThree" name="sort" type="radio" value="Most Popular">
                      <label class="form-check-label" for="sortThree">Most Popular</label>
                    </div>
                    <div class="form-check form-check-text mb-3">
                      <input class="form-check-input" id="sortFour" name="sort" type="radio" value="Default Price">
                      <label class="form-check-label" for="sortFour">Default Price</label>
                    </div>
                    <div class="form-check form-check-text">
                      <input class="form-check-input" id="sortFive" name="sort" type="radio" value="Highest Price">
                      <label class="form-check-label" for="sortFive">Highest Price</label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="btn-group dropdown"> 
            
            <!-- Toggle -->
            <button class="btn btn-sm w-100 btn-outline-border dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" data-bs-auto-close="outside"> Category </button>
            
            <!-- Menu -->
            <form class="dropdown-menu">
              <div class="card">
                <div class="card-body"> 
                  
                  <!-- Form group -->
                  <div class="form-group-overflow">
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="categoryOne" name="category" type="checkbox" value="All Products">
                      <label class="form-check-label" for="categoryOne">All Products</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="categoryTwo" name="category" type="checkbox" value="Blouses and Shirts">
                      <label class="form-check-label" for="categoryTwo">Blouses and Shirts</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="categoryThree" name="category" type="checkbox" value="Coats and Jackets">
                      <label class="form-check-label" for="categoryThree">Coats and Jackets</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="categoryFour" name="category" type="checkbox" value="Dresses">
                      <label class="form-check-label" for="categoryFour">Dresses</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="categoryFive" name="category" type="checkbox" value="Hoodies and Sweats">
                      <label class="form-check-label" for="categoryFive">Hoodies and Sweats</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="categorySix" name="category" type="checkbox" value="Denim">
                      <label class="form-check-label" for="categorySix">Denim</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="categorySeven" name="category" type="checkbox" value="Hoodies and Sweats">
                      <label class="form-check-label" for="categorySeven">Hoodies and Sweats</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="categoryEight" name="category" type="checkbox" value="Jeans">
                      <label class="form-check-label" for="categoryEight">Jeans</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" id="categoryNine" name="category" type="checkbox" value="Jumpers and Cardigans">
                      <label class="form-check-label" for="categoryNine">Jumpers and Cardigans</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" id="categoryTen" name="category" type="checkbox" value="Leggings">
                      <label class="form-check-label" for="categoryTen">Leggings</label>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex flex-nowrap border-top"> 
                  
                  <!-- Buttons -->
                  <button class="btn btn-outline-dark btn-sm" type="reset"> Clear </button>
                  <button class="btn btn-dark btn-sm ms-2" type="submit"> Show Results </button>
                </div>
              </div>
            </form>
          </div>
          <div class="btn-group dropdown"> 
            
            <!-- Toggle -->
            <button class="btn btn-sm w-100 btn-outline-border dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" data-bs-auto-close="outside"> Season </button>
            
            <!-- Menu -->
            <form class="dropdown-menu">
              <div class="card">
                <div class="card-body"> 
                  
                  <!-- Form group -->
                  <div class="form-group-overflow">
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="seasonOne" name="category" type="checkbox" value="Summer">
                      <label class="form-check-label" for="seasonOne">Summer</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="seasonTwo" name="category" type="checkbox" value="Winter">
                      <label class="form-check-label" for="seasonTwo">Winter</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="seasonThree" name="category" type="checkbox" value="Spring & Fall">
                      <label class="form-check-label" for="seasonThree">Spring & Fall</label>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex flex-nowrap border-top"> 
                  
                  <!-- Buttons -->
                  <button class="btn btn-outline-dark btn-sm" type="reset"> Clear </button>
                  <button class="btn btn-dark btn-sm ms-2" type="submit"> Show Results </button>
                </div>
              </div>
            </form>
          </div>
          <div class="btn-group dropdown"> 
            
            <!-- Toggle -->
            <button class="btn btn-sm w-100 btn-outline-border dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" data-bs-auto-close="outside"> Size </button>
            
            <!-- Menu -->
            <form class="dropdown-menu">
              <div class="card">
                <div class="card-body"> 
                  
                  <!-- Form group -->
                  <div class="form-group-overflow">
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeOne" type="checkbox">
                      <label class="form-check-label" for="sizeOne"> 3XS </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeTwo" type="checkbox" disabled>
                      <label class="form-check-label" for="sizeTwo"> 2XS </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeThree" type="checkbox">
                      <label class="form-check-label" for="sizeThree"> XS </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeFour" type="checkbox">
                      <label class="form-check-label" for="sizeFour"> S </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeFive" type="checkbox">
                      <label class="form-check-label" for="sizeFive"> M </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeSix" type="checkbox">
                      <label class="form-check-label" for="sizeSix"> L </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeSeven" type="checkbox">
                      <label class="form-check-label" for="sizeSeven"> XL </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeEight" type="checkbox" disabled>
                      <label class="form-check-label" for="sizeEight"> 2XL </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeNine" type="checkbox">
                      <label class="form-check-label" for="sizeNine"> 3XL </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeTen" type="checkbox">
                      <label class="form-check-label" for="sizeTen"> 4XL </label>
                    </div>
                    <div class="form-check form-check-inline form-check-size mb-2">
                      <input class="form-check-input" id="sizeEleven" type="checkbox">
                      <label class="form-check-label" for="sizeEleven"> One Size </label>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex flex-nowrap border-top"> 
                  
                  <!-- Buttons -->
                  <button class="btn btn-outline-dark btn-sm" type="reset"> Clear </button>
                  <button class="btn btn-dark btn-sm ms-2" type="submit"> Show Results </button>
                </div>
              </div>
            </form>
          </div>
          <div class="btn-group dropdown"> 
            
            <!-- Toggle -->
            <button class="btn btn-sm w-100 btn-outline-border dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" data-bs-auto-close="outside"> Color </button>
            
            <!-- Menu -->
            <form class="dropdown-menu">
              <div class="card">
                <div class="card-body"> 
                  
                  <!-- Form group -->
                  <div class="form-group-overflow">
                    <div class="form-check form-check-color mb-3">
                      <input class="form-check-input" id="colorOne" type="checkbox" style="background-color: #1f1f1f">
                      <label class="form-check-label text-body" for="colorOne"> Black </label>
                    </div>
                    <div class="form-check form-check-color mb-3">
                      <input class="form-check-input" id="colorTwo" type="checkbox" style="background-color: #f9f9f9">
                      <label class="form-check-label text-body" for="colorTwo"> White </label>
                    </div>
                    <div class="form-check form-check-color mb-3">
                      <input class="form-check-input" id="colorThree" type="checkbox" style="background-color: #3b86ff">
                      <label class="form-check-label text-body" for="colorThree"> Blue </label>
                    </div>
                    <div class="form-check form-check-color mb-3">
                      <input class="form-check-input" id="colorFour" type="checkbox" style="background-color: #ff6f61">
                      <label class="form-check-label text-body" for="colorFour"> Red </label>
                    </div>
                    <div class="form-check form-check-color mb-3">
                      <input class="form-check-input" id="colorFive" type="checkbox" style="background-color: #795548" disabled>
                      <label class="form-check-label text-body" for="colorFive"> Brown </label>
                    </div>
                    <div class="form-check form-check-color mb-3">
                      <input class="form-check-input" id="colorSix" type="checkbox" style="background-color: #bababa">
                      <label class="form-check-label text-body" for="colorSix"> Gray </label>
                    </div>
                    <div class="form-check form-check-color mb-3">
                      <input class="form-check-input" id="colorSeven" type="checkbox" style="background-color: #17a2b8">
                      <label class="form-check-label text-body" for="colorSeven"> Cyan </label>
                    </div>
                    <div class="form-check form-check-color">
                      <input class="form-check-input" id="colorEight" type="checkbox" style="background-color: #e83e8c">
                      <label class="form-check-label text-body" for="colorEight"> Pink </label>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex flex-nowrap border-top"> 
                  
                  <!-- Buttons -->
                  <button class="btn btn-outline-dark btn-sm" type="reset"> Clear </button>
                  <button class="btn btn-dark btn-sm ms-2" type="submit"> Show Results </button>
                </div>
              </div>
            </form>
          </div>
          <div class="btn-group dropdown"> 
            
            <!-- Toggle -->
            <button class="btn btn-sm w-100 btn-outline-border dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" data-bs-auto-close="outside"> Brand </button>
            
            <!-- Menu -->
            <form class="dropdown-menu">
              <div class="card">
                <div class="card-body"> 
                  
                  <!-- Search -->
                  <div data-list='{"valueNames": ["name"]}'> 
                    
                    <!-- Input group -->
                    <div class="input-group input-group-merge mb-6">
                      <input class="form-control form-control-xs search" type="search" placeholder="Search Brand">
                      
                      <!-- Button -->
                      <div class="input-group-append">
                        <button class="btn btn-outline-border btn-xs"> <i class="fe fe-search"></i> </button>
                      </div>
                    </div>
                    
                    <!-- Form group -->
                    <div class="form-group-overflow" id="brandGroup">
                      <div class="list">
                        <div class="form-check mb-3">
                          <input class="form-check-input" id="brandOne" type="checkbox">
                          <label class="form-check-label name" for="brandOne"> Dsquared2 </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" id="brandTwo" type="checkbox" disabled>
                          <label class="form-check-label name" for="brandTwo"> Alexander McQueen </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" id="brandThree" type="checkbox">
                          <label class="form-check-label name" for="brandThree"> Balenciaga </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" id="brandFour" type="checkbox">
                          <label class="form-check-label name" for="brandFour"> Adidas </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" id="brandFive" type="checkbox">
                          <label class="form-check-label name" for="brandFive"> Balmain </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" id="brandSix" type="checkbox">
                          <label class="form-check-label name" for="brandSix"> Burberry </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" id="brandSeven" type="checkbox">
                          <label class="form-check-label name" for="brandSeven"> Chloé </label>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" id="brandEight" type="checkbox">
                          <label class="form-check-label name" for="brandEight"> Kenzo </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="brandNine" type="checkbox">
                          <label class="form-check-label name" for="brandNine"> Givenchy </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex flex-nowrap border-top"> 
                  
                  <!-- Buttons -->
                  <button class="btn btn-outline-dark btn-sm" type="reset"> Clear </button>
                  <button class="btn btn-dark btn-sm ms-2" type="submit"> Show Results </button>
                </div>
              </div>
            </form>
          </div>
          <div class="btn-group dropdown"> 
            
            <!-- Toggle -->
            <button class="btn btn-sm w-100 btn-outline-border dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" data-bs-auto-close="outside"> Price </button>
            
            <!-- Menu -->
            <form class="dropdown-menu">
              <div class="card">
                <div class="card-body"> 
                  
                  <!-- Form group -->
                  <div class="form-group-overflow">
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="priceOne" type="checkbox">
                      <label class="form-check-label" for="priceOne"> $10.00 - $49.00 </label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="priceTwo" type="checkbox">
                      <label class="form-check-label" for="priceTwo"> $50.00 - $99.00 </label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="priceThree" type="checkbox">
                      <label class="form-check-label" for="priceThree"> $100.00 - $199.00 </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" id="priceFour" type="checkbox">
                      <label class="form-check-label" for="priceFour"> $200.00 and Up </label>
                    </div>
                  </div>
                </div>
                <div class="card-footer d-flex flex-nowrap border-top"> 
                  
                  <!-- Buttons -->
                  <button class="btn btn-outline-dark btn-sm" type="reset"> Clear </button>
                  <button class="btn btn-dark btn-sm ms-2" type="submit"> Show Results </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-xl-6 d-flex flex-column"> 
        
        <!-- Card --> 
        <a class="card mb-7 bg-cover" href="product.php" style="min-height: 510px; background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-88.jpg);"></a> </div>
      <div class="col-12 col-xl-6">
        <div class="row">
          <?php foreach ($arr_cards_1 as $k => $val) { ?>
          <div class="col-12 col-md-6"> 
            <!-- Card -->
            <div class="card mb-7 bg-cover"
                         style="min-height: 240px; background-image: url(<?php echo $val["img"] ?>);"> 
              
              <!-- Overlay -->
              <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
                <div class="text-center">
                  <p class="fw-bold"> <a class="text-body"
                                         href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> <br>
                    <span class="text-muted"><?php echo $val["sum"] ?></span> </p>
                  <p class="mb-0">
                    <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                         data-bs-target="#modalProduct"> <i class="fe fe-eye"></i> </button>
                    <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-shopping-cart"></i> </button>
                    <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-heart"></i> </button>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php foreach ($arr_cards_2 as $k => $val) { ?>
      <div class="col-12 col-md-6 col-xl-3"> 
        
        <!-- Card -->
        <div class="card mb-7 bg-cover"
        style="min-height: 240px; background-image: url(<?php echo $val["img"] ?>);"> 
          
          <!-- Badge --> 
          <?php echo $val["sale"] ?> 
          
          <!-- Overlay -->
          <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
            <div class="text-center">
              <p class="fw-bold"> <a class="text-body" href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> <br>
                <span class="text-muted"><?php echo $val["sum"] ?></span> </p>
              <p class="mb-0">
                <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                        data-bs-target="#modalProduct"> <i class="fe fe-eye"></i> </button>
                <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-shopping-cart"></i> </button>
                <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-heart"></i> </button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <div class="col-12 col-xl-3">
        <div class="row">
          <div class="col-12 col-md-6 col-xl-12"> 
            
            <!-- Card -->
            <div class="card mb-7 bg-cover" style="min-height: 240px; background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-82.jpg);"> 
              
              <!-- Badge -->
              <div class="badge bg-dark card-badge card-badge-start text-uppercase"> Sale </div>
              
              <!-- Overlay -->
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
          <div class="col-12 col-md-6 col-xl-12"> 
            
            <!-- Card -->
            <div class="card mb-7 bg-cover" style="min-height: 240px; background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-83.jpg);"> 
              
              <!-- Overlay -->
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
        </div>
      </div>
      <div class="col-12 col-xl-6 d-flex flex-column"> 
        
        <!-- Slider -->
        <div data-flickity='{"prevNextButtons": true}'> 
          
          <!-- Card --> 
          <a class="w-100 mb-7 bg-cover" href="product.php" style="min-height: 510px; background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-81.jpg);"></a> 
          
          <!-- Card--> 
          <a class="w-100 mb-7 bg-cover" href="product.php" style="min-height: 510px; background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-84.jpg);"></a> </div>
      </div>
      <div class="col-12 col-xl-3">
        <div class="row">
          <div class="col-12 col-md-6 col-xl-12"> 
            
            <!-- Card -->
            <div class="card mb-7 bg-cover" style="min-height: 240px; background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-85.jpg);"> 
              
              <!-- Overlay -->
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
          <div class="col-12 col-md-6 col-xl-12"> 
            
            <!-- Card -->
            <div class="card mb-7 bg-cover" style="min-height: 240px; background-image: url(<?=get_template_directory_uri()?>/assets/img/products/product-86.jpg);"> 
              
              <!-- Badge -->
              <div class="badge bg-white text-body card-badge card-badge-start text-uppercase"> New </div>
              
              <!-- Overlay -->
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
        </div>
      </div>
      <?php foreach ($arr_cards_3 as $k => $val) { ?>
      <div class="col-12 col-md-6 col-xl-3"> 
        
        <!-- Card -->
        <div class="card mb-7 bg-cover"
                 style="min-height: 240px; background-image: url(<?php echo $val["img"] ?>);"> 
          
          <!-- Badge --> 
          <?php echo $val["sale"] ?> 
          
          <!-- Overlay -->
          <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
            <div class="text-center">
              <p class="fw-bold"> <a class="text-body" href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> <br>
                <span class="text-muted"><?php echo $val["sum"] ?></span> </p>
              <p class="mb-0">
                <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                 data-bs-target="#modalProduct"> <i class="fe fe-eye"></i> </button>
                <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-shopping-cart"></i> </button>
                <button class="btn btn-xs btn-link btn-circle" data-toggle="button"> <i class="fe fe-heart"></i> </button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="row">
    <div class="col-12"> 
      
      <!-- Progress -->
      <div class="row justify-content-center mt-7">
        <div class="col-12 text-center"> 
          
          <!-- Caption -->
          <p class="fs-sm text-muted"> Showing 16 of 24 products </p>
          
          <!-- Progress -->
          <div class="progress mx-auto mb-7" style="max-width: 250px;">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          
          <!-- Button --> 
          <a class="btn btn-sm btn-outline-dark" href="#!"> Load more </a> </div>
      </div>
    </div>
  </div>
  </div>
</section>
