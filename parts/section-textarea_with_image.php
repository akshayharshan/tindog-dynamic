<?php

$title = get_sub_field('content_title');
$content = get_sub_field('content');
$image = get_sub_field('content_image');
$picture = $image['sizes']['medium'];
$side = get_sub_field('image_side');


?>
<div class="row">
    <?php if($side == 'left:Left') :?>
        <div class="col-lg-2 "></div>
        <div class="col-lg-4 ">
            <img class="flex-img" src="<?php echo $picture ?>">
        </div>
        <div class="col-lg-6">
            <h2 class="flexible-text"><?php echo $title ?></h2>
            <p class="flexible-text"><?php echo $content ?></p>
        </div>
        <div class="col-lg-1 "></div>

    <?php else :?>
        <div class="col-lg-1 "></div>
        <div class="col-lg-6">
            <h2 class="flexible-text"><?php echo $title ?></h2>
            <p class="flexible-text"><?php echo $content ?></p>
            
        </div>
        <div class="col-lg-4">
            <img class="flex-img" src="<?php echo $picture ?>">
        </div>
        <div class="col-lg-2 "></div>

        
    <?php endif; ?>
</div>