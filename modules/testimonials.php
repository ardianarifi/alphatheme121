<?php 
    $questions = [];
    $answers = [];
    if(have_rows('testimonials_items')):
        while( have_rows('testimonials_items') ) : the_row();
            $questions[] = get_sub_field('image');
            $answers[] = get_sub_field('name');
        endwhile;
    endif;
?>

<div class="faq">
    <div class="faq__questions">
        <div class="faq__questions__title">Questions:</div>
        <div class="faq__questions__items">
            <?php foreach($questions as $question) { ?>
                <div class="faq__questions__items__item">
                    <?= $question; ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="faq__answers">
        <div class="faq__answers__title">Answers:</div>
            <div class="faq__answers__items">
                <?php foreach($answers as $answer) { ?>
                    <div class="faq__answers__items__item">
                        <?= $answer; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>