   <!-- Shopping Cart -->
    <div  page="shopping_cart_modals"  class="offcanvas offcanvas-end" id="modalShoppingCart" tabindex="-1" role="dialog" aria-hidden="true">
    
      <!-- Full cart (add `.d-none` to disable it) -->
    
      <!-- Close -->
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="fe fe-x" aria-hidden="true"></i>
      </button>
    
      <!-- Header-->
      <div class="offcanvas-header lh-fixed fs-lg">
        <strong class="mx-auto">Your Cart (2)</strong>
      </div>
    
      <!-- List group -->
      <ul class="list-group list-group-lg list-group-flush">
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-4">
    
              <!-- Image -->
              <a href="./product.php">
                <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product-6.jpg" alt="...">
              </a>
    
            </div>
            <div class="col-8">
    
              <!-- Title -->
              <p class="fs-sm fw-bold mb-6">
                <a class="text-body" href="./product.php">Cotton floral print Dress</a> <br>
                <span class="text-muted">$40.00</span>
              </p>
    
              <!--Footer -->
              <div class="d-flex align-items-center">
    
                <!-- Select -->
                <select class="form-select form-select-xxs w-auto">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                </select>
    
                <!-- Remove -->
                <a class="fs-xs text-gray-400 ms-auto" href="#!">
                  <i class="fe fe-x"></i> Remove
                </a>
    
              </div>
    
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row align-items-center">
            <div class="col-4">
    
              <!-- Image -->
              <a href="./product.php">
                <img class="img-fluid" src="<?=get_template_directory_uri()?>/assets/img/products/product-10.jpg" alt="...">
              </a>
    
            </div>
            <div class="col-8">
    
              <!-- Title -->
              <p class="fs-sm fw-bold mb-6">
                <a class="text-body" href="./product.php">Suede cross body Bag</a> <br>
                <span class="text-muted">$49.00</span>
              </p>
    
              <!--Footer -->
              <div class="d-flex align-items-center">
    
                <!-- Select -->
                <select class="form-select form-select-xxs w-auto">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                </select>
    
                <!-- Remove -->
                <a class="fs-xs text-gray-400 ms-auto" href="#!">
                  <i class="fe fe-x"></i> Remove
                </a>
    
              </div>
    
            </div>
          </div>
        </li>
      </ul>
    
      <!-- Footer -->
      <div class="offcanvas-footer justify-between lh-fixed fs-sm bg-light mt-auto">
        <strong>Subtotal</strong> <strong class="ms-auto">$89.00</strong>
      </div>
    
      <!-- Buttons -->
      <div class="offcanvas-body">
        <a class="btn w-100 btn-dark" href="./checkout.php">Continue to Checkout</a>
        <a class="btn w-100 btn-outline-dark mt-2" href="./shopping_cart.php">View Cart</a>
      </div>
    
      <!-- Empty cart (remove `.d-none` to enable it) -->
      <div class="d-none">
    
        <!-- Close -->
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fe fe-x" aria-hidden="true"></i>
        </button>
    
        <!-- Header-->
        <div class="offcanvas-header lh-fixed fs-lg">
          <strong class="mx-auto">Your Cart (0)</strong>
        </div>
    
        <!-- Body -->
        <div class="offcanvas-body flex-grow-0 my-auto">
    
          <!-- Heading -->
          <h6 class="mb-7 text-center">Your cart is empty 😞</h6>
    
          <!-- Button -->
          <a class="btn w-100 btn-outline-dark" href="#!">
            Continue Shopping
          </a>
    
        </div>
    
      </div>
    
    </div>