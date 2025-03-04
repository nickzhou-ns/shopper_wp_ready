<!-- inc_REVIEWS -->
<section   page="inc_reviews_about"  class="pt-12">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center"> 
        
        <!-- inc_Preheading -->
        <h6 class="heading-xxs mb-3 text-gray-400"> What buyers say </h6>
        
        <!-- inc_Heading -->
        <h2 class="mb-10"> Customers Reviews </h2>
        <?php
        $arr_reviews_about = array(
          array(
            'id' => '1',
            'title' => 'Darrell Baker, ',
            'text' => "Given wherein. Doesn't called also and air sea to make first subdue
    beginning. Appear seasons the it after whose beginning. Hath can't good life. They're multiply made give divided open, be likeness Cattle be have.
    Life tree darkness. She'd very.",
            'img' => '1',
            'url' => '1',
            'date' => '18 May 2019',

          ),
          array(
            'id' => '2',
            'title' => 'Darrell Baker1, ',
            'text' => "Given wherein. Doesn't called also and air sea to make first subdue
  beginning. Appear seasons the it after whose beginning. Hath can't good life. They're multiply made give divided open, be likeness Cattle be have.
  Life tree darkness. She'd very.",
            'img' => '1',
            'url' => '1',
            'date' => '18 May 2019',

          ),
          array(
            'id' => '3',
            'title' => 'Darrell Baker2, ',
            'text' => "Given wherein. Doesn't called also and air sea to make first subdue
  beginning. Appear seasons the it after whose beginning. Hath can't good life. They're multiply made give divided open, be likeness Cattle be have.
  Life tree darkness. She'd very.",
            'img' => '1',
            'url' => '1',
            'date' => '18 May 2019',

          ),
        );
        ?>
        <!-- inc_Slider -->
        <div class="flickity-buttons-lg flickity-buttons-offset px-lg-12"
                    data-flickity='{"prevNextButtons": true, "pageDots": true}'> 
          <!-- inc_Item -->
          <?php foreach ($arr_reviews_about as $k => $val) { ?>
          <blockquote class="blockquote col-12 px-4">
            <p class="mb-6"> <?php echo $val["text"] ?> </p>
            <footer class="blockquote-footer"> <?php echo $val["title"] ?>
              <time datetime="2019-05-18"><?php echo $val["date"] ?></time>
            </footer>
          </blockquote>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
