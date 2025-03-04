<?php
$arr_details = array(
  array(
    'id' => '1',
    'title' => "For eyes of any Color",

    'img_lg' => get_template_directory_uri() . 'assets/img/icons/icon-eye.svg',

    'text' => 'I over whose fruitful together fish likeness
    moved our. Give made firmament female
    set divided make.',
  ),
  array(
    'id' => '2',
    'title' => "Convenient Packaging",

    'img_lg' => get_template_directory_uri() . 'assets/img/icons/icon-drops.svg',

    'text' => 'I over whose fruitful together fish likeness
    moved our. Give made firmament female
    set divided make.',
  ),
  array(
    'id' => '3',
    'title' => "Airtight Materials",

    'img_lg' => get_template_directory_uri() . 'assets/img/icons/icon-pack.svg',
    'text' => 'I over whose fruitful together fish likeness
    moved our. Give made firmament female
    set divided make.',
  ),


);
?>
<!-- inc_DETAILS -->
<section page="inc_details" class="py-12">
  <div class="container">
    <div class="row">
      <?php foreach ($arr_details as $k => $val) { ?>
      <div class="col-12 col-md-4 text-center"> 
        
        <!-- inc_Card -->
        <div class="card mb-7 mb-md-0">
          <div class="card-body"> 
            
            <!-- inc_Icon --> 
            <img class="img-fluid mb-7" src="<?php echo $val["img_lg"] ?>" alt="..."> 
            
            <!-- inc_Heading -->
            <h6 class="mb-4"><?php echo $val["title"] ?></h6>
            
            <!-- inc_Text -->
            <p class="mb-0 text-muted"> <?php echo $val["text"] ?> </p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
