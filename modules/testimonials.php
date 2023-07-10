



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
            <table class="customer-table">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Comment</th>
                </tr>
                <tr>
                    <td>
                        <?php if (!empty($image)) : ?>
                            <img src="<?php echo $picture?>"class="img-fluid">
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





     


















