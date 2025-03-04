<!-- inc_reviews -->
<section  page="inc_reviews_product_images"  class="pt-9 pb-11" id="reviews">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h4 class="mb-10 text-center">Customer Reviews</h4>
        
        <!-- No reviews -->
        <div class="text-center"> 
          
          <!-- Icon -->
          <div class="mb-6 fs-1">🙁</div>
          
          <!-- Text -->
          <p> No reviews have been published.
            Place an order first now to write a review. </p>
          
          <!-- Button--> 
          <a class="btn btn-sm btn-dark" data-bs-toggle="collapse" href="#reviewForm"> Write Review </a> </div>
        
        <!-- New Review -->
        <div class="collapse" id="reviewForm"> 
          
          <!-- Divider -->
          <hr class="my-8">
          
          <!-- Form -->
          <form>
            <div class="row">
              <div class="col-12 mb-6 text-center"> 
                
                <!-- Text -->
                <p class="mb-1 fs-xs"> Score: </p>
                
                <!-- Rating form -->
                <div class="rating-form"> 
                  
                  <!-- Input -->
                  <input class="rating-input" type="range" min="1" max="5" value="5">
                  
                  <!-- Rating -->
                  <div class="rating h5 text-dark" data-value="5">
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                    <div class="rating-item"> <i class="fas fa-star"></i> </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6"> 
                
                <!-- Name -->
                <div class="form-group">
                  <label class="visually-hidden" for="reviewName">Your Name:</label>
                  <input class="form-control form-control-sm" id="reviewName" type="text" placeholder="Your Name *" required>
                </div>
              </div>
              <div class="col-12 col-md-6"> 
                
                <!-- Email -->
                <div class="form-group">
                  <label class="visually-hidden" for="reviewEmail">Your Email:</label>
                  <input class="form-control form-control-sm" id="reviewEmail" type="email" placeholder="Your Email *" required>
                </div>
              </div>
              <div class="col-12"> 
                
                <!-- Name -->
                <div class="form-group">
                  <label class="visually-hidden" for="reviewTitle">Review Title:</label>
                  <input class="form-control form-control-sm" id="reviewTitle" type="text" placeholder="Review Title *" required>
                </div>
              </div>
              <div class="col-12"> 
                
                <!-- Name -->
                <div class="form-group">
                  <label class="visually-hidden" for="reviewText">Review:</label>
                  <textarea class="form-control form-control-sm" id="reviewText" rows="5" placeholder="Review *" required></textarea>
                </div>
              </div>
              <div class="col-12 text-center"> 
                
                <!-- Button -->
                <button class="btn btn-outline-dark" type="submit"> Post Review </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
