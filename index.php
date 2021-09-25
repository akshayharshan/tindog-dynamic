
<?php get_header() ?>

  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">

      <div class="row">
       <?php
        if(have_rows('features')):
          while(have_rows('features')):the_row();
          ?>
          <div class="feature-box col-lg-4">
          <?php the_sub_field('fontawesome') ?>
          <h3 class="feature-title"> <?php the_sub_field('font_title') ?></h3>
          <p><?php the_sub_field('font_text') ?></p>
        </div>
      <?php
          endwhile;
        endif;
       ?>
       
  </section>


  <!-- Testimonials -->

  <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog. Woof.</h2>
          <img class="testimonial-image" src="images/dog-img.jpg" alt="dog-profile">
          <em>Pebbles, New York</em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text">My dog used to be so lonely, but with TinDog's help, they've found the love of their life. I think.</h2>
          <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
          <em>Beverly, Illinois</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </section>


  <!-- Press -->

  <section class="colored-section" id="press">
    <img class="press-logo" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>


  <!-- Pricing -->

  <section class="white-section" id="pricing">

    <h2 class="section-heading">A Plan for Every Dog's Needs</h2>
    <p>Simple and affordable price plans for your and your dog.</p>
    <div class="row">
    <?php 
      if(have_rows('selling_point')):
        while(have_rows('selling_point')):the_row();
      ?>

        

        <div class="pricing-column col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header">
              <h3><?php the_sub_field('title') ?></h3>
            </div>
            <div class="card-body">
              <h2 class="price-text"><?php the_sub_field('price') ?></h2>
              <p><?php the_sub_field('description') ?></p>
              
              <button class="btn btn-lg btn-block btn-outline-dark" type="button"><?php echo get_sub_field('selling_button')['title'] ?></button>
            </div>
          </div>
        </div>
  
      <?php
        endwhile;

      endif;
      ?>
    </div>  
    
    
   

  </section>


  <!-- Call to Action -->

  <section class="colored-section" id="cta">

    <div class="container-fluid">

      <h3 class="big-heading">Find the True Love of Your Dog's Life Today.</h3>
      <button class="download-button btn btn-lg btn-dark" type="button"><i class="fab fa-apple"></i> Download</button>
      <button class="download-button btn btn-lg btn-light" type="button"><i class="fab fa-google-play"></i> Download</button>
    </div>
  </section>

  <?php get_footer() ?>


  <!-- Footer -->

 