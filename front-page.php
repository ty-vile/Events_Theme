<!-- WORDPRESS TEMPLATE FOR FRONT PAGE -->
<?php

get_header();

// postID
$postID = 18;
// featuredImageURL
$featured_image_url = get_the_post_thumbnail_url($postID);
// introSection
$intro_title = get_field('intro_title');
$intro_content = get_field('intro_content');
// alternateBoxes
// one
$alt_box_one_title = get_field('alt_box_one_title');
$alt_box_one_content = get_field('alt_box_one_content');
$alt_box_one_image = get_field('alt_box_one_image');
// two
$alt_box_two_title = get_field('alt_box_two_title');
$alt_box_two_button_text = get_field('alt_box_two_button_text');
$alt_box_two_button_link = get_field('alt_box_two_button_link');
$alt_box_two_image = get_field('alt_box_two_image');
// three
$alt_box_three_title = get_field('alt_box_three_title');
$alt_box_three_image_left = get_field('alt_box_three_image_left');
$alt_box_three_image_right = get_field('alt_box_three_image_right');
// experienceSection
$experience_title = get_field('experience_title');
$experience_content = get_field('experience_content');


?>

<section class="fpbanner">
    <img class="fpbanner-img" src="<?php echo $featured_image_url ?>" alt="Banner Image" />
    <div class="container">
        <div class="fpbanner-copy">
            <h1>CHANGE THE WAY YOU THINK ABOUT YOUR WEDDING, CORPORATE OR PUBLIC EVENT ENTERTAINMENT</h1>
        </div>
    </div>
</section>


<div class="container">
    <?php get_template_part(
        'template-parts/sections/intro-section',
        null,
        array(
            'title' => $intro_title,
            'copy' => $intro_content,
        )
    ); ?>
</div>

<!-- ALT BOX ONE - RIGHT -->
<section class="fpsection-one">
    <?php get_template_part(
        'template-parts/sections/alternate-right',
        null,
        array('title' => $alt_box_one_title, 'content' => $alt_box_one_content, 'btnText' => '', 'btnLink' => '', 'leftImage' => '', 'rightImage' => $alt_box_one_image)
    ); ?>

    <!-- ALT BOX TWO - LEFT -->
    <?php get_template_part(
        'template-parts/sections/alternate-left',
        null,
        array('title' => $alt_box_two_title, 'content' => '', 'btnText' => $alt_box_two_button_text, 'btnLink' => $alt_box_two_button_link, 'leftImage' => $alt_box_two_image, 'rightImage' => '')
    ); ?>

    <!-- ALT BOX THREE - RIGHT -->
    <?php get_template_part(
        'template-parts/sections/alternate-right',
        null,
        array('title' => $alt_box_three_title, 'content' => '', 'btnText' => '', 'btnLink' => '', 'leftImage' => $alt_box_three_image_left, 'rightImage' => $alt_box_three_image_right)
    ); ?>
</section>

<div class="container">
    <?php get_template_part(
        'template-parts/sections/intro-section',
        null,
        array(
            'title' => $experience_title,
            'copy' => $experience_content,
        )
    ); ?>
</div>

<?php get_footer(); ?>