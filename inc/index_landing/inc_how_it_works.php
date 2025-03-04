<?php
$arr_description = array(
  array(
    'id' => '1',
    'title' => "Take out the Lens from the container",
    'text' => "Under above saying waters saying wherein stars fourth made appear won't darkness fill, form rule i dry his god.",
    'img' => 'assets/img/products/product-99.jpg',
  ),
  array(
    'id' => '2',
    'title' => "Put the lens on a clean and dry finger",
    'text' => "Under above saying waters saying wherein stars fourth made appear won't darkness fill, form rule i dry his god.",
    'img' => 'assets/img/products/product-100.jpg',
  ), array(
    'id' => '3',
    'title' => "Look upward as you place it on your eye.",
    'text' => "Under above saying waters saying wherein stars fourth made appear won't darkness fill, form rule i dry his god.",
    'img' => 'assets/img/products/product-101.jpg',
  ),

);
?>
<!-- inc_HOW_IT_WORKS -->
<section page="inc_how_it_works" class="py-12 bg-dark bg-pattern" id="howItWorks">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- inc_Heading -->
        <h2 class="mb-10 text-center text-white"> How it Works </h2>
      </div>
    </div>
    <div class="row">
      <?php foreach ($arr_description as $k => $val) { ?>
      <div class="col-12 col-md-4"> 
        
        <!-- inc_Card -->
        <div class="card bg-none mb-7 mb-md-0"> 
          
          <!-- inc_Image -->
          <div class="card-img-top position-relative mx-auto" style="max-width: 120px;"> 
            
            <!-- inc_Circle -->
            <div class="card-circle card-circle-sm card-circle-top-end">1</div>
            
            <!-- inc_Image --> 
            <img class="img-fluid rounded-circle" src="<?php echo $val["img"] ?>" alt="..."> </div>
          
          <!-- inc_Body -->
          <div class="card-body text-center"> 
            
            <!-- inc_Heading -->
            <h6 class="mb-4 text-white"> <?php echo $val["title"] ?> </h6>
            
            <!-- inc_Text -->
            <p class="mb-0 text-gray-300"> <?php echo $val["text"] ?> </p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
