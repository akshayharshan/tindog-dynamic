<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TinDog</title>
<?php wp_head() ?>
</head> 

<body>

  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">

          <a class="navbar-brand" href=""><?php the_field('title') ?></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="navbar-toggler-icon"></span>
          </button>
            <?php
                wp_nav_menu( array(
                  'theme_location'  => 'menu-1',
                  'depth'           => 0, // 1 = no dropdowns, 2 = with dropdowns.
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'    => 'bs-example-navbar-collapse-1',
                  'menu_class'      => 'navbar-nav ml-auto',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'          => new WP_Bootstrap_Navwalker(),
              ) );
            ?>
          
      </nav>



      <!-- Title -->

      <div class="row">

        <div class="col-lg-6">
          <h1 class="big-heading"><?php the_field('description') ?></h1>
          <button type="button" class="btn btn-dark btn-lg download-button"><i class="fab fa-apple"></i> Download</button>
          <button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Download</button>
        </div>

        <div class="col-lg-6">
          <img class="title-image" src="<?php echo get_field('banner_image')['url'] ?>" alt="iphone-mockup">
        </div>

      </div>

    </div>

  </section>