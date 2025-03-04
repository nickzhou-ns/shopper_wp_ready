<?php
include( "arr/arr_top_sellers.php" );
?>
<!-- CONTENT -->
<section page="inc_content_shop_topbar" class="py-12">
  <div class="container">
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
