
    <a name='activity'>
<div class='section-trips'>
<div class='section_title-wrapper col-12'>
        <h3>Attractions</h3>
        <nav class='section-flights_category col-6'>
            <span class='active'>All</span>
            <span>Shoping</span>
            <span>Show</span>
        </nav>
    </div>
    <?php if( have_rows('Attractions') ): 

        while( have_rows('Attractions') ): the_row();
        $column_1 = get_sub_field('column-1'); 
        $column_2 = get_sub_field('column-2');       
        ?>
        <div class='section-trips_gallery row'>
            <div class='col-12 col-xl-4 col-md-4 column-1'>
            <?php
            // проверяем есть ли в повторителе данные
            if( have_rows('column-1') ):
               while ( have_rows('column-1') ) : the_row();?>
                <div class='section-trips_gallery-wrapper'  style='background: url(<?php the_sub_field('image'); ?>)'>
                    <h5><?php the_sub_field('title'); ?></h5>
                </div>         
               <?php endwhile;           
            endif;
            ?>
            </div>
            <div class='col-12 col-md-8 col-xl-8 column-2'>
            <?php
            // проверяем есть ли в повторителе данные
            if( have_rows('column-2') ):
               while ( have_rows('column-2') ) : the_row();?>
                <div class='section-trips_gallery-wrapper'  style='background: url(<?php the_sub_field('image'); ?>)'>
                    <h5><?php the_sub_field('title'); ?></h5>
                </div>         
               <?php endwhile;           
            endif;
            ?>
            </div>
        </div>
        <?php endwhile; ?>

        <?php endif; ?>
        <p style='text-align: right;'>Show all</p>
        </div>