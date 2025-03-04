<?php
$arr_description = array(
  array(
    'id' => '1',
    'title' => "3rd Gen. Lenses",
    'img_lg' => get_template_directory_uri() . 'assets/img/products/product-91.jpg',
    'img' => get_template_directory_uri() . 'assets/img/icons/icon-hands.svg',
  ),
  array(
    'id' => '2',
    'title' => "No age Restrictions",
    'img_lg' => get_template_directory_uri() . 'assets/img/products/product-92.jpg',
    'img' => get_template_directory_uri() . 'assets/img/icons/icon-wrap.svg',
  ),
  array(
    'id' => '3',
    'title' => "3rd Gen. Lenses",
    'img_lg' => get_template_directory_uri() . 'assets/img/products/product-93.jpg',
    'img' => get_template_directory_uri() . 'assets/img/icons/icon-bottle.svg',
  ),

);
?>
<!-- inc_DESCRIPTION -->
<section page="inc_description" class="py-12 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3">

        <!-- inc_Heading -->
        <h3 class="mb-10 text-center text-lg-start"> How is Contact Lenses different? </h3>
      </div>
      <?php foreach ($arr_description as $k => $val) { ?>
        <div class="col-12 col-md">

          <!-- inc_Card -->
          <div class="card mb-7 mb-md-0 shadow">

            <!-- inc_Image -->
            <img src="<?php echo $val["img_lg"] ?>" alt="..." class="card-img-top">

            <!-- inc_Body -->
            <div class="card-body text-center"> <img class="me-4" src="<?php echo $val["img"] ?>" alt="..."> <strong><?php echo $val["title"] ?></strong> </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>