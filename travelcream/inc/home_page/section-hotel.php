
<a name='hotel'></a>
<section  class='section-hotel'>
<div class='section_title-wrapper'>
        <h3>Hotels</h3>
        <nav class='section-flights_category col-6'>
            <span class='active'>Best Price</span>
            <span>Distance</span>
        </nav>
</div>

<div class='section-hotel_list row'>
    <?php
global $post; // не обязательно

$myposts = get_posts( array(
    'category' => 3,
    'numberposts' => 10,
) );

foreach( $myposts as $post ):
    setup_postdata( $post );
    $title = get_the_title();
    ?>
<div class='col-xl-4 col-md-4 offset-md-0 col-sm-10 offset-sm-1 col-10 offset-1'>
<div class='section-hotel_list-item'>

<!--get gruop-->
<?php if( have_rows('hotel_post') ): 

while( have_rows('hotel_post') ): the_row(); 
    
    // переменные
    $image = get_sub_field('hote-image');
    $price = get_sub_field('hotel-price');    
    ?>

    <img src='<?php echo $image?>'>
    <div class='section-hotel_list-item-content'>
        <h4><?php echo $title?></h4>
        <span>
            <b>distance</b>
            <b>wi-fi</b>
        </span>
        <button><?php echo $price?> $</button>
    </div>
<?php endwhile; ?>

<?php endif; ?>
</div>
</div>
<?php
endforeach;
wp_reset_postdata(); // сбрасываем переменную $post
?>

</div>
<p style='text-align: right;'><a class='section-link'>Show all</a><p>
</section>