<?php
$arr_description = array(
  array(
    'id' => '1',
    'title' => "Basic",
    'badge' => '',
    'text' => "Called life don't called darkness spirit abundantly so Wherein the.",
    'sum' => ' $29.00',
    'cls_color' => '',
    'li' => '<li class="list-styled-item">
    <i class="fe fe-check me-2 text-primary"></i> Behold in creature likeness
  </li>
  <li class="list-styled-item text-muted">
    <i class="fe fe-x me-2 text-muted"></i> To hath for fly land
  </li>
  <li class="list-styled-item text-muted">
    <i class="fe fe-x me-2 text-muted"></i> Third under god above bearing
  </li>',
  ),
  array(
    'id' => '2',
    'title' => "Standart",
    'badge' => '<div class="badge bg-primary card-badge card-badge-start text-uppercase">
  Popular
</div>',
    'text' => "In herb seed land divided together seasons night good years.",
    'sum' => ' $59.00',
    'cls_color' => 'text-primary',
    'li' => '<li class="list-styled-item">
  <i class="fe fe-check me-2 text-primary"></i> Behold in creature likeness
</li>
<li class="list-styled-item">
  <i class="fe fe-check me-2 text-primary"></i> To hath for fly land
</li>
<li class="list-styled-item text-muted">
  <i class="fe fe-x me-2 text-muted"></i> Third under god above bearing
</li>',
  ),
  array(
    'id' => '3',
    'title' => "Premium",
    'badge' => '',
    'text' => "Fly which shall, male replenish stars called i sixth without.",
    'sum' => ' $79.99',
    'cls_color' => '',
    'li' => ' <li class="list-styled-item">
  <i class="fe fe-check me-2 text-primary"></i> Behold in creature likeness
</li>
<li class="list-styled-item">
  <i class="fe fe-check me-2 text-primary"></i> To hath for fly land
</li>
<li class="list-styled-item">
  <i class="fe fe-check me-2 text-primary"></i> Third under god above bearing
</li>',
  ),


);
?>
<!-- inc_PRICING -->
<section page="inc_pricing" class="py-12 bg-light" id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center"> 
        
        <!-- inc_Preheading -->
        <h6 class="heading-xxs mb-3 text-gray-400"> Pricing plans </h6>
        
        <!-- inc_Heading -->
        <h2 class="mb-10">Something for Everyone</h2>
      </div>
    </div>
    <div class="row">
      <?php foreach ($arr_description as $k => $val) { ?>
      <div class="col-12 col-lg-4"> 
        
        <!-- inc_Card -->
        <div class="card card-lg shadow mb-7 mb-lg-0"> 
          
          <!-- inc_Badge --> 
          <?php echo $val["badge"] ?> 
          
          <!-- inc_Context -->
          <div class="card-body border-bottom text-center"> 
            
            <!-- inc_Subheading -->
            <h5><?php echo $val["title"] ?></h5>
            
            <!-- inc_Heading -->
            <h2 class="mb-0 fw-bolder <?php echo $val["cls_color"] ?>"> <?php echo $val["sum"] ?> <span class="fs-lg fw-bold">/ month</span> </h2>
          </div>
          <div class="card-body"> 
            
            <!-- inc_Text -->
            <p class="text-muted"> <?php echo $val["text"] ?> </p>
            
            <!-- inc_List -->
            <ul class="list-styled mb-8">
              <?php echo $val["li"] ?>
            </ul>
            
            <!-- inc_Button -->
            <div class="text-center"> <a class="btn btn-outline-primary" href="#!"> Get Started Now </a> </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
