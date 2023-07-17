<div class="container mt-5 mb-5">
    <div class="testimonials-container">
        <div class="row g-2">
            <?php
            if (have_rows('testimonials_items')) :
                while (have_rows('testimonials_items')) :
                    the_row();
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    $title = get_sub_field('title');
                    $comment = get_sub_field('comment');
            ?>
            <div class="col-md-4">
                <div class="card p-3 text-center px-4">
                    <div class="user-image">
                        <?php if (!empty($image)) : ?>
                            <img src="<?php echo $image; ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                    <div class="user-content">
                        <h5 class="mb-0"><?php echo $name; ?></h5>
                        <span><?php echo $title; ?></span>
                        <p><?php echo $comment; ?></p>
                    </div>
                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>




