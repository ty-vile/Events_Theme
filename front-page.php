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
// corporateSection
$corporate_title = get_field('corporate_title');
$corporate_content = get_field('corporate_content');
$corporate_event_title = get_field('corporate_event_title');
$corporate_event_content = get_field('corporate_event_content');
$corporate_event_image = get_field('corporate_event_image');
$public_event_title = get_field('public_event_title');
$public_event_content = get_field('public_event_content');
$public_event_image = get_field('public_event_image');

// Init Arrays - Inclusion cards
$inclusionTitles = array();
$inclusionImages = array();
// Init Arrays - Package cards
$serviceTitles = array();
$serviceImages = array();
$serviceInclusions = array();


// Get custom fields - inclusion cards
for ($i = 1; $i <= 6; $i++) {
    $inclusionImages[] = get_field('inclusion_card_image_' . $i, $postID);
    $inclusionTitles[] = get_field('inclusion_card_title_' . $i, $postID);
}

for ($j = 1; $j <= 5; $j++) {
    $serviceImages[] = get_field('service_card_image_' . $j, $postID);
    $serviceTitles[] = get_field('service_card_title_' . $j, $postID);
    $serviceInclusions[] = get_field('service_card_inclusions_' . $j, $postID);
}

?>

<!-- BANNER -->
<section class="fpbanner">
    <img class="fpbanner-img" src="<?php echo $featured_image_url ?>" alt="Banner Image" />
    <div class="container">
        <div class="fpbanner-copy">
            <h1>CHANGE THE WAY YOU THINK ABOUT YOUR WEDDING, CORPORATE OR PUBLIC EVENT ENTERTAINMENT</h1>
        </div>
    </div>
</section>

<!-- INTRO SECTION -->
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

<!-- EXPERIENCE SECTION -->
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

<!-- HOVER CARD SECTION -->

<div class="container">
    <div class="hover-card">
        <div class="hover-card__inner">
            <div class="hover-card__row">
                <?php foreach ($inclusionImages as $index => $inclusionImage): ?>
                    <?php get_template_part(
                        'template-parts/components/hover-card',
                        null,
                        array(
                            'title' => $inclusionTitles[$index],
                            'image' => $inclusionImage,
                        )
                    ); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<!-- PACKAGES SECTION -->
<div class="container">
    <div class="fppackages">
        <?php foreach ($serviceImages as $index => $serviceImage): ?>
            <?php get_template_part(
                'template-parts/components/home-service-card',
                null,
                array(
                    'title' => $serviceTitles[$index],
                    'content' => $serviceInclusions[$index],
                    'image' => $serviceImage,
                )
            ); ?>
        <?php endforeach; ?>
    </div>
</div>

<!-- CORPORATE SECTION -->
<div class="container">
    <?php get_template_part(
        'template-parts/sections/intro-section',
        null,
        array(
            'title' => $corporate_title,
            'copy' => $corporate_content,
        )
    ); ?>
</div>

<div class="container">
    <div class="fpcorporate">
        <?php get_template_part(
            'template-parts/components/corporate-event',
            null,
            array(
                'title' => $corporate_event_title,
                'content' => $corporate_event_content,
                'image' => $corporate_event_image,
            )
        ); ?>
        <?php get_template_part(
            'template-parts/components/corporate-event',
            null,
            array(
                'title' => $public_event_title,
                'content' => $public_event_content,
                'image' => $public_event_image,
            )
        ); ?>
    </div>
</div>



<?php get_footer(); ?>