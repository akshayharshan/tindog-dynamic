
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
    <?php if(have_rows('content')):?> 
      <?php while(have_rows('content')):the_row() ?>

        <?php if(get_row_layout() == 'text_area_with_image'):?> 
          
          <?php get_template_part('parts/section','textarea_with_image') ?>
          
        <?php endif; ?>
        <?php if(get_row_layout() == 'image_slider'):
        ?>


          <?php get_template_part('parts/section','carousel') ?>
            

        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
</section>


  <!-- Press -->

  <!-- <section class="colored-section" id="press">
    <img class="press-logo" src="images/techcrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section> -->


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
    <?php
        if(have_rows('bottom_section')):
          while(have_rows('bottom_section')):the_row();
     
          $link = get_sub_field('bottom_text');
          $download = get_sub_field('bottom_button');
          $download_title = $download['title'];
          
          
       
          endwhile;


      endif;
    ?>

      <h3 class="big-heading"><?php echo esc_attr ($link) ?></h3>
      <button class="download-button btn btn-lg btn-dark" type="button"><i class="fab fa-apple"></i> <?php echo ( $download_title ); ?></button>
      <button class="download-button btn btn-lg btn-light" type="button"><i class="fab fa-google-play"></i> Download</button>
    </div>
  </section>

  <?php get_footer() ?>


  <!-- Footer -->

 