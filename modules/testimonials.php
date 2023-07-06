


<?php
$image = [];
$name = [];
$title = [];
$comment = [];

?>
<?php
if (have_rows('testimonials_items')) :
    while (have_rows('testimonials_items')) :
        the_row();
        $name = get_sub_field('name');
        $title = get_sub_field('title');
        $comment = get_sub_field('comment');
?>






<div class="customer">
  <div class="container">
    <div class="testimonial-row">
      <?php if( have_rows('testimonials') ): ?>
        <?php while( have_rows('testimonials') ) : the_row(); ?>
          <div class="testimonial-item">
            <div class="testimonial-image">
              <?php $image = get_sub_field('image'); ?>
              <?php if ($image) : ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
              <?php endif; ?>
            </div>
            <div class="testimonial-content">
              <h3 class="testimonial-name"><?php the_sub_field('name'); ?></h3>
              <p class="testimonial-title"><?php the_sub_field('title'); ?></p>
              <p class="testimonial-comment"><?php the_sub_field('comment'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>





































        <div class="customer">
            <div class="container">
                <table class="customer-table">
                    <tr>
                        <th>Image</th>
                        <th> Name</th>
                        <th>Title</th>
                        <th>Comment</th>
                    </tr>
                    <tr>
                        <td>
                        <?php if ($image) : ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            <?php endif; ?>
                        </td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $title; ?></td>
                        <td><?php echo $comment; ?></td>
                   </tr>
                </table>
             
             </div>
         </div>
<?php
    endwhile;
endif;
?>

<div class="test"></div>





     


















