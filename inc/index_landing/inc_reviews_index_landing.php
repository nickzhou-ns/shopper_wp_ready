<?php
$arr_new_arrivals = array(
  array(
    'id' => '1',
    'img' => get_template_directory_uri() . 'assets/img/avatars/avatar-1.jpg',
    'stars' => '5',
    'text' => "From creepeth said moved given divide make multiply of him shall itself also above second doesn't unto created saying land herb sea midst night wherein. ",
    'name_date' => 'Catherine Hicks, 21 Jul 2019',
    'id_1' => '2',
    'img_1' => get_template_directory_uri() . 'assets/img/avatars/avatar-2.jpg',
    'stars_1' => '5',
    'text_1' => "Yielding place upon heaven created sea So fly you'll had years which good herb hath moveth for grass. Created. Wherein, had every were, face you'll made from.",
    'name_date_1' => 'Daisy Turner, 18 Jul 2019',
  ),
  array(
    'id' => '3',
    'img' => get_template_directory_uri() . 'assets/img/avatars/avatar-3.jpg',
    'stars' => '4',
    'text' => "Abundantly behold. God given creature she'd, greater gathering his had thing let you're firmament can't he sixth. Without evening. Given appear days signs abundantly and brought female bring.",
    'name_date' => 'Logan Edwards, 11 Jul 2019',
    'id_1' => '4',
    'img_1' => get_template_directory_uri() . 'assets/img/avatars/avatar-4.jpg',
    'stars_1' => '5',
    'text_1' => "Creeping his under doesn't. Above two fourth dry open blessed our creeping, made great. ",
    'name_date_1' => 'Jason Griffith, 05 Jul 2019',
  ),
  array(
    'id' => '5',
    'img' => get_template_directory_uri() . 'assets/img/avatars/avatar-5.jpg',
    'stars' => '5',
    'text' => "Yielding place upon heaven created sea So fly you'll had years which good herb hath moveth for grass. Created. Wherein, had every were, face you'll made from. ",
    'name_date' => 'Katrina Willis, 30 Jun 2019',
    'id_1' => '6',
    'img_1' => get_template_directory_uri() . 'assets/img/avatars/avatar-6.jpg',
    'stars_1' => '5',
    'text_1' => " Place whose a give upon seed Yielding don't cattle living.",
    'name_date_1' => 'George Sanders, 17 Jun 2019',
  ),

);
?>
<!-- inc_REVIEWS -->
<section page="inc_reviews" class="py-12 border-bottom" id="reviews">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-4"> 
        
        <!-- inc_Heading -->
        <h2 class="mb-12 text-center"> A positive Experience in many ways. </h2>
      </div>
    </div>
    <div class="row">
      <?php foreach ($arr_new_arrivals as $k => $val) { ?>
      <div class="col-12 col-md-6 col-lg-4"> 
        
        <!-- inc_Card -->
        <div class="card card-lg mb-11">
          <div class="card-body text-center bg-light"> 
            
            <!-- inc_Avatar --> 
            <img src="<?php echo $val["img"] ?>" alt="..." class="img-fluid rounded-circle mb-7 mt-n11" style="max-width: 100px;"> 
            
            <!-- inc_Text -->
            <blockquote class="blockquote mb-0"> 
              
              <!-- inc_Text -->
              <p class="fs-lg fst-normal"> <?php echo $val["text"] ?> </p>
              
              <!-- inc_Rating -->
              <div class="rating fs-xs text-warning mb-2" data-value="<?php echo $val["stars"] ?>">
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
              </div>
              
              <!-- inc_Footer -->
              <footer class="blockquote-footer"> <?php echo $val["name_date"] ?> </footer>
            </blockquote>
          </div>
        </div>
        
        <!-- inc_Card -->
        <div class="card card-lg mb-11">
          <div class="card-body text-center bg-light"> 
            
            <!-- inc_Avatar --> 
            <img src="<?php echo $val["img_1"] ?>" alt="..." class="img-fluid rounded-circle mb-7 mt-n11" style="max-width: 100px;"> 
            
            <!-- inc_Text -->
            <blockquote class="blockquote mb-0"> 
              
              <!-- inc_Text -->
              <p class="fs-lg fst-normal"> <?php echo $val["text_1"] ?> </p>
              
              <!-- inc_Rating -->
              <div class="rating fs-xs text-warning mb-2" data-value="<?php echo $val["stars_1"] ?>">
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
                <div class="rating-item"> <i class="fas fa-star"></i> </div>
              </div>
              
              <!-- inc_Footer -->
              <footer class="blockquote-footer"> <?php echo $val["name_date_1"] ?> </footer>
            </blockquote>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="row">
      <div class="col-12"> 
        
        <!-- inc_Link -->
        <div class="text-center"> <a class="link-underline" href="#!">Discover more</a> </div>
      </div>
    </div>
  </div>
</section>
