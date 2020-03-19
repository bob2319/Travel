
<a name='trips'></a>
<section class='section-journey'>
<div class='section_title-wrapper col-12'>
        <h3>Best Trips</h3>
        <nav class='section-flights_category col-6'>
            <span class='active'>Best Price</span>
            <span>Distance</span>
        </nav>
</div>
<div class='journey-gallery'>
<?php

// проверяем есть ли в повторителе данные
if( have_rows('trips') ):

 	// перебираем данные
    while ( have_rows('trips') ) : the_row();?>
        <div class='wrapper-trip'>
            <div style='padding-left: 0' class='col-12 col-xl-4 col-md-4 col-sm-12' >
            <img src='<?php the_sub_field('image');?>'>
            </div>
            <div style='padding-right: 0' class='wrapper-text col-12 col-xl-8 col-md-8 col-sm-12'>
                <h3><?php the_sub_field('title');?></h3>
                <p><?php the_sub_field('description');?></p>
            </div>
        </div>
        

    <?php endwhile;

else :

    // вложенных полей не найдено

endif;

?>
</div>
<p style='text-align: right;'>See all Trips</p>
</section>