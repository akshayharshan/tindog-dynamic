<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php 
     
            if(have_rows('page_slider')):
            while(have_rows('page_slider')):the_row();
        ?>

    <div class="carousel-item container-fluid <?php if(get_row_index() == 1 ) echo 'active';?>">
       <h2 class="testimonial-text"><?php the_sub_field('slider_title') ?></h2>
       <img class="testimonial-image" src="<?php echo get_sub_field('slider_image')['url']; ?>" alt="First slide">
       <?php the_sub_field('slider_name') ?>
    </div>
     
        <?php
            endwhile;
            endif;
        ?>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

