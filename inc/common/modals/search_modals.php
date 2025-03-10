  <!-- Search -->
    <div   page="search_modals" class="offcanvas offcanvas-end" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    
      <!-- Close -->
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="fe fe-x" aria-hidden="true"></i>
      </button>
    
      <!-- Header-->
      <div class="offcanvas-header lh-fixed fs-lg">
        <strong class="mx-auto">Search Products</strong>
      </div>
    
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
              <button class="btn btn-outline-border" type="submit">
                <i class="fe fe-search"></i>
              </button>
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
            <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product-5.jpg" alt="...">
    
          </div>
          <div class="col position-static">
    
            <!-- Text -->
            <p class="mb-0 fw-bold">
              <a class="stretched-link text-body" href="./product.php">Leather mid-heel Sandals</a> <br>
              <span class="text-muted">$129.00</span>
            </p>
    
          </div>
        </div>
        <div class="row align-items-center position-relative mb-5">
          <div class="col-4 col-md-3">
    
            <!-- Image -->
            <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product-6.jpg" alt="...">
    
          </div>
          <div class="col position-static">
    
            <!-- Text -->
            <p class="mb-0 fw-bold">
              <a class="stretched-link text-body" href="./product.php">Cotton floral print Dress</a> <br>
              <span class="text-muted">$40.00</span>
            </p>
    
          </div>
        </div>
        <div class="row align-items-center position-relative mb-5">
          <div class="col-4 col-md-3">
    
            <!-- Image -->
            <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product-7.jpg" alt="...">
    
          </div>
          <div class="col position-static">
    
            <!-- Text -->
            <p class="mb-0 fw-bold">
              <a class="stretched-link text-body" href="./product.php">Leather Sneakers</a> <br>
              <span class="text-primary">$85.00</span>
            </p>
    
          </div>
        </div>
        <div class="row align-items-center position-relative mb-5">
          <div class="col-4 col-md-3">
    
            <!-- Image -->
            <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product-8.jpg" alt="...">
    
          </div>
          <div class="col position-static">
    
            <!-- Text -->
            <p class="mb-0 fw-bold">
              <a class="stretched-link text-body" href="./product.php">Cropped cotton Top</a> <br>
              <span class="text-muted">$29.00</span>
            </p>
    
          </div>
        </div>
        <div class="row align-items-center position-relative mb-5">
          <div class="col-4 col-md-3">
    
            <!-- Image -->
            <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product-9.jpg" alt="...">
    
          </div>
          <div class="col position-static">
    
            <!-- Text -->
            <p class="mb-0 fw-bold">
              <a class="stretched-link text-body" href="./product.php">Floral print midi Dress</a> <br>
              <span class="text-muted">$50.00</span>
            </p>
    
          </div>
        </div>
    
        <!-- Button -->
        <a class="btn btn-link px-0 text-reset" href="./shop.php">
          View All <i class="fe fe-arrow-right ms-2"></i>
        </a>
    
      </div>
    
      <!-- Body: Empty (remove `.d-none` to enable it) -->
      <div class="offcanvas-body d-none">
    
        <!-- Text -->
        <p class="mb-3 fs-sm text-center">
          Nothing matches your search
        </p>
    
        <!-- Smiley -->
        <p class="mb-0 fs-sm text-center">
          😞
        </p>
    
      </div>
    
    </div>