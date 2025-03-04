<?php
$arr_blog = array(
  array(
    'id' => '1',
    'title' => "So isn't land signs greater void face replenish.",
    'text' => "Midst one brought greater also morning green saying had good. Open stars day let over gathered, grass face one every light of under.",
    'img' => get_template_directory_uri() . 'assets/img/blog/blog-1.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 20',
  ),
  array(
    'id' => '2',
    'title' => "Sea good every which said first divided.",
    'text' => "From fruit shall stars over. Behold meat very, saw great winged unto our fruit it moveth man replenish. Meat place is so fruit.",
    'img' => get_template_directory_uri() . 'assets/img/blog/blog-4.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 18',
  ),
  array(
    'id' => '3',
    'title' => "Morning let you created every day.",
    'text' => "Created spirit fly was fifth. Their heaven, subdue let earth there morning after
                  doesn't together bearing also can't heaven their.",
    'img' => get_template_directory_uri() . 'assets/img/blog/blog-5.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 08',
  ),
  array(
    'id' => '4',
    'title' => "Third darkness and second dry second greater.",
    'text' => "Let meat subdue the first for fourth is. Them our meat isn't you'll, you're place
                  Years dominion shall from years a hath Good appear yielding.",
    'img' => get_template_directory_uri() . 'assets/img/blog/blog-6.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 08',
  ),
  array(
    'id' => '5',
    'title' => "Heaven upon heaven moveth every have.",
    'text' => "Divide own, there tree forth whales you, fill creepeth our. You're itself may
                  yielding green was fly one kind fish hath be be winged.",
    'img' => get_template_directory_uri() . 'assets/img/blog/blog-7.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 08',
  ),
  array(
    'id' => '3',
    'title' => "Created their subdue together.",
    'text' => "Stars female night fowl our second in great can't after he sea thing so a said
                  two. Fowl may open first.",
    'img' => get_template_directory_uri() . 'assets/img/blog/blog-8.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 08',
  ),
);
?>
<!-- CONTENT -->
<section page="inc_content_blog" class="pt-7 pb-12">
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        
        <!-- Heading -->
        <h3 class="mb-7 text-center">Our Blog</h3>
        
        <!-- Nav -->
        <nav class="nav justify-content-center mb-10"> <a class="nav-link active" href="#">All</a> <a class="nav-link" href="#">Company</a> <a class="nav-link" href="#">Brand</a> <a class="nav-link" href="#">Fashion</a> <a class="nav-link" href="#">Shop</a> </nav>
      </div>
    </div>
    <div class="row">
      <?php foreach ($arr_blog as $k => $val) { ?>
      <div class="col-12 col-md-6"> 
        
        <!-- Card -->
        <div class="card mb-7"> 
          
          <!-- Badge -->
          <div class="badge bg-white text-body card-badge">
            <time class="text-uppercase" datetime="2019-06-20"><?php echo $val["date"] ?></time>
          </div>
          
          <!-- Image --> 
          <img class="card-img-top" src="<?php echo $val["img"] ?>" alt="..."> 
          
          <!-- Body -->
          <div class="card-body px-0"> 
            
            <!-- Heading -->
            <h5><?php echo $val["title"] ?></h5>
            
            <!-- Text -->
            <p class="mb-0 text-gray-500"> <?php echo $val["text"] ?> </p>
            
            <!-- Button --> 
            <a class="btn btn-link stretched-link px-0 text-reset" href="<?php echo $val["url"] ?>"> Read More <i class="fe fe-arrow-right ms-2"></i> </a> </div>
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
            <button class="btn btn-sm btn-outline-dark"> Load more </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
